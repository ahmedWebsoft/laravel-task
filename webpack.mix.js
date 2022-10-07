let mix = require('laravel-mix');

mix.browserSync(process.env.APP_URL);

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.ts('resources/ts/app.ts', 'public/js').sass("public/assets/scss/custom/custom.scss", "public/css/custom.css", {
      sassOptions: {
            outputStyle: "compressed",
      },
    })
    .options({
        processCssUrls: false,
}).extract(['vue']).vue();
//    .sass('resources/assets/sass/app.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}