import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import { quasar, transformAssetUrls } from '@quasar/vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: { transformAssetUrls }
        }),

          // @quasar/plugin-vite options list:
          // https://github.com/quasarframework/quasar/blob/dev/vite-plugin/index.d.ts
        quasar({
            sassVariables: 'resources/css/quasar-variables.sass'
        })
    ],
});
