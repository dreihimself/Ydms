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
        <q-drawer show-if-above v-model="leftDrawerOpen" side="left" class="bg-dark text-white drawer-wrapper">
            <div class="full-height drawer">
                <h3 class="text-h5 text-primary q-ml-lg text-bold">LYDO</h3>

                <div class="full-height wrapper text-white">
                    <div style="padding: 10px;">
                        <q-list padding>
                            <Navigation class="no-text-decoration" href="/home">
                                <q-item  class="q-ma-sm navigation-item text-white" :class="$page.component === 'HomePage' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        Dashboard
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                            <Navigation href="">
                                <q-item class="q-ma-sm navigation-item text-white" :class="$page.component === '' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        Profile
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                            <Navigation href="">
                                <q-item class="q-ma-sm navigation-item text-white" :class="$page.component === '' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        Program
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                            <Navigation href="">
                                <q-item class="q-ma-sm navigation-item text-white" :class="$page.component === '' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        SK Activities
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                            <Navigation class="m-ml-none" href="">
                                <q-item class="q-ma-sm navigation-item text-white" :class="$page.component === '' ? 'bg-grey-14' : null">
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
                                        </q-item>

                            </Navigation>
                            <Navigation href="">
                                <q-item class="q-ma-sm navigation-item text-white" :class="$page.component === '' ? 'bg-grey-14' : null">
                                    <q-item clickable v-ripple @click="showContent = !showContent" class="custom-font">
                                        <q-item-section>
                                            <q-item-label>Settings</q-item-label>
                                        </q-item-section>
                                        </q-item>
                                        <q-slide-transition>
                                        <div v-if="showContent" class="q-pa-md custom-font">
                                            <Navigation href="usersettings">
                                <q-item class="q-ma-sm navigation-item text-white" :class="$page.component === 'usersettings' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        User Settings
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                                            <p>Dropdown Settings</p>
                                            <p>SK Officials</p>
                                            <p>Barangay Registry</p>
                                            <p>Department Head</p>
                                        </div>
                                        </q-slide-transition>
                                </q-item>
                            </Navigation>
                            <Navigation href="/preference">
                                <q-item class="q-ma-sm navigation-item text-white" :class="$page.component === 'PreferencePage' ? 'bg-grey-14' : null">
                                    <q-item-section>
                                        Preferences
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                            <Navigation href="">
                                <q-item class="q-ma-sm navigation-item text-white" :class="$page.component === '' ? 'bg-grey-14' : null">
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

