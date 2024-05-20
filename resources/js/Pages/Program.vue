<template>
    <Head title="Program" />
    <div>
        <div>
            <!--tab here-->

            <Head title="Program" />
            <div class="container" style="display: flex; align-items: center; gap: 5px; font-size: 12px;">


  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item href="/DropdownSettings" :class="$page.component === 'DropdownSettings'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Activity </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-primary" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item href="/program" :class="$page.component === 'program'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-white"> Program </q-item-section>
      </q-item>
    </q-tabs>
  </div>
  <div class="q-pa-xm bg-accent" style="width: 17%;">
    <q-tabs v-model="tab">
      <q-item  href="/civilstatus" :class="$page.component === 'CivilStatus'" name="mails" class="q-tab q-pa-none q-pl-none q-mx-none text-center">
        <q-item-section class="text-black"> Civil Status </q-item-section>
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
        <div>
            <!--tab content here-->


            <div class="row">
        <div class="col">
          <!-- Input fields -->
          <div class="user-settings-form">
            <q-form @submit="saveSettings" class="q-gutter-md" style="margin-top: 85px;">
              <q-input outlined v-model="Program" label="Program" dense required />
              <q-input outlined v-model="Title" label="Title" dense required />
              <div class="text-right">
                <q-btn label="Save" @click="saveSettings" color="primary" />
              </div>
            </q-form>
          </div>
          <!-- Input fields -->
        </div>
        <div class="col-8">
          <q-input v-model="search" outlined type="search" label="Search" dense style="margin-top: 30px; width: 65%; padding-left: 16px; margin-left: 33%;" class="justify-end">
            <template v-slot:append>
              <q-icon name="search" />
            </template>
          </q-input>
          <div class="q-pa-md" >
            <q-table :rows="rows" :columns="columns "  row-key="name"  />
          </div>
        </div>
      </div>

        </div>

</template>


<script>

  import axios from 'axios';

  const columns = [
      { name: 'prog', label: 'Program', field: 'prog', align: 'left', headerStyle: { background: '#1976D2', color: 'white' } },
  { name: 'titl', label: 'Title', field: 'titl', headerStyle: { background: '#1976D2', color: 'white' } }
      ];

 export default {
  data(){
    return{
      Program: '',
      Title: '',
      Search: '',
      columns,
      rows: []

    };
  },

  methods: {
    fetchData() {
      axios
        .get('/api/program_entry')
        .then(response => {
          this.rows = response.data;
        })
        .catch(error => {
          console.error('Error fetching data:', error);
        });
      },
      saveSettings() {
      const payload = {
        prog: this.Program,
        titl: this.Title
      };

      axios
        .post('/api/program_entry', payload)
        .then(response => {
          console.log(response.data);
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
      this.Program = '';
      this.Title = '';
    }
  },
  created() {
    this.fetchData();
  }
};
</script>
