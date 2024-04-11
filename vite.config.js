import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Modificato il percorso del css usando sass
                'resources/scss/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    //Aggiunto un alias per la cartella /resources/
    resolve: {
        alias: {
            '~resources': '/resources/',
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    },
});
