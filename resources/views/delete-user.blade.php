@extends('layouts.content')

@section('title', 'Delete user')
@stop
<?php
// get string after last slash
$id = substr(strrchr($_SERVER['REQUEST_URI'], "/"), 1);
?>
@section('popup')
@extends('layouts.delete-user-form')
@stop