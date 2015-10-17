<div class="window-overlay active">
<form class='modal-form delete-user-form' method="post" action="/delete-user/{{$id}}">
    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
    <div class="bg"></div>
    <div class="second-bg"></div>
    <div class="input-container">
          <input class="form-field" type="password" name="password" placeholder="Enter password of current account">
          <div class="error">{{ $errors->first('password') }}</div>
     </div>
     <input value="Submit" class="btn delete-record" type="submit">
</form>
</div>