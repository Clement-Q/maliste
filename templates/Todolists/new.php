



<h1>Ajouter une note</h1>
<?= $this->Form->create($todo, ['enctype' => 'multipart/form-data']) ?>

<?= $this->Form->control('title', ['label' => 'Votre titre']) ?>

<?= $this->Form->control('picture', ['placeholder' => '', 'type' => 'file']) ?>


<?=  $this->Form->select('visibility', ['checkbox' => ['Privé', 'Public']]) ;?>



	<?= $this->Form->button('Ajouter') ?>

<?= $this->Form->end() ?>
