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
 */

use Cake\Routing\Router;

$cakeDescription = 'CRM';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <?= $this->Html->css('materialize.min.css') ?>
    <?= $this->Html->css('main.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="grey lighten-4">

<input type="hidden" value="<?php echo Router::url('/',true);?>" id="base_url">

<nav class="blue darken-2">
    <div class="container">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">INGENO</a>
            <a href="#" data-activates="side-nav" class="button-collapse show-on-large right">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down hn_navmenu" id="<?= $menuActive?>">
                <li class="hn_dashboard">
                    <?= $this->Html->link('Dashboard',
                    ['controller' => 'Dashboards', 'action' => 'index']); ?>
                </li>
                <li class="hn_user">
                    <?= $this->Html->link('Utilisateurs',
                    ['controller' => 'Users', 'action' => 'index']); ?>
                </li>
            </ul>
            <!-- Side nav -->
            <ul id="side-nav" class="side-nav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="img/ocean.jpg" alt="">
                        </div>
                        <a href="#">
                            <img src="img/person1.jpg" alt="" class="circle">
                        </a>
                        <a href="#">
                            <span class="name white-text">John Doe</span>
                        </a>
                        <a href="#">
                            <span class="email white-text">jdoe@gmail.com</span>
                        </a>
                    </div>
                </li>
                <li>
                    <?= $this->Html->link('Dashboard',
                    ['controller' => 'Dashboards', 'action' => 'index']); ?>
                </li>
                <li>
                    <?= $this->Html->link('Utilisateurs',
                    ['controller' => 'Users', 'action' => 'index']); ?>
                </li>
                <li>
                    <div class="divider"></div>
                </li>
                <li>
                    <a class="subheader">Account Controls</a>
                </li>
                <li>
                    <a href="#">Déconexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bread Cumb -->
<?= $this->fetch('breadcumb'); ?>

<!--flash-->
<div class="container">
    <?= $this->Flash->render() ?>
</div>

<!--content-->
<?= $this->fetch('content') ?>
<!--end content-->

<!-- Footer -->
<footer class="section blue darken-2 white-text center">
    <p>CRM Panel Copyright &copy; 2019</p>
</footer>

<!-- Preloader -->
<div class="loader preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
            <div class="circle"></div>
        </div>
        <div class="gap-patch">
            <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
            <div class="circle"></div>
        </div>
    </div>
</div>

<!--</div>--><!-- srcipts -->
<?= $this->Html->script('jquery.min.js') ?>
<?= $this->Html->script('materialize.min.js') ?>
<?= $this->Html->script('https://canvasjs.com/assets/script/canvasjs.min.js') ?>
<?= $this->Html->script('https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js') ?>
<?= $this->Html->script('chart.js') ?>
<?= $this->Html->script('custom.js') ?>
<?= $this->Html->script('animate.js') ?>

</body>
</html>
