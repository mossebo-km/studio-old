let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

/*mix.js('src/assets/js/app.js', 'dist/assets/js');
mix.sass('src/assets/sass/app.scss', 'dist/assets/css')
    .options({
        processCssUrls: false,
    });
mix.copyDirectory('src/assets/fonts', 'dist/assets/fonts');
mix.copyDirectory('src/assets/images', 'dist/assets/images');
mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});
mix.sourceMaps();
mix.setPublicPath('dist');
mix.copyDirectory('src/template', 'dist');*/


mix.js('src/assets/js/app.js', '../hs-project/mossebo.dev/wp-content/themes/mossebo/assets/js');
mix.sass('src/assets/sass/app.scss', '../hs-project/mossebo.dev/wp-content/themes/mossebo/assets/css')
    .options({
        processCssUrls: false,
    });
mix.copyDirectory('src/assets/fonts', '../hs-project/mossebo.dev/wp-content/themes/mossebo/assets/fonts');
mix.copyDirectory('src/assets/images', '../hs-project/mossebo.dev/wp-content/themes/mossebo/assets/images');
mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});
// mix.sourceMaps();
mix.setPublicPath('../hs-project/mossebo.dev/wp-content/themes/mossebo');
mix.copyDirectory('src/template', '../hs-project/mossebo.dev/wp-content/themes/mossebo');
mix.browserSync({
    proxy: {
        target: "https://mossebo.dev"
    }
});
