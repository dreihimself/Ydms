<template>
    <Head title="Civil Status" />
    <div>
        <div>
            <!--tab here-->


            <div class="container" style="display: flex; align-items: center; gap: 5px; font-size: 12px;">


  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item href="/DropdownSettings" :class="$page.component === 'DropdownSettings'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Activity </q-item-section>
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
  <div class="q-pa-xm bg-primary" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item  href="/civilstatus" :class="$page.component === 'civilstatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-white"> Civil Status </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
        <q-item  href="/educationalbackground" :class="$page.component === 'EducationalBackground'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
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
      <q-item  href="/workingstatus" :class="$page.component === 'WorkingStatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Working Status </q-item-section>
      </q-item>
    </q-tabs>
  </div>
</div>

      <q-separator color="black" style="margin-left: 1px;" />
    </div>

        </div>
        <div class="q-mx-xl q-px-xl">
            <!--tab content here-->
            <div class="q-mt-xl q-pr-md" >
            <q-form class="q-gutter-md" style="width:100%; display: flex; align-items: center; gap: 5px; justify-content: end;">
            <q-input outlined v-model="civilstatus" dense label="Add Option" style="width:25%"/>
            <q-input  outlined v-model="optionstatus" value="Active" dense label="Add Option" style="width:25%" class="hidden"/>

            <q-btn label="+" color="primary" @click="addOption" />
        </q-form>
        </div>

          <div class="q-pa-md" >
            <!-- <q-table :rows="rows" :columns="columns " /> -->
            <q-table flat bordered :rows="rows" :columns="columns" style="max-height: 100%; overflow-y: auto;" />
          </div>






        </div>

</template>


<script>
import axios from 'axios';

const columns = [
  { name: 'civilstatus', label: 'Dropdown List', sortable: true, field: 'civilstatus', align: 'left', headerStyle: { background: '#1976D2', color: 'white' } },
  { name: 'optionstatus', label: 'Option Status', sortable: true, field: 'optionstatus',align: 'left', headerStyle: { background: '#1976D2', color: 'white' } },
  { name: 'action', label: 'Action', field: 'Action', headerStyle: { background: '#1976D2', color: 'white' } },

];

export default {
  data() {
    return {
      civilstatus: '',
      optionstatus: 'Active',
      columns,
      rows: [],


    };
  },
  methods: {
    fetchData() {
      axios
        .get('/api/civil_status')
        .then(response => {
          this.rows = response.data;
        })
        .catch(error => {
          console.error('Error fetching data:', error);
        });
    },
    addOption() {
      const payload = {
        civilstatus: this.civilstatus,
        optionstatus: this.optionstatus,

      };

      axios
        .post('/api/civil_status', payload)
        .then(response => {
          console.log(response.data);
          alert(this.civilstatus + ' added successfully');
          this.resetForm();
          this.fetchData();

        })
        .catch(error => {
          if (error.response) {
            console.error('Error response:', error.response.data);
            console.error('Error status:', error.response.status);
            console.error('Error headers:', error.response.headers);
          } else if (error.request) {
            console.error('Error request:', error.request);
          } else {
            console.error('Error message:', error.message);
          }
        });

    },
    resetForm() {
      this.civilstatus = '';
      this.optionstatus = '';

    }

  },
  created() {
    this.fetchData();

  }


};

</script>
