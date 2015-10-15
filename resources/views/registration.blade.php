@extends('layouts.content')

@section('title', 'Welcome, guest')
@stop

@section('popup')
<div class="window-overlay active">
<form class='modal-form registration-form' method="post" action="">
    <div class="input-container">
         <input class="form-field" type="text" name="name" placeholder="Enter your name">
         <div class="error"></div>
     </div>
    <div class="input-container">
         <input class="form-field" type="text" name="e-mail" placeholder="Enter your e-mail">
         <div class="error"></div>
    </div>
    <div class="input-container">
          <input class="form-field" type="password" name="password" placeholder="Enter your password">
          <div class="error"></div>
     </div>
     <div class="input-container">
           <input class="form-field" type="password" name="password_confirmation" placeholder="Enter your password again">
           <div class="error"></div>
     </div>
     <input value="Register" class="btn" type="submit">
</form>
</div>
@stop

