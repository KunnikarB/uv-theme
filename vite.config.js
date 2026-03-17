import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: 'dist',
    lib: {
      entry: 'src/js/main.js',
      name: 'UVTheme',
      formats: ['iife'], 
      fileName: () => 'main.js'
    }
  }
});