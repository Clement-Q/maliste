<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['special']) ?>

</head>
<body>
	<header>
		<h1>
			<a href="<?= $this->Url->build('/') ?>"><span>Upload</span>photo</a>
		</h1>
		<nav>
			<?= $this->Html->link('Accueil', ['controller'=>'TodolistsTable', 'action' => 'index']) ?>
			<?= $this->Html->link('Créer un compte', ['controller'=>'Users', 'action' => 'new'], ['class' =>'active' ]) ?>
		</nav>
	</header>


	<section>
		<h1>Layout spécial pour la création de compte</h1>
		<?= $this->Flash->render() ?>
		<?= $this->fetch('content') ?>
	</section>
</body>
</html>
