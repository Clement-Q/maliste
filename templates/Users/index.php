<h1></h1>

<table>
    <tr>
       <h3><th>Prénom</th></h3>
        <h3> <th>nombre de listes</th></h3>
        <h3> <th>Message</th></h3>
    </tr>

    <?php foreach ($users as $u): ?>
        <tr>
            <th>
                <?= @$this->Html->image('data/pictures/'.$u->avatar, ['style'=>'max-width:40px;height:40px;obcject-fit:cover;border-radius:100%']) ?>

                <?= $u->username ?>
            </th>
            <th>



            </th>
            <th><?= $this->Html->link('<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg>', ['controller'=>'messages', 'action' => 'index'], ['escape'=>false]) ?>



            </th>
        </tr>

    <?php endforeach; ?>
</table>


