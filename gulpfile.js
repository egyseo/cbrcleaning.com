var elixir = require('laravel-elixir');

require('laravel-elixir-webpack');
elixir.config.sourcemaps = false;

elixir(function(mix) {
 	//Public Page
    mix.copy('resources/assets/js/*.*','public/js/')    
        .copy('resources/assets/css/*.*', 'public/css/')     
        .copy('resources/assets/img/','public/img/')   
        
        //iCheck
        .copy('./node_modules/icheck/skins/square/blue.png','public/css/')
        .copy('./node_modules/icheck/skins/square/blue@2x.png','public/css/')
        .copy('./node_modules/icheck/icheck.js','public/js/')
        .copy('./node_modules/icheck/icheck.min.js','public/js/')
        .copy('./node_modules/icheck/skins/square/blue.css','public/css/')  

        //Bootstrap
        .sass('bootstrap.scss','public/css/')
        .copy('./node_modules/bootstrap-sass/assets/fonts/bootstrap/*.*','public/fonts/')
        .copy('./node_modules/bootstrap-sass/assets/javascripts/bootstrap.js','public/js/')
        .copy('./node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js','public/js/')

        //FontAwesome
        .sass('./node_modules/font-awesome/scss/font-awesome.scss', 'public/css/')
        .copy('./node_modules/font-awesome/fonts/*.*','public/fonts/')  

        //AdminLTE
        .less('./node_modules/admin-lte/build/less/AdminLTE.less', 'public/css/AdminLTE.css')        
        .copy('./node_modules/admin-lte/plugins','public/plugins')
        .copy('./node_modules/admin-lte/dist/css/skins/*.*','public/css/skins/')
        .copy('./node_modules/admin-lte/dist/img/*.*','public/img/')
        .copy('./node_modules/admin-lte/dist/js/app.js','public/js/AdminLTE.js')
        .copy('./node_modules/admin-lte/dist/js/app.min.js','public/js/AdminLTE.min.js')
        //.less('adminlte-app.less','public/css/')

        //Toastr
        .copy('./node_modules/toastr/build/toastr.min.css','public/css/')
        .copy('./node_modules/toastr/build/toastr.css','public/css/')
        .copy('./node_modules/toastr/build/toastr.min.js','public/js/')

        //ionicons
        .sass('./node_modules/ionicons/dist/scss/ionicons.scss','public/css')
        .copy('./node_modules/ionicons/dist/fonts/*.*','public/fonts/')

        //JQuery
        .copy('./node_modules/jquery/dist/jquery.js','public/js/')
        .copy('./node_modules/jquery/dist/jquery.min.js','public/js/')

        //Icon Moon
        //.sass('./node_modules/iconmoon-build/scss/iconmoon.scss', 'public/css/')
        //.copy('./node_modules/iconmoon-build/fonts/*.*','public/fonts/')  

        
});