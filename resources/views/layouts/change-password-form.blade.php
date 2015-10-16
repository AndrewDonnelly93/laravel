<div class="window-overlay active">
<form class='modal-form change-password-form' method="post" action="/change-password/{{$id}}">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    <div class="bg"></div>
    <div class="second-bg"></div>
     <div class="input-container">
              <input class="form-field" type="password" name="password" placeholder="Enter current password of edited account">
              <div class="error">{{ $errors->first('password') }}</div>
         </div>
    <div class="input-container">
          <input class="form-field" type="password" name="new_password" placeholder="Enter new password">
          <div class="error">{{ $errors->first('new_password') }}</div>
     </div>
     <div class="input-container">
           <input class="form-field" type="password" name="new_password_confirmation" placeholder="Enter new password again">
           <div class="error"></div>
     </div>
    <input value="Submit" class="btn" type="submit">
</form>
</div>