import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: [
//                 'resources/css/app.css',
//                 'resources/js/app.js',
//             ],
//             refresh: true,
//         }),
//     ],
// });

// vite.config.js
export default {
    build: {
      manifest: true,
      outDir: 'public/build', // Make sure this matches the expected output directory
    },
  };
