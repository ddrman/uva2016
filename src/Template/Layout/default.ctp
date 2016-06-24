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

$cakeDescription = 'Formulario de Registro UVA 2016';
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

    <?= $this->Html->css(['bootstrap.min', 'bootstrap-theme.min','estilo','jquery-ui','jquery-ui.structure','jquery-ui.theme.min']); ?>
    <?= $this->Html->script(['bootstrap.min','npm','jquery-3.0.0.min','jquery-ui.min']); ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav nav-pills">
              <li role="presentation" class="active"><a href="http://uva.adeje.es">Home</a></li>
              <li role="presentation"><a href="http://uva2016.arenages.com">Matriculación</a></li>
              <!-- <li role="presentation"><a href="#">Messages</a></li> -->
            </ul>
        </div>
    </nav>

    <div class="logo">

       <?= $this->Html->image('Cabcera_arena_UVA16.jpg', ['alt' => 'UVA2016'])?>

    </div>
    
    <?= $this->Flash->render() ?>
    <div class="container clearfix cabecera">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        
    </footer>
</body>
</html>
