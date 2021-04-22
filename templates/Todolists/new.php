



<h1>Ajouter une note</h1>
<?= $this->Form->create($todo, ['enctype' => 'multipart/form-data']) ?>

<?= $this->Form->control('title', ['label' => 'Votre titre']) ?>

<?= $this->Form->control('picture', ['placeholder' => '', 'type' => 'file']) ?>


<?=  $this->Form->select('visibility', [1, 2], ['empty' => '(visibility)']);
?>


	<?= $this->Form->button('Ajouter') ?>

<?= $this->Form->end() ?>
