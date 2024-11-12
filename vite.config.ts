import { defineConfig } from 'vite'

/** @type {import('vite').UserConfig} */
export default defineConfig({
    build: {
        rollupOptions: {
            input: './src/main.ts',
            output: {
                entryFileNames: `[name].js`,
                chunkFileNames: `[name].js`,
                assetFileNames: `[name].[ext]`
            }
        },
        lib: {
            entry: 'iife',
            name: 'theme'
        }
    }
})
