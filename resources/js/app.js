
import { createApp, h } from 'vue'
import { createInertiaApp, Link, Head } from '@inertiajs/vue3'
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers'
import { Quasar } from 'quasar'

import Layout from "./Layouts/Layout.vue" // import layout

// Import icon libraries
import '@quasar/extras/roboto-font/roboto-font.css'
import '@quasar/extras/material-icons/material-icons.css'

// Import Quasar css
import 'quasar/src/css/index.sass'

createInertiaApp({
  // resolve: name => {
  //   const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
  //   return pages[`./Pages/${name}.vue`]
  // },
  resolve: (name) => {
    const page = resolvePageComponent(
      `./Pages/${name}.vue`,
      import.meta.glob("./Pages/**/*.vue")
    );

    page.then((module) => {
      module.default.layout = module.default.layout || Layout;
    });

    return page;

  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(Quasar,{
      plugins:{},

      })
      .component("Link", Link)
      .component("Head", Head)
      .mount(el)
  },

  title: title => `YDMS: ${title}`
})
