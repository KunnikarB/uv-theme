import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: {
        main: 'src/js/main.js',
      },
      output: {
        entryFileNames: '[name].js',
      },
    },
  },
});