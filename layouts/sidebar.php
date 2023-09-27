<?php
  require_once("app\applicationContext.php");
?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Вход</h5>
    <form action="../handlers/login.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" >Введите Email</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
  <button type="submit" class="btn btn-primary">Войти</button>
</form>
  </div>
</div>
