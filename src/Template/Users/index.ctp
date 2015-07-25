<div class="container">
  <div class="col-md-4"></div>
  <div class="col-md-6">
    <?= $this->Form->create($user, ['class'=>'form-signin mg-btm']) ?> 
    <h2 class="heading-desc" align="center">Entre já!</h2>
    <div class="main">  
      <input type="text" class="form-control" name='username' placeholder="Usuário" autofocus="true" required="true" id="username">
      <input type="password" class="form-control" name='password' placeholder="Senha" autofocus="true"required="true" id="password">
      Você ainda não é cadastrado? <a href="../users/add"> Cadastre-se</a>
      <span class="clearfix"></span>  
    </div>
    <div class="login-footer">
      <div class="row">
        <div class="col-xs-6 col-md-6">
          <div class="left-section">
            <a href="">Esqueceu sua senha?</a>
          </div>
        </div>
        <div class="col-xs-6 col-md-6 pull-right">
          <button type="submit" class="btn btn-large btn-primary pull-right">Entrar</button>
        </div>
      </div>
    </div>
  </div>
  <?php echo $this->Form->end(); ?>
  <div class="col-md-4"></div>
</div>
