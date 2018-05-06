@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-sm-4 col-sm-offset-4" ng-app>
        @if(Session::has('login_failed'))
        <div class="alert alert-danger" role="alert">
            <b>Login failed.</b> Please check your username and password.
        </div>
        @endif
        <form name="loginForm" action="[[ URL::to('/login') ]]" method="post">
            <fieldset>
                <legend>Please Login</legend>
                <div class="form-group"
                     ng-class="{'has-error': loginForm.username.$dirty && loginForm.username.$invalid}">
                    <label for="username" class="control-label">Username</label>
                    <input type="text" id="username" class="form-control" autofocus="autofocus"
                           required="required" ng-model="username" name="username">
                </div>
                <div class="form-group"
                     ng-class="{'has-error': loginForm.password.$dirty && loginForm.password.$invalid}">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" id="password" class="form-control"
                           required="required" ng-model="password" name="password">
                </div>
                <button type="submit" class="btn btn-default" ng-disabled="loginForm.$invalid">
                    Login
                </button>
            </fieldset>
        </form>
    </div>
</div>
@stop
