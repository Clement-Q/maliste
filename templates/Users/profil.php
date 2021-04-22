<div class="center">

<h1>Modifier mon compte</h1>

<?= @$this->Html->image('data/pictures/'.$profil->avatar, ['style'=>'max-width:70%;obcject-fit:none;border-radius:12px']) ?>


    <h1>Coucou <?= h($profil->username) ?></h1>
    <p>Vous disposer de  liste</p>
    <?= count($profil->username)?>


<?= $this->Form->create($profil, ['enctype' => 'multipart/form-data']) ?>

<?= $this->Form->control('username', ['label' => 'Nom dutilisateur']) ?>
<?= $this->Form->control('newpassword', ['label' => 'Mot de passe', 'type' => 'password']) ?>
<?= $this->Form->control('picture', ['placeholder' => '', 'type' => 'file']) ?>

<?= $this->Form->button('Modifier mon compte') ?>
<?= $this->Form->end() ?>


<small>
    Crée le <?= h($profil->created) ?>
    <p><?= $this->Form->postLink('Supprimer mon compte', ['controller' => 'Users', 'action' => 'delete', $profil->id], ['confirm' => 'Etes-vous sûr de vouloir supprimer votre compte?']) ?></p>
</small>



</div>
