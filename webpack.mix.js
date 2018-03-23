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

// Office
publicDir = '../../devsrv/mossebo.test/public_html/wp-content/themes/mossebo';

// Home
//publicDir = '../../Laravel-Projets/mossebo.test/public_html/wp-content/themes/mossebo';

//MAC CONFIG
mix.js('src/assets/js/app.js', publicDir + '/assets/js');
mix.sass('src/assets/sass/app.scss', publicDir + '/assets/css')
    .options({
        processCssUrls: false
    });
mix.copyDirectory('src/assets/fonts', publicDir + '/assets/fonts');
mix.copyDirectory('src/assets/images', publicDir + '/assets/images');
mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});
if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map'
    })
        .sourceMaps()
}
mix.copyDirectory('src/template', publicDir);
mix.browserSync({
    proxy: {
        target: "https://mossebo.test"
    }
});

mix.setResourceRoot(path.normalize(publicDir));
mix.setPublicPath(path.normalize(publicDir));
