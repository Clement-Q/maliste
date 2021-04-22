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
