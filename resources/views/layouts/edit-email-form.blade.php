<div class="window-overlay active">
<form class='modal-form edit-email-form' method="post" action="/edit-email/{{$id}}">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    <div class="bg"></div>
    <div class="second-bg"></div>
    <div class="input-container">
             <input class="form-field" type="text" name="email" placeholder="Enter new e-mail" value="{!! old('email') !!}">
             <div class="error">{{ $errors->first('email') }}</div>
     </div>
    <div class="input-container">
          <input class="form-field" type="password" name="password" placeholder="Enter password of current account">
          <div class="error">{{ $errors->first('password') }}</div>
     </div>
     <input value="Submit" class="btn" type="submit">
</form>
</div>