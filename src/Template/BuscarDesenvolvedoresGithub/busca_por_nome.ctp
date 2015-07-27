<div class="container">

	<h2 align="center"><i class="fa fa-github"></i> Você encontrou <?php echo $quantidadeUsuarios; ?> desenvolvedor(res)!</h2>

   	<div class="row">
		<?php foreach ($usuarios as $user): ?>
			<?php foreach ($user as $usuario): ?>
        <?php $usuarioDetalhes = $this->DesenvolvedoresGitHub->exibeDetalhesPerfil($usuario['login']); ?> 

            <div class="col-lg-4">
              <div class="panel panel-primary">
                <div class="panel-heading" style="font-size: 15px">
                  <?php echo $usuario['fullname']; ?>
                </div>
                <div class="panel-body">
                  <p>
                    <?= $this->Icone->transformaLiguagemEmIcone($usuario['language']); ?> 
                    <br/>
                  	<b>Local: </b> <?php echo $usuario['location']; ?><br/>
                    <hr/>
                    <b>Empresa: </b> <?php echo $usuarioDetalhes['company']; ?><br/>
                    <b>Contato: </b> <?php echo $usuarioDetalhes['email']; ?>
                  </p>
                  <p align="right">
                    <a class="btn btn-default" href='<?php echo $usuarioDetalhes['html_url']; ?>' target="_blank" role="button">Perfil &raquo;</a>
                  </p>
                </div><!--/.panel-body-->
              </div><!--/.panel-default-->
            </div><!--/.col-lg-4-->

   		<?php endforeach; ?>
	<?php endforeach; ?>
	</div>

</div><!--/.container-->