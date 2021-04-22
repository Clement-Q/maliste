<h1>Mes listes</h1>

<table>
    <tr>
        <th>Titre</th>
        <th>Image</th>
        <th>Appartiens à</th>
        <th>Date</th>
        <th>Visibilité</th>
        <th>Option</th>
    </tr>

    <?php foreach ($todolists as $todolist): ?>
    <tr>
        <th>
            <?= @$this->Html->image('data/pictures/'.$todolist->picture, ['style'=>'max-width:50px;height:50px;obcject-fit:cover;border-radius:12px']) ?>

            <?= $this->Html->link($todolist->title, ['action' => 'view', $todolist->id]); ?>
        </th>
        <th>
            <?= ($todolist->user_id); ?>
        </th>
        <th>

            <?= @$this->Html->image('data/pictures/'.$todolist->user->avatar, ['style'=>'max-width:25px;height:25px;obcject-fit:cover;border-radius:100%']) ?>


            <?= ($todolist->user->username) ?>
        </th>
        <th>
            <?= ($todolist->created); ?>
        </th>
        <th>
            <?= ($todolist->created); ?>
        </th>
        <th>
            <p><?= $this->Form->postLink('Supprimer', ['controller' => 'Todolists', 'action' => 'delete', $todolist->id], ['confirm' => 'Etes-vous sûr de vouloir supprimer de la liste?']) ?></p>

        </th>
    </tr>
    <?php endforeach ?>
</table>





