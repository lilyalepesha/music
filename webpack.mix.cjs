let mix = require('laravel-mix');

mix
    .setPublicPath('public')
    .js('resources/js/app.js','dist/js/app/app.js')
    .sass('resources/scss/app.scss','dist/css/app/app.css');
