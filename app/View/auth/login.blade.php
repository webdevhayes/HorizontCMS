@extends('layout')
    <div class='jumbotron'>
        <div class='container'>
       
        <img src='{{$admin_logo}}' width='100' class='pull-left' alt="">

            <h1>{{$app_name}}</h1>
            <p style='margin-left:15%;'><q><i>Closer to the web </i></q></p>
        </div>
    </div>

    <div class='container'>

    <form action="{{ url('/admin/login') }}" role='form' method='POST' >
        
        {{ csrf_field() }}

            <div class='col-xs-12 col-md-3 pull-left'>  
              <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                <label for='text'>{{trans('login.username')}}:</label>
                <input type='text' class='form-control' id='username' name='username' placeholder="{{trans('login.enter_username')}}" autofocus required>
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif

              </div>
            


              <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                <label for='pwd'>{{trans('login.password')}}:</label>
                <input type='password' class='form-control' id='pwd' name='password' placeholder="{{trans('login.enter_password')}}" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                             <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
              </div>
             
              <div class='checkbox col-md-12'>
                <label><input type='checkbox'> {{trans('login.remember_me')}}</label>
              </div>
              <!--<div class='col-md-6'>
                  <a class="btn btn-link btn-sm" href="admin/password/reset">
                    {{trans('login.forgot_password')}}
                  </a>
              </div><br>-->
              <input type='submit' name='submit_login' class='btn btn-default' value='{{trans("login.login")}}'>

            </div>
    </form>


    </div>

    </br>