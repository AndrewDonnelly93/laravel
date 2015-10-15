<div class="window-overlay active">
<form class='modal-form login-form' method="post" action="/auth/login">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    <div class="bg"></div>
    <div class="second-bg"></div>
    <div class="input-container">
             <input class="form-field" type="text" name="email" placeholder="Enter your e-mail" value="{!! old('email') !!}">
             <div class="error">{{ $errors->first('email') }}</div>
    </div>
    <div class="input-container">
          <input class="form-field" type="password" name="password" placeholder="Enter your password">
          <div class="error">{{ $errors->first('password') }}</div>
     </div>
     <input value="Sign in" class="btn" type="submit"><!--
     --><p>Or</p><!--
     --><a href="/auth/register" class="btn form-btn">Sign up</a>
</form>
</div>