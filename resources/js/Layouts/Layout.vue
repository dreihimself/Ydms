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
                <div class="full-height wrapper">
                    <div style="padding: 10px;">
                        <q-list padding>
                            <Navigation href="/home">
                                <q-item class="q-ma-sm navigation-item" :class="$page.component === 'HomePage' ? 'bg-red' : null">
                                    <q-item-section>
                                        Home
                                    </q-item-section>
                                </q-item>
                            </Navigation>
                            <Navigation href="/preference">
                                <q-item class="q-ma-sm navigation-item" :class="$page.component === 'PreferencePage' ? 'bg-red' : null">
                                    <q-item-section>
                                        Preferences
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
export default {
    components: {
        Navigation
    },
    data () {
        return {
            active: Boolean
        }
    }
}
</script>
