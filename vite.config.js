import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: 'localhost',
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: [
                {
                    paths: [
                        "resources/views/**",
                        "resources/css/**",
                        "resources/js/**",
                        "app/View/Components/**",
                        "app/View/Livewire/**",
                    ],
                },
            ],
        }),
    ],
});