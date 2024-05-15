<template>
    
    <!-- User settings -->
        <q-page-container>
    <q-page-container>
      <div class="q-pa-md row"> <div class="col-4">
          <div class="user-settings-form"> <q-form @submit="saveSettings" class="q-gutter-md">
              <h4 class="text-h5 text-primary q-ml-lg text-bold">User Settings</h4>
              <q-separator></q-separator>
              <q-input outlined v-model="name" label="Name" />
              <q-input outlined v-model="username" label="Username" />
              <q-select
                    outlined
                    v-model="selectedUserType"
                    :options="userTypes"
                    label="User Type"
                    emit-value
                    map-options
                  />
                  <q-select
                    outlined
                    v-model="selectedUserType"
                    :options="userTypes"
                    label="Barangay"
                    emit-value
                    map-options
                  />
              <q-input outlined v-model="mobileNumber" label="Mobile Number" type="tel" />
              <q-input
    outlined
    v-model="password"
    label="Password"
    :type="isPwd ? 'password' : 'text'"
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
  
           <!-- Table to display user information -->
           <div class="col-8">
            <table class="user-info-table ">
              <thead >
                <tr >
                  <th class="bg-primary">Name</th>
                  <th class="bg-primary"> username</th>
                  <th class="bg-primary">User Type</th>
                  <th class="bg-primary">Barangay</th>
                  <th class="bg-primary">Mobile Number</th>
                  <th class="bg-primary">Status</th>
                  <th class="bg-primary">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ name }}</td>
                  <td>{{ username }}</td>
                  <td>{{ selectedUserType }}</td>
                  <td>{{ selectedUserType }}</td>
                  <td>{{ mobileNumber }}</td>
                  <td>{{ Status }}</td>
                  <td>{{ Action }}</td>
                </tr>
              </tbody>
            </table>
          </div>
  
  
  
          
    </q-page-container>
        </q-page-container>
    
    </template>
    
    <!--JS-->
    <script>
    import { ref } from 'vue'
    
    export default {
      setup() {
        const leftDrawerOpen = ref(false)
        const showContent = ref(false)
        const showGenerateReports = ref(false)
    
        const toggleLeftDrawer = () => {
          leftDrawerOpen.value = !leftDrawerOpen.value
        }
    
        const navigateTo = (route) => {
          // Implement your navigation logic here
        }
    
        const logout = () => {
          // Implement your logout logic here
        }
    
        return {
          leftDrawerOpen,
          toggleLeftDrawer,
          showContent,
          showGenerateReports,
          navigateTo,
          logout
        }
      }
    }
    </script>
    
    
    <!--CSS-->
    <style>
    .custom-font {
    font-size: 1.35em; /* Adjust the size as needed */
  }
  
  .user-settings-form {
    width: 500px; /* Adjust the width as needed */
    /* Add any other styles to customize the form's appearance */
    padding: 15px;
    border-radius: 5px;
    margin-top: -60px;
    margin-left: -600px;
  }
  
  .user-info-table {
    width: 72%;
    border-collapse: collapse;
    margin-top: -500px; /* Adjust spacing as needed */
    margin-left: 300px;
  }
  
  .user-info-table th,
  .user-info-table td {
    border: 1px solid #000;
    padding: 8px;
    text-align: left;
  }
  
  .user-info-table th {
    background-color: #f2f2f2;
  }
  
  .user-info-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }
    </style>
  