import { defineConfig } from "vite";
import { resolve, join } from 'path';

export default defineConfig(({ command }) =>
  command === "build"
    ? {
      publicDir: join("src", "assets"),
      build: {
        outDir: "assets",
        rollupOptions: {
          input: {
            app: resolve(__dirname, "src", "app.ts"),
          },
          output: {
            entryFileNames: "[name].js",
            chunkFileNames: "[name].js",
            assetFileNames: "[name].[ext]",
          },
        },
      },
    }
    : {}
);
