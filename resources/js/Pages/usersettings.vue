<template>
  <Head title="User Settings" />

  <div class="q-pa-md" style="margin-left: -45px">
      
    <div class="q-gutter-y-md bg-blue" style="width: 370px; margin-left: 30px;">
      <q-tabs v-model="tab">
        <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
          <div class="text-white" style="width: 100%; text-align: left">
            User Settings
          </div>
        </q-tab>
      </q-tabs>
    </div>
  </div>
  <q-separator color="black" style="margin-top: -17px; margin-left: 1px;"/>
  
  <div class="row">
    <div class="col-6">
      <div class="q-pa-md row">
        <div class="col-4">
          <div class="user-settings-form">
            <q-form @submit="saveSettings" class="q-gutter-md">
              <div class="input-container">
                <q-input outlined v-model="FirstName" label="First Name" dense required/>
                <q-input outlined v-model="middleName" label="Middle Name" dense />
                <q-input outlined v-model="LastName" label="Last Name" dense required/>
                <q-input outlined v-model="Suffix" label="Suffix" dense />
              </div>
              <q-input outlined v-model="username" label="Username" dense required/>
              <q-select outlined v-model="selectedUserType" :options="userTypes" label="User Type" emit-value map-options dense />
              <q-select outlined v-model="selectedUserType" :options="userTypes" label="Barangay" emit-value map-options dense />
              <q-input outlined v-model="mobileNumber" label="Mobile Number" type="tel" dense />
              <q-input
                outlined
                v-model="password"
                label="Password"
                :type="isPwd ? 'password' : 'text'"
                dense
              >
                <template v-slot:append>
                  <q-icon
                    :name="isPwd ? 'visibility_off' : 'visibility'"
                    class="cursor-pointer"
                    @click="isPwd = !isPwd"
                  />
                </template>
              </q-input>
              <div class="text-right"> 
                <q-btn label="Save" type="submit" color="primary" />
              </div>
            </q-form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-6">
      <q-input v-model="search" filled type="search" label="Search" dense style="margin-top: 30px;">
        <template v-slot:append>
          <q-icon name="search" />
        </template>
      </q-input>
      <div class="q-pa-ms" style="width: 670px; height: 400px; margin-top: 20px; margin-left: -60px;">
        <q-table
          flat bordered
          :rows="rows"
          :columns="columns"
          row-key="name"
          style="max-height: 100%; overflow-y: auto;"
        />
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';
const columns = [
   {
     name: 'name',
     required: true,
     label: 'UserName',
     align: 'left',
     field: row => row.name,
     format: val => `${val}`,
     sortable: true
   },
   { name: 'UserType', align: 'center', label: 'UserType', field: 'calories', sortable: true },
   { name: 'Barangay', label: 'Barangay', field: 'fat', sortable: true },
   { name: 'MobileNumber', label: 'Mobile Number', field: 'carbs' },
   { name: 'Status', label: 'Status', field: 'protein' },
   { name: 'Action', label: 'Action', field: 'sodium' },
 ]
 
 const rows = [
   {
     name: 'Frozen Yogurt',
     calories: 159,
     fat: 6.0,
     carbs: 24,
     protein: 4.0,
     sodium: 87,
     calcium: '14%',
     iron: '1%'
   },
   {
     name: 'Ice cream sandwich',
     calories: 237,
     fat: 9.0,
     carbs: 37,
     protein: 4.3,
     sodium: 129,
     calcium: '8%',
     iron: '1%'
   },
   {
     name: 'Eclair',
     calories: 262,
     fat: 16.0,
     carbs: 23,
     protein: 6.0,
     sodium: 337,
     calcium: '6%',
     iron: '7%'
   },
   {
     name: 'Cupcake',
     calories: 305,
     fat: 3.7,
     carbs: 67,
     protein: 4.3,
     sodium: 413,
     calcium: '3%',
     iron: '8%'
   },
   {
     name: 'Gingerbread',
     calories: 356,
     fat: 16.0,
     carbs: 49,
     protein: 3.9,
     sodium: 327,
     calcium: '7%',
     iron: '16%'
   },
   {
     name: 'Jelly bean',
     calories: 375,
     fat: 0.0,
     carbs: 94,
     protein: 0.0,
     sodium: 50,
     calcium: '0%',
     iron: '0%'
   },
   {
     name: 'Lollipop',
     calories: 392,
     fat: 0.2,
     carbs: 98,
     protein: 0,
     sodium: 38,
     calcium: '0%',
     iron: '2%'
   },
   {
     name: 'Honeycomb',
     calories: 408,
     fat: 3.2,
     carbs: 87,
     protein: 6.5,
     sodium: 562,
     calcium: '0%',
     iron: '45%'
   },
   {
     name: 'Donut',
     calories: 452,
     fat: 25.0,
     carbs: 51,
     protein: 4.9,
     sodium: 326,
     calcium: '2%',
     iron: '22%'
   },
   {
     name: 'KitKat',
     calories: 518,
     fat: 26.0,
     carbs: 65,
     protein: 7,
     sodium: 54,
     calcium: '12%',
     iron: '6%'
   }
 ]

export default {
  setup() {
    return {
      columns,
      rows,
      FirstName: ref(''),
      middleName: ref(''),
      LastName: ref(''),
      Suffix: ref(''),
      username: ref(''),
      selectedUserType: ref(null),
      userTypes: ['Type A', 'Type B', 'Type C'],
      mobileNumber: ref(''),
      password: ref(''),
      isPwd: ref(false),
      tab: ref('mails')
    };
  }
};
</script>

<style>
.custom-font {
  font-size: 1.35em; /* Adjust the size as needed */
}

.user-settings-form {
  width: 550px; /* Adjust the width as needed */
  /* Add any other styles to customize the form's appearance */
  padding: 15px;
  border-radius: 20px;
  margin-left: -30px;
}

.input-container {
  display: flex; /* Enable flexbox */
  justify-content: space-around; /* Distribute inputs evenly */
  align-items: center; /* Align vertically (optional) */
  gap: 5px; /* Add spacing between inputs */
}


</style>
