let mix = require('laravel-mix')
require('mix-tailwindcss')


mix.js('src/js/app.js', './dist/')
    .sass('src/css/style.scss', './')
    .tailwind("./tailwind.config.js")