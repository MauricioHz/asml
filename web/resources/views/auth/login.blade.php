<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <title>Pipeline</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Project document management">
      <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
      <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
   </head>
   <body>
      <div class="main-container fullscreen">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-5 col-lg-6 col-md-7">
                  <div class="text-center">
                     <h1 class="h2">Iniciar sesión &#x1f44b;</h1>
                     <p class="lead">Inicia sesión en tu cuenta para continuar</p>
                     <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input class="form-control" type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus/>
                        </div>
                        @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="form-control" type="password" placeholder="Password" name="password" />
                            @if ($errors->has('password'))
                            <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif                                            
                            <div class="text-right">
                            <small><a href="#">¿Se te olvidó tu contraseña?</a>
                            </small>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
                                Iniciar sesión
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>