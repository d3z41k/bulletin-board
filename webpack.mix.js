let mix = require('laravel-mix');
let webpack = require('webpack');

mix
    .setPublicPath('public/build')
    .setResourceRoot('/build/')
    .js('resources/assets/js/app.js', 'js')
    .sass('resources/assets/sass/app.scss', 'css')
    .version();

mix.webpackConfig({
    plugins: [
        new webpack.IgnorePlugin(/^codemirror$/)
    ]
});