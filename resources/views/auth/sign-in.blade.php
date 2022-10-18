<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- GLOBAL STYLES -->
    <link href="{{asset('theme/login-assets/css/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link href="{{asset('theme/login-assets/icon/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- PAGE LEVEL PLUGIN STYLES -->

    <!-- THEME STYLES -->
    <link href="{{asset('theme/login-assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('theme/login-assets/css/plugins.css')}}" rel="stylesheet">

    <!-- THEME DEMO STYLES -->
    <link href="{{asset('theme/login-assets/css/demo.css')}}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 col-md-offset-4">
                
                <div class="login-banner text-center">
                    <h1>SI Surat</h1>
                </div>
                <div class="portlet portlet-green">
                    <div class="portlet-heading login-heading">
                        <div class="portlet-title">
                            <h4><strong><i class="fa fa-gears"></i> Login</strong>
                            </h4>
                        </div>

                        <div class="portlet-widgets">

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="portlet-body">
                        <form accept-charset="UTF-8" role="form" action="{{ URl('sign-in') }}" method="post">
                            <fieldset>
                             @csrf
                                <div class="form-group">
                                    <input placeholder="NIK" id="nik" type="text" class="form-control" name="nik" required autofocus>
                                </div>

                                <div class="form-group">
                                    <select name="id_jabatan" class="form-control" required="">
                                        <option>Jabatan</option>
                                        <?php  foreach ($jabatan as $value) : ?>
                                        <option value="<?php echo $value['id_jabatan']; ?>"><?php echo $value['nama_jabatan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input placeholder="Password" id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                </div>
                                
                                <!-- <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div> -->

                                <button type="submit" class="btn btn-green btn-block">
                                        {{ __('Login') }}
                                </button>
                               <!--  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- GLOBAL SCRIPTS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{asset('theme/login-assets/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('login-assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- HISRC Retina Images -->
    <script src="{{asset('login-assets/js/plugins/hisrc/hisrc.js')}}"></script>

    <!-- PAGE LEVEL PLUGIN SCRIPTS -->

    <!-- THEME SCRIPTS -->
    <script src="{{asset('theme/login-assets/js/flex.js')}}"></script>
</body>
</html>

