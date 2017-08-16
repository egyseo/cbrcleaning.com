<head>
    <meta charset="UTF-8">
    <title> @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/font-awesome.css') !!}
    {!! Html::style('css/ionicons.css') !!}
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    {!! Html::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
    {!! Html::style('css/AdminLTE.css') !!}  
    {!! Html::style('css/skins/_all-skins.min.css') !!} 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        li.disabled a {
          cursor: default;
          opacity: 0.6;
        }
        li.disabled{
          position: relative;
        }
        li.disabled:before{
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          z-index: 1;
          content: "";
          opacity: 0;
        }
    </style>
    <script>
         //See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
         // window.trans = @php
         //     // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
         //     $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
         //     $trans = [];
         //     foreach ($lang_files as $f) {
         //         $filename = pathinfo($f)['filename'];
         //         $trans[$filename] = trans($filename);
         //     }
         //     $trans['adminlte_lang_message'] = trans('adminlte_lang::message');
         //     echo json_encode($trans);
         // @endphp
    </script>
</head>