const path = require('path');
const { defineConfig } = require('vite');
const laravel = require('laravel-vite-plugin');

module.exports = defineConfig({
    plugins: [
        laravel.default({
            input: ['resources/css/app.css','resources/js/app.js'],
            refresh:true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
    server: {
        proxy: {
            '/api': {
                target: 'http://localhost:8000',
                changeOrigin: true,
            },
        },
    },
    build: {
        manifest: true,
        outDir: path.resolve(__dirname, 'public/build'),
        rollupOptions: {
            input: 'resources/js/app.js',
        },
    },
});
