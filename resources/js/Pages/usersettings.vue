<template>
  <Head title="User Settings" />
  <div>

    <div>
      <!--tab here-->
      <Head title="User Settings" />
      <div class="q-pa-md" style="margin-left: -45px">
        <div class="q-gutter-y-md bg-blue" style="width: 10%; margin-left: 30px;">
          <q-tabs v-model="tab">
            <q-tab name="mails" class="q-tab q-pa-none q-pl-none q-mx-none">
              <div class="text-white" style="width: 100%; text-align: left"> User Settings </div>
            </q-tab>
          </q-tabs>
        </div>
      </div>
      <q-separator color="black" style="margin-top: -17px; margin-left: 1px;" />
    </div>
    <div>
      <!--tab content here-->
      <div class="row">
        <div class="col">
          <!-- Input fields -->
          <div class="user-settings-form">
            <q-form @submit="saveSettings" class="q-gutter-md" style="margin-top: 85px;">
              <div class="input-container" style="display: flex; justify-content: space-around; align-items: center; gap: 15px;">
                <q-input outlined v-model="FirstName" label="First Name" dense required />
                <q-input outlined v-model="middleName" label="Middle Name" dense />
                <q-input outlined v-model="LastName" label="Last Name" dense required />
                <q-input outlined v-model="Suffix" label="Suffix" dense />
              </div>
              <q-input outlined v-model="username" label="Username" dense required />
              <q-select outlined v-model="selectedUserType" :options="userTypes" label="User Type" emit-value map-options dense />
              <q-select outlined v-model="selectedUserType" :options="userTypes" label="Barangay" emit-value map-options dense />
              <q-input outlined v-model="mobileNumber" label="Mobile Number" type="tel" dense />
              <q-input outlined v-model="password" label="Password" :type="isPwd ? 'password' : 'text'" dense>
                <template v-slot:append>
                  <q-icon :name="isPwd ? 'visibility_off' : 'visibility'" class="cursor-pointer" @click="isPwd = !isPwd" />
                </template>
              </q-input>
              <div class="text-right">
                <q-btn label="Save" type="submit" color="primary" />
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
          <div class="q-pa-md">
            <q-table :rows="rows" :columns="columns" row-key="name" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  import {
    ref
  } from 'vue';
  const columns = [{
    name: 'name',
    required: true,
    label: 'UserName',
    align: 'left',
    field: row => row.name,
    format: val => `${val}`,
    sortable: true
  }, {
    name: 'UserType',
    align: 'center',
    label: 'UserType',
    field: 'calories',
    sortable: true
  }, {
    name: 'Barangay',
    label: 'Barangay',
    field: 'fat',
    sortable: true
  }, {
    name: 'MobileNumber',
    label: 'Mobile Number',
    field: 'carbs'
  }, {
    name: 'Status',
    label: 'Status',
    field: 'protein'
  }, {
    name: 'Action',
    label: 'Action',
    field: 'sodium'
  }, ]
  const rows = []
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