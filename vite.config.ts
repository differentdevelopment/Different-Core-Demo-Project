/*import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";
import laravel from "vite-plugin-laravel";

export default defineConfig({
	plugins: [
		react(),
		laravel()
	],
});
*/
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/backpack-overrides.scss',
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});