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
    <div class="login-footer" align="center">
      <div class="row">
        <button type="submit" class="btn-cadastro btn-success">Criar usuário</button>
      </div>
    </div>
  </div>
</div>
<?php echo $this->Form->end(); ?>
<div class="col-md-4"></div>
</div>
