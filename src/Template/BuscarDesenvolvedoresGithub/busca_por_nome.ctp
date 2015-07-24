<h3>Resultados da busca:</h3>

	<?php foreach ($usuarios as $usuario): ?>
		<?php foreach ($usuario as $user): ?>

			<b>Local: </b> <?php echo $user['location']; ?>
			<br/>
			<b><?php echo $user['followers']; ?> seguidores</b>
			<br/>
			<b><?php echo $user['public_repo_count']; ?> repoitórios</b> (públicos)

		<?php endforeach; ?>
	<?php endforeach; ?>