

<div class="row">
    <div class="column texte_1">
        <p><img alt="" src="/webroot/img/message.svg" width="300"/></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua.</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.</p>

    </div>
    <div class="column">
        <div class="center">
            <h4>Créer un compte</h4>

            <?= $this->Form->create($n, ['enctype' => 'multipart/form-data']) ?>


            <?= $this->Form->control('avatar', ['label' => '', 'type' => 'file']) ?>






            <?= $this->Form->control('username', ['label' => '', 'placeholder' => 'Prénom']) ?>
            <?= $this->Form->control('password', ['label' => '', 'type' => 'password', 'placeholder' => 'Mot de passe']) ?>

            <?= $this->Form->button('Créer') ?>

            <?= $this->Form->end() ?>


        </div>
    </div>
</div>


