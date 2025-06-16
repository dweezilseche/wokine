import { defineConfig } from "vite";
import path from "path";

export default defineConfig({
  root: "./",
  build: {
    outDir: "dist",
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: path.resolve(__dirname, "assets/js/main.js"),
    },
    assetsDir: "assets", // obligatoire pour éviter le dossier .vite
  },
  css: {
    preprocessorOptions: {
      scss: {
        additionalData: `@import "variables";`,
      },
    },
  },
});
