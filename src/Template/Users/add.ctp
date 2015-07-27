<div class="container">
  <div class="col-md-4"></div>
  <div class="col-md-6">
    <?= $this->Form->create($user, ['class'=>'form-signin mg-btm']) ?> 
    <h2 class="heading-desc" align="center">Cadastre-se!</h2>
    <div class="main">  
      <input type="text" class="form-control" name='name' placeholder="Nome" autofocus="true" required="true" id="name">
      <input type="text" class="form-control" name='email' placeholder="Email" autofocus="true" required="true" id="email">
      <input type="text" class="form-control" name='username' placeholder="Usuário" autofocus="true" required="true" id="username">
      <input type="password" class="form-control" name='password' placeholder="Senha" required="true" id="password">
      Já é um usuário Miner? <a href="../users/index"> Faça seu login</a>
      <span class="clearfix"></span>  
    </div>
    <div class="login-footer">
      <div class="row">
        <div class="col-xs-6 col-md-6">
          <div class="left-section">
            <a href=""> Copyright ®</a>
          </div>
        </div>
        <div class="col-xs-6 col-md-6 pull-right">
          <button type="submit" class="btn btn-large btn-primary pull-right">Criar usuário</button>
        </div>
      </div>
    </div>
  </div>
  <?php echo $this->Form->end(); ?>
  <div class="col-md-4"></div>
</div>