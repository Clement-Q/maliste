<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Ma liste';
?>
<!DOCTYPE html>
<html>
<head>

    <?= $this->Html->meta('favicon.ico','webroot/favicon.ico',array('type' => 'icon')); ?>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?> -

    </title>


    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">


    <?= $this->Html->css(['normalize.min', 'milligram.min', 'summernote-lite.min', 'cake']) ?>
    <?= $this->Html->script(['jquery-3.4.1.slim.min', 'summernote-lite.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script>
    $(function(){
        $('textarea').summernote({
            toolbar : [
                ['style', ['style','bold', 'italic', 'underline', 'clear']],
                ['font', ['fontname', 'fontsize', 'color']]
            ]
        });
    })
    </script>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Ma</span>Liste</a>
        </div>
        <div class="top-nav-links">
            <?php if($this->request->getAttribute('identity') == null) : ?>

                <?= $this->Html->link('S\'inscrire', ['controller'=>'Users', 'action' => 'new'], ['class' => ($this->templatePath == 'Users' && $this->template == 'new') ? 'active' : '' ]) ?>

                <?= $this->Html->link('<svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>', ['controller'=>'Users', 'action' => 'login'], ['escape'=>false]) ?>



            <?php else : ?>


                <?= $this->Html->link('Les listes', ['controller'=>'Todolists', 'action' => 'index'], ['class' => ($this->templatePath == 'TodolistsTable' && $this->template == 'index') ? 'active' : '' ]) ?>



                <?= $this->Html->link('Ajouter une note', ['controller'=>'Todolists', 'action' => 'new'], ['class' => ($this->templatePath == 'TodolistsTable' && $this->template == 'new') ? 'active' : '' ]) ?>



                <?= $this->Html->link('<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg>', ['controller'=>'Users', 'action' => 'index'], ['escape'=>false]) ?>



                <span>

                <?= $this->Html->image('data/pictures/'.$this->request->getAttribute('identity')->avatar,
                    ['style'=>'max-width:40px;height:40px;obcject-fit:cover;border-radius:100%',
                        'url'=>['controller' => 'Users', 'action' => 'profil', $this->request->getAttribute('identity')->username]] ) ?>
                </span>



                <?= $this->Html->link('<svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>', ['controller'=>'Users', 'action' => 'logout'], ['escape'=>false]) ?>
            <?php endif; ?>









        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
