@extends('layouts.content')

@section('title', 'Change password')
@stop
<?php
// get string after last slash
$id = substr(strrchr($_SERVER['REQUEST_URI'], "/"), 1);
?>
@section('popup')
@extends('layouts.change-password-form')
@stop