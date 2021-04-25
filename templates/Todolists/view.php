<h1><?= h($todolist->title) ?></h1>

<p>
    <?= @$this->Html->image('data/pictures/'.$todolist->picture, ['style'=>'max-width:70%;obcject-fit:none;border-radius:12px']) ?>

</p>

<p>
    <small>
        <?= ($todolist->created); ?>
    </small>
</p>


<p>
    <?= $this->Html->link('Edit', ['action' => 'edit', $todolist->title]); ?>
</p>


<?= ($todolist->content); ?>

<?php
echo $this->Form->create($todolist);
echo $this->Form->control('content', ['label' => 'Ajouter une note à votre liste']);
echo $this->Form->button('Commenter');
echo $this->Form->end();
?>





