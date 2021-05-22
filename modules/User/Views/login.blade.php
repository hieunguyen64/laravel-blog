@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top: 50px;">
            <div class="well">
                <form class="form" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <fieldset>
                        <legend class="text-center">{{trans("Article::tran.Login")}}</legend>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <label class="control-label" for="email">{{trans("Article::tran.Email")}}</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" placeholder="{{trans('Article::tran.Input Email')}}"
                                    required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <label class="control-label" for="password">{{trans("Article::tran.Password")}}</label>
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="{{trans('Article::tran.Input Password') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 offset-md-1">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">{{trans("Article::tran.Password")}}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn btn-success form-control">
                                    {{trans("Article::tran.Login")}}
                                </button>
                            </div>
                        </div>

                        @if(config('services.github.client_id'))
                        <div class="col-md-10 offset-md-1">
                            <div class="strike">
                                <span>or</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">
                                <a href="{{ url('/auth/github') }}" class="btn btn-primary form-control">
                                    <i class="fab fa-github"></i> {{trans("Article::tran.Login With Github")}}
                                </a>
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <div class="col-md-8 offset-md-2 text-center">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    {{trans("Article::tran.Forgot Password")}}
                                </a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection