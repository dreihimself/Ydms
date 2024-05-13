<template>
    <q-layout view="hHh lpR fFf">

      <q-header elevated class="bg-dark text-white">
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

      <q-drawer show-if-above v-model="leftDrawerOpen" side="left" bordered class="bg-dark">
        <!-- drawer content -->
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
