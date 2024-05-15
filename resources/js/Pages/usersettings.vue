<template>
    <q-layout view="hHh lpR fFf">
      <q-header elevated class="bg-dark text-white" style="height:100px; align-content:center;">
        <q-toolbar>
          <q-btn dense flat round icon="menu" @click="toggleLeftDrawer" />
          <q-toolbar-title>
            <q-avatar>
              <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Sangguniang_Kabataan_logo.svg">
            </q-avatar>
            YOUTH DEVELOPMENT MANAGEMENT SYSTEM
          </q-toolbar-title>
        </q-toolbar>
      </q-header>
  
      <q-drawer show-if-above v-model="leftDrawerOpen" side="left" bordered class="bg-dark text-white">
        <!-- drawer content -->
        <h3 class="text-h5 text-primary q-ml-lg text-bold">LYDO</h3>
  
        <q-list bordered class="q-ml-xl">
          <q-item clickable v-ripple @click="navigateTo('dashboard')" class="custom-font">
            <q-item-section>
              <q-item-label>Dashboard</q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable v-ripple @click="navigateTo('profile')" class="custom-font">
            <q-item-section>
              <q-item-label>Profile</q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable v-ripple @click="navigateTo('program')" class="custom-font">
            <q-item-section>
              <q-item-label>Program</q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable v-ripple @click="navigateTo('sk-activities')" class="custom-font">
            <q-item-section>
              <q-item-label>Sk Activities</q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable v-ripple @click="navigateTo('youth-org-registry')" class="custom-font">
            <q-item-section>
              <q-item-label>Youth Org. Registry</q-item-label>
            </q-item-section>
          </q-item>
          <q-item clickable v-ripple @click="showGenerateReports = !showGenerateReports" class="custom-font">
            <q-item-section>
              <q-item-label>Generate Reports</q-item-label>
            </q-item-section>
          </q-item>
          <q-slide-transition>
            <div v-if="showGenerateReports" class="q-pa-md custom-font">
              <p>KK Profiling Summary</p>
              <p>SK Council Activity</p>
              <p>Programs Summary</p>
              <p>Activity Summary</p>
            </div>
          </q-slide-transition>
          <q-item clickable v-ripple @click="showContent = !showContent" class="custom-font">
            <q-item-section>
              <q-item-label>Settings</q-item-label>
            </q-item-section>
          </q-item>
          <q-slide-transition>
            <div v-if="showContent" class="q-pa-md custom-font">
              <a href="{{ route(usersettings) }}">User Settings</a>
              <p>Dropdown Settings</p>
              <p>SK Officials</p>
              <p>Barangay Registry</p>
              <p>Department Head</p>
            </div>
          </q-slide-transition>
          <q-item clickable v-ripple @click="logout()" class="custom-font">
            <q-item-section>
              <q-item-label>Logout</q-item-label>
            </q-item-section>
          </q-item>
        </q-list>
      </q-drawer>
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
  
    </q-layout>
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
  margin-left: -250px;
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
