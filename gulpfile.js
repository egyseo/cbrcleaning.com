const elixir = require('laravel-elixir');

require('laravel-elixir-webpack');

elixir(function(mix) {
    mix.copy(['./resources/assets/js/*.*'],'public/js/')    
        .copy(['./resources/assets/css/*.*'], 'public/css/')       
        .sass('./node_modules/font-awesome/scss/font-awesome.scss', 'public/css/')
        .copy('./node_modules/font-awesome/fonts/*.*','public/fonts/')  
        .copy('./node_modules/bootstrap-sass/assets/fonts/bootstrap/*.*','public/fonts/')
        .copy('./resources/assets/img','public/img/')   
});
