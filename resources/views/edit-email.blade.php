@extends('layouts.content')

@section('title', 'Edit email')
@stop
<?php
// get string after last slash
$id = substr(strrchr($_SERVER['REQUEST_URI'], "/"), 1);
?>
@section('popup')
@extends('layouts.edit-email-form')
@stop