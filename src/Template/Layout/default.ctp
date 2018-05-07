<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Gestion scolaire';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('jquery-ui')?>
    <?= $this->Html->css('jquery-ui.min')?>
    <?= $this->Html->script('jquery.min')?>
    <?= $this->Html->script('jquery-ui.min')?>
    <?= $this->Html->script('jquery') ?>
   


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= "Logman School" ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <?= $this->element('menus/'.strtolower($this->request->params['controller'])) ?>
            <ul class="right">
                <li>
                    <?= $this->Html->Link($connected_user->username, ['controller' => 'Users', 'action' => 'view', $connected_user->username]) ?>
                </li>
                <li><?= $this->Html->Link('Deconnexion', ['controller' => 'Users', 'action' => 'logout']) ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Menu') ?></li>
                <li><?= $this->Html->link(__('Année scolaire'), ['controller' => 'Anneescolaires', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Elèves'), ['controller' => 'Eleves', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Inscriptions'), ['controller' => 'Inscriptions', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Paiement'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Classes'), ['controller' => 'Classrooms', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Matières'), ['controller' => 'Matieres', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Professeurs'), ['controller' => 'Professeurs', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Noter Eleve'), ['controller' => 'Noters', 'action' => 'add']) ?></li>
                 <li><?= $this->Html->link(__('Salle de Classe'), ['controller' => 'Salles', 'action' => 'index']) ?></li>
                 <li><?= $this->Html->link(__('Paiement'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
            </ul>
        </nav>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>

</html>
