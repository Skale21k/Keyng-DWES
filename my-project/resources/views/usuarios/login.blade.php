@extends('layouts.plantilla')

@section('title', 'Login')

@section('content')

<h1>Login</h1>
<div class="login-container">
    <div class="login-register">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">

            <!-- Login form -->
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                @component('usuarios._components.login')
                @endcomponent
                @if ($error = $errors->first('password'))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @endif
            </div>

            <!-- Register form -->
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                @component('usuarios._components.register')
                @endcomponent
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/login.js') }}"></script>

@endsection