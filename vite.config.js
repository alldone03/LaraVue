import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

import path from 'path'




export default defineConfig({
  server: {
    hmr: {
      host: '192.168.1.3',
    },
  },
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
    vue(
      {
        template: {
          base: null,
          includeAbsolute: false,
        },
      },
    ),
  ],

  resolve:{
    alias:{

      ziggy: path.resolve('vendor/tightenco/ziggy/dist/vue.es.js'),
    },
  },
})
