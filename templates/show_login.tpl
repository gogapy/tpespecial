{include 'header.tpl'}

<form method="post" action="validate">
    <div class="form-floating mt-3 mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div>
        <button class="btn">Login</button>
      </div>
      {if $error} 
        <div class="alert alert-danger mt-3">
            {$error}
        </div>
      {/if}
</form>

{include 'footer.tpl'}
