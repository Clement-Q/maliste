<h1>Messagerie</h1>

<table>
    <tr>
        <th>Prénom</th>
        <th>Date</th>
    </tr>

    <?php foreach ($messages as $message): ?>
        <tr>
            <th>
                <td>
                <?= $this->Html->link($message->sender_id, ['action' => 'view', $message->$slug]) ?>

                </td>
            </th>
        </tr>
    <?php endforeach; ?>
</table>


<?php foreach ($user->users as $username): ?>
    <div class="comm">
        <p class="meta">
            <?= $comm->user->name ?>, le <?= $comm->created ?>
        </p>
        <p><?= $comm->content ?></p>
    </div>
<?php endforeach;
