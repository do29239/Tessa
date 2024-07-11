import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/bootstrap.bundle.min.js',
                'resources/js/sticky-sidebar.min.js',
                'resources/js/main.js',
                'resources/css/bootstrap.min.css',
                'resources/css/style.css',
                'resources/css/responsive.css',
                'resources/css/boxicons.min.css',
                'resources/css/flaticon.css',
                'resources/css/dark.css',
                'resources/css/bottom-navbar.css',
                'resources/css/carousel.css',
                'resources/css/table.css',
            ],
            refresh: true,
        }),
    ],
});
