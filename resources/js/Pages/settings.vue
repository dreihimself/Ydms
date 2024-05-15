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
  
      <q-page-container>
        <template>
  <div class="q-pa-md example-row-equal-width">

    <div class="row">
      <div class="col">
        .col
      </div>
      <div class="col">
        .col
      </div>
    </div>
  </div>
</template>
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
  </style>