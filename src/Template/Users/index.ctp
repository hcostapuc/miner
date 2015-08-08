<div class="container">
  <div class="col-md-4"></div>
  <div class="col-md-6">
    <?= $this->Flash->render('Auth') ?>
    <?= $this->Form->create(null,['class'=>'form-signin mg-btm', 'url' => ['controller' => 'Users',
    'action' => 'login']]) ?>
    <h2 class="heading-desc" align="center">Entre já!</h2>
    <div class="main">
      <input type="text" class="form-control" name='username' placeholder="Usuário" autofocus="true" required="true" id="username">
      <input type="password" class="form-control" name='password' placeholder="Senha" autofocus="true"required="true" id="password">
      Você ainda não é cadastrado? <a href="../users/add"> Cadastre-se</a>
      <span class="clearfix"></span>
    </div>
    <div class="login-footer">
      <div class="row" align="center">
        <button type="submit" class="btn-cadastro">Entrar</button>
      </div>
      <div class="row">
        <div class=".col-md-12">
        <div class=".col-xs-6 .col-sm-3" align="center">
          <button type="submit" class="btn btn-github"><i class="fa fa-github"></i></button>
          <button type="submit" class="btn btn-google-plus"><i class="fa fa-google-plus"></i></button>
          <button type="submit" class="btn btn-twitter"><i class="fa fa-twitter"></i></button>
          <button type="submit" class="btn btn-facebook"><i class="fa fa-facebook-official"></i></button>

        </div>
      </div>
      </div>
    </div>
  </div>
  <?php echo $this->Form->end(); ?>
  <div class="col-md-4"></div>
</div>
