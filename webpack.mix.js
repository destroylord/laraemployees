const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/sb-admin-2.scss', 'public/css')
    .setPublicPath('public');
