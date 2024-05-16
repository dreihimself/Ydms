<template>
    <q-layout view="hHh lpR fFf">
        <q-header elevated class="bg-dark text-white" >
            <q-toolbar style="height:100px">
                <q-btn dense flat round icon="menu" @click="toggleLeftDrawer" />
                <q-toolbar-title style="align-items: center; display: flex; ">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Sangguniang_Kabataan_logo.svg" style="height: 50px;" class="q-mr-sm">
                    YOUTH DEVELOPMENT MANAGEMENT SYSTEM
                </q-toolbar-title>
            </q-toolbar>
        </q-header>
        <q-drawer show-if-above v-model="leftDrawerOpen" side="left" class="bg-dark text-white drawer-wrapper">
            <div class="full-height drawer">
                <h3 class="text-h5 text-primary q-ml-lg text-bold">LYDO</h3>

                <div class="full-height wrapper text-white text-h6">
                    <div style="padding: 10px;">
                        <q-list padding>
                            <Navigation class="no-text-decoration" href="/home">
                                <q-item  class="q-ma-xm navigation-item text-white" :class="$page.component === 'HomePage' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        Dashboard
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                            <Navigation href="">
                                <q-item class="q-ma-xm navigation-item text-white" :class="$page.component === '' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        Profile
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                            <Navigation href="">
                                <q-item class="q-ma-xm navigation-item text-white" :class="$page.component === '' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        Program
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                            <Navigation href="">
                                <q-item class="q-ma-xm navigation-item text-white " :class="$page.component === '' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        SK Activities
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                                <q-expansion-item
    expand-separator
    label="Generate Reports"
    :default-opened="$page.component.startsWith('reports')"
>
  <q-list>
    <q-item clickable to="/kkprofilingsummary" :active="$page.component === 'kkprofilingsummary'? 'bg-grey-14' : null ">
      <q-item-section>KK Profiling Summary</q-item-section>
    </q-item>
    <q-item clickable to="/skcouncilactivity" :active="$page.component === 'skcouncilactivity'? 'bg-grey-14' : null">
      <q-item-section>SK Council Activity</q-item-section>
    </q-item>
    <q-item clickable to="/programssummary" :active="$page.component === 'programssummary'? 'bg-grey-14' : null">
      <q-item-section>Programs Summary</q-item-section>
    </q-item>
    <q-item clickable to="/activitysummary" :active="$page.component === 'activitysummary'? 'bg-grey-14' : null">
      <q-item-section>Activity Summary</q-item-section>
    </q-item>
  </q-list>
</q-expansion-item>

                                        <q-expansion-item
    expand-separator
    label="Settings"
    :default-opened="$page.component.startsWith('settings')"
  >
    <q-list>
      <q-item href="/usersettings" :class="$page.component === 'usersettings'? 'bg-grey-14' : null">
        <q-item-section>User Settings</q-item-section>
      </q-item>
      <q-item href="/DropdownSettings" :class="$page.component === 'DropdownSettings'? 'bg-grey-14' : null">
        <q-item-section>DropDown Setings</q-item-section>
      </q-item>
      <q-item href="/SkOfficials" :class="$page.component === 'SkOfficials'? 'bg-grey-14' : null">
        <q-item-section>Sk Officials</q-item-section>
      </q-item>
      <q-item href="/brgyreg" :class="$page.component === 'BrgyReg'? 'bg-grey-14' : null">
        <q-item-section>Barangay Registry</q-item-section>
      </q-item>
      <q-item href="/dept_head" :class="$page.component === 'DepartmentHead'? 'bg-grey-14' : null">
        <q-item-section>Department Head</q-item-section>
      </q-item>
    </q-list>
  </q-expansion-item>
                            <Navigation href="/preference">
                                <q-item class="q-ma-xm navigation-item text-white" :class="$page.component === 'PreferencePage' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        Preferences
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                            <Navigation href="">
                                <q-item class="q-ma-xm navigation-item text-white" :class="$page.component === '' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        Logout
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                        </q-list>
                    </div>
                </div>
            </div>
        </q-drawer>
        <q-page-container>
            <q-page class="q-pa-md">
                <slot />
            </q-page>
        </q-page-container>
    </q-layout>
</template>

<script>
import Navigation from './Navigation.vue';
import { ref } from 'vue';

export default {
    components: {
        Navigation,
    },
    setup() {
        const leftDrawerOpen = ref(false);

        return {
            leftDrawerOpen,
            toggleLeftDrawer() {
                leftDrawerOpen.value = !leftDrawerOpen.value;
            },
        };
    },
    data() {
        return {
            active: Boolean,
            showContent: false, // Initial state: settings content hidden
        };
    },
};
</script>

