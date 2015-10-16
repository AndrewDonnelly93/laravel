@extends('layouts.content')

@section('title', 'Welcome, guest')
@stop

@section('page-title')
<h1>Welcome, guest</h1>
@stop

@section('auth-section')
<nav>
<ul class="main-auth-menu">
<li><a class="modal-btn" href="auth/login">Enter</a></li>
<li><a class="modal-btn" href="auth/register">Registration</a></li>
</ul>
</nav>
@stop

@section('content')

@stop
