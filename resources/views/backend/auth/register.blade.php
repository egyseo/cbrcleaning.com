@extends('backend.layouts.auth')

@section('htmlheader_title')
    User Register
@endsection

@section('content')
    <body class="hold-transition register-page">
        <div id="app" v-cloak>
            <div class="register-box">
                <div class="register-logo">
                     <a href="{{ url('/administrator') }}"><b>Nissi</b> Technology <b>Enterprises Inc</a>
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> {{ trans('message.someproblems') }}<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="register-box-body">
                    <p class="login-box-msg">{{ trans('message.registermember') }}</p>
                    <form action="{{ url('/administrator/register') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">                       
                      
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <!-- First Name-->
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="{{ trans('message.first_name') }}" name="first_name" value="{{ old('first_name') }}" autofocus/>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>

                                <!-- Last Name-->
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="{{ trans('message.last_name') }}" name="last_name" value="{{ old('last_name') }}" autofocus/>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>

                                <!-- Phone -->
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="{{ trans('message.phone') }}" name="phone" value="{{ old('phone') }}" autofocus/>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>

                                <!-- Adress -->
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="{{ trans('message.address') }}" name="address" value="{{ old('address') }}" autofocus/>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>

                                <!-- City -->
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="{{ trans('message.city') }}" name="city" value="{{ old('city') }}" autofocus/>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div> 
                             </div>
                             <div class="col-md-6 col-sm-6 col-xs-12">
                                <!-- zip code -->
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="{{ trans('message.zipcode') }}" name="zipcode" value="{{ old('zipcode') }}" autofocus/>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>

                                <!-- Birthday -->
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="{{ trans('message.birthday') }}" name="birthday" value="{{ old('birthday') }}" autofocus/>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>             

                                <!-- Login -->
                                @if (config('auth.providers.users.field','email') === 'login')
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="{{ trans('message.login') }}" name="login" autofocus/>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                @endif

                                <!-- Email -->
                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" placeholder="{{ trans('message.email') }}" name="email" value="{{ old('email') }}"/>
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>

                                 <!-- Password -->
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="{{ trans('message.password') }}" name="password"/>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>

                                <!-- Password retype -->
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="{{ trans('message.retypepassword') }}" name="password_confirmation"/>
                                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                </div>
                            </div>
                        </div>           

                        <div class="row">
                            <div class="col-xs-1">
                                <label>
                                    <div class="checkbox_register icheck">
                                        <label>
                                            <input type="checkbox" name="terms">
                                        </label>
                                    </div>
                                </label>
                            </div><!-- /.col -->
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">{{ trans('message.terms') }}</button>
                                </div>
                            </div><!-- /.col -->
                            <div class="col-xs-4 col-xs-push-1">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('message.register') }}</button>
                            </div><!-- /.col -->
                        </div>
                    </form>                
                    <a href="{{ url('/administrator/login') }}" class="text-center">{{ trans('message.membreship') }}</a>
                </div><!-- /.form-box -->
            </div><!-- /.register-box -->
        </div>
        @include('backend.layouts.partials.scripts_auth')
        @include('backend.auth.terms')
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
@endsection