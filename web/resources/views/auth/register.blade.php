@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name_user') ? ' has-error' : '' }}">
                            <label for="name_user" class="col-md-4 control-label">Name2</label>

                            <div class="col-md-6">
                                <input id="name_user" type="text" class="form-control" name="name_user" value="{{ old('name_user') }}" required autofocus>

                                @if ($errors->has('name_user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_user') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        
                        <div class="form-group{{ $errors->has('paterno') ? ' has-error' : '' }}">
                            <label for="paterno" class="col-md-4 control-label">paterno</label>

                            <div class="col-md-6">
                                <input id="paterno" type="text" class="form-control" name="paterno" value="{{ old('paterno') }}" required autofocus>

                                @if ($errors->has('paterno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('paterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        
                        <div class="form-group{{ $errors->has('materno') ? ' has-error' : '' }}">
                            <label for="materno" class="col-md-4 control-label">materno</label>

                            <div class="col-md-6">
                                <input id="materno" type="text" class="form-control" name="materno" value="{{ old('materno') }}" required autofocus>

                                @if ($errors->has('materno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('materno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                         

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                       

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
                            <label for="company_id" class="col-md-4 control-label">company_id</label>

                            <div class="col-md-6">
                                <input id="company_id" type="text" class="form-control" name="company_id" value="{{ old('company_id') }}" required autofocus>

                                @if ($errors->has('company_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                         

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
