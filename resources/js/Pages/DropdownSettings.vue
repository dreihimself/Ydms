<template>
  <Head title="Activity" />
  <div>
    <div>
      <!--tab here-->
      <Head title="Activity" />
      <div class="container" style="display: flex; align-items: center; gap: 5px; font-size: 12px;">
        <div class="q-pa-xm bg-primary" style="width: 17%;">
          <q-tabs v-model="tab">
            <q-item href="/DropdownSettings" :class="$page.component === 'civilstatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
              <q-item-section class="text-white"> Activity </q-item-section>
            </q-item>
          </q-tabs>
        </div>
        <div class="q-pa-xm bg-accent" style="width: 17%;">
          <q-tabs v-model="tab">
            <q-item href="/program" :class="$page.component === 'program'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
              <q-item-section class="text-black"> Program </q-item-section>
            </q-item>
          </q-tabs>
        </div>
        <div class="q-pa-xm bg-accent" style="width: 17%;">
          <q-tabs v-model="tab">
            <q-item href="/civilstatus" :class="$page.component === 'CivilStatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
              <q-item-section class="text-black"> Civil Status </q-item-section>
            </q-item>
          </q-tabs>
        </div>
        <div class="q-pa-xm bg-accent" style="width: 17%;">
          <q-tabs v-model="tab">
            <q-item href="/educationalbackground" :class="$page.component === 'EducationalBackground'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
              <q-item-section class="text-black"> Educational<br>Background </q-item-section>
            </q-item>
          </q-tabs>
        </div>
        <div class="q-pa-xm bg-accent" style="width: 17%;">
          <q-tabs v-model="tab">
            <q-item href="/youthclassification" :class="$page.component === 'YouthClassification'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
              <q-item-section class="text-black"> Youth <br>Classification </q-item-section>
            </q-item>
          </q-tabs>
        </div>
        <div class="q-pa-xm bg-accent" style="width: 17%;">
          <q-tabs v-model="tab">
            <q-item href="/workingstatus" :class="$page.component === 'WorkingStatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
              <q-item-section class="text-black"> Working Status </q-item-section>
            </q-item>
          </q-tabs>
        </div>
      </div>
      <q-separator color="black" style="margin-left: 1px;" />
    </div>
    <div>
      <!--tab content here-->
      <div class="row">
        <div class="col">
          <!-- Input fields -->
          <div class="user-settings-form">
            <q-form @submit.prevent="submit" class="q-gutter-md" style="margin-top: 85px;">
              <q-input outlined v-model="activity" label="Activity" dense required />
              <q-input outlined v-model="title" label="Title" dense required />
              <q-input v-model="date" outlined type="date" label="Date" dense required />
              <q-input outlined v-model="venue" label="Venue" dense required />
              <q-input outlined v-model="facilitator" label="Facilitator/Training Inst." dense required />
              <q-input outlined v-model="costoftraining" label="Cost of Training" dense required />
              <div class="text-right">
                <q-btn label="Save" type="submit" color="primary" />
              </div>
            </q-form>
          </div>
          <!-- Input fields -->
        </div>
        <div class="col-8">
  <div style="display: flex; align-items: center; gap: 15px; margin-top: 5%; margin-left: 20%">
    <q-input v-model="searchDate" outlined type="date" label="Search by Date" dense style="width: 30%;">
    </q-input>
    <q-input v-model="search" outlined type="search" label="Search" dense style="width: 65%; margin-right: 10px;">
      <template v-slot:append>
        <q-icon name="search" />
      </template>
    </q-input>
    
  </div>
  <div class="q-pa-md">
    <q-table :rows="filteredAndSortedRows" :columns="columns" row-key="activity" />
  </div>
</div>

      </div>
    </div>
  </div>
</template>


<script>
import axios from 'axios';

const columns = [
  { name: 'activity', required: true, label: 'Activity', align: 'left', field: row => row.activity, format: val => `${val}`, sortable: true, headerStyle: { background: '#1976D2', color: 'white' }},
  { name: 'title', align: 'center', label: 'Title', field: 'title', sortable: true, headerStyle: { background: '#1976D2', color: 'white' }},
  { name: 'date', align: 'center', label: 'Date', field: 'date', sortable: true, headerStyle: { background: '#1976D2', color: 'white' }},
  { name: 'venue', align: 'center', label: 'Venue', field: 'venue', sortable: true, headerStyle: { background: '#1976D2', color: 'white' }},
  { name: 'facilitator', align: 'center', label: 'Facilitator', field: 'facilitator', sortable: true, headerStyle: { background: '#1976D2', color: 'white' }},
  { name: 'costoftraining', align: 'center', label: 'Cost of Training', field: 'costoftraining', sortable: true, headerStyle: { background: '#1976D2', color: 'white' }},
  { name: 'status', label: 'Status', field: 'status', headerStyle: { background: '#1976D2', color: 'white' }},
  { name: 'Action', label: 'Action', field: 'action', headerStyle: { background: '#1976D2', color: 'white' }}
];

export default {
  data() {
    return {
      activity: '',
      title: '',
      date: '',
      venue: '',
      facilitator: '',
      costoftraining: '',
      status: 'Active',
      rows: [],
      columns,
      search: '',
      searchDate: ''
    };
  },
  computed: {
    filteredAndSortedRows() {
      const searchTerm = this.search.toLowerCase();
      const searchDate = this.searchDate;
      // Filter rows based on search input and searchDate
      let filteredRows = this.rows.filter(row => {
        const matchesTerm = Object.keys(row).some(key => {
          return String(row[key]).toLowerCase().includes(searchTerm);
        });
        const matchesDate = !searchDate || row.date === searchDate;
        return matchesTerm && matchesDate;
      });
      // Sort the filtered rows in descending order by date
      return filteredRows.sort((a, b) => new Date(b.date) - new Date(a.date));
    }
  },
  methods: {
    fetchData() {
      axios
        .get('/api/activity')
        .then(response => {
          this.rows = response.data;
        })
        .catch(error => {
          console.error('Error fetching data', error);
        });
    },
    submit() {
      const payload = {
        activity: this.activity,
        title: this.title,
        date: this.date,
        venue: this.venue,
        facilitator: this.facilitator,
        costoftraining: this.costoftraining,
        status: this.status,
      };

      axios
        .post('/api/activity', payload)
        .then(response => {
          console.log(response.data);
          alert(this.activity + ' added successfully');
          // Optionally, reset the form fields after successful submission
          this.resetForm();
          this.fetchData();
        })
        .catch(error => {
          console.error('Error submitting data', error);
        });
    },
    resetForm() {
      // Reset form fields
      this.activity = '';
      this.title = '';
      this.date = '';
      this.venue = '';
      this.facilitator = '';
      this.costoftraining = '';
      this.status = 'Active';
    }
  },
  created() {
    this.fetchData();
  }
}
</script>
