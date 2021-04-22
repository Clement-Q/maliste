<h1></h1>

<table>
    <tr>
       <h3><th>Prénom</th></h3>
        <h3> <th>Listes</th></h3>
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
            <th>
                <?= $this->Html->link($u->messages) ?>;
            </th>
        </tr>

    <?php endforeach; ?>
</table>


