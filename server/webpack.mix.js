const mix = require('laravel-mix');

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

//mix.js('resources/js/app.js', 'public/js')
//  .sass('resources/sass/app.scss', 'public/css')
//  .sourceMaps(false)                                 // 4. SourceMap
//  .browserSync({                                     // 6. Browsersync
//    files: 'public/**/*',                            // (3.Uglify と 5.Watch は記述不要)
//    server: 'public',
//    proxy: false
//  });
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .browserSync({ // ここから
     proxy: {
         target: "http://localhost/"
     },
     https: true, // httpsのサイトをproxyするならtrueをセット
     files: [ // チェックするファイルは下記で十分ではないかな。
       './resources/**/*',
       './app/**/*',
       './config/**/*',
       './routes/**/*',
       './public/**/*'
     ],
     open: false, //BrowserSync起動時にブラウザを開かない
     reloadOnRestart: true //BrowserSync起動時にブラウザにリロード命令おくる
});
