<div class="window-overlay active">
<form class='modal-form registration-form' method="post" action="/auth/register">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    <div class="bg"></div>
    <div class="second-bg"></div>
    <div class="input-container">
         <input class="form-field" type="text" name="name" placeholder="Enter your name" value="{!! old('name') !!}">
         <div class="error"></div>
     </div>
    <div class="input-container">
         <input class="form-field" type="text" name="email" placeholder="Enter your e-mail" value="{!! old('email') !!}">
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