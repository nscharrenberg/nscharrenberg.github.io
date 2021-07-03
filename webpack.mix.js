const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .js('source/_assets/js/modernizr.custom.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
    ])
    .options({
        processCssUrls: false,
    })
    .version();
