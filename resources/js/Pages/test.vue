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
        <h5 class="text-primary text-center text-bold">LYDO</h5>
        <h6 class="q-ml-xl">Dashboard</h6>
        <h6 class="q-ml-xl" style="margin-top: -45px;">Profile</h6>
        <h6 class="q-ml-xl" style="margin-top: -45px;">Program</h6>
        <h6 class="q-ml-xl" style="margin-top: -45px;">Sk Activities</h6>
        <h6 class="q-ml-xl" style="margin-top: -45px;">Youth Org. Registry</h6>
        <h6 class="q-ml-xl" style="margin-top: -45px;">Generate Reports</h6>
        <h6 class="q-ml-xl" style="margin-top: -45px;">Settings</h6>
        <h6 class="q-ml-xl" style="margin-top: -45px;">Logout</h6>
      </q-drawer>

      <q-page-container>
        <router-view />
      </q-page-container>

    </q-layout>
  </template>

  <script>
  import { ref } from 'vue'

  export default {
    setup () {
      const leftDrawerOpen = ref(false)

      return {
        leftDrawerOpen,
        toggleLeftDrawer () {
          leftDrawerOpen.value = !leftDrawerOpen.value
        }
      }
    }
  }
  </script>
