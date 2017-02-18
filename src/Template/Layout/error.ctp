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
$cakeDescription = 'Welcome to HISWINWE';
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

        <?= $this->Html->css('bootstrap') ?>
        <?= $this->Html->css('bootstrap.min') ?>
        <?= $this->Html->css('/select2/select2.min.css') ?>
        <?= $this->Html->css('/datatables/jquery.dataTables.min.css') ?>
        <?= $this->Html->css('/datetimepicker/css/bootstrap-datetimepicker') ?>
        <?= $this->Html->css('/datetimepicker/css/bootstrap-datetimepicker.min') ?>
        <?= $this->Html->css('style') ?>

        <?= $this->Html->script('jquery-1.12') ?>
        <?= $this->Html->script('bootstrap') ?>
        <?= $this->Html->script('bootstrap.min') ?>
        <?= $this->Html->script('angular.min') ?>
        <?= $this->Html->script('/select2/select2.min.js') ?>
        <?= $this->Html->script('/datatables/jquery.dataTables.min.js') ?>
        <?= $this->Html->script('/datatables/jquery.dataTables.js') ?>
        <?= $this->Html->script('/cloudflare/moment-with-locales.js') ?>
        <?= $this->Html->script('/daterangepicker/bootstrap-daterangepicker.custom.js') ?>
        <?= $this->Html->script('/datetimepicker/js/bootstrap-datetimepicker.min') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <div class="container-fluid">
            <?php if ($username) { ?>
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Hiswinwe Admin</a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Seleta Mootwane <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><?= $this->Html->link('My profile', ['controller' => 'Employees', 'action' => 'myprofile', 'Seleta Mootwane']); ?></li>
                                <li><?= $this->Html->link('Logout', ['controller' => 'Employees', 'action' => 'logout']); ?></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']); ?></li>
                        <!--<ul class="nav navbar-right">
                            <li class="dropdown navbar-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seleta Mootwane<i class="glyphicon glyphicon-user"></i> <b class="caret"></b></a>
                                <ul class="dropdown">
        
                                </ul>
                            </li>
                        </ul>-->
                    </ul>
                </nav>
                <div class="col-md-2">
                    <div class="navbar-collapse navbar-ex1-collapse">
                        <ul class="navbar navbar-collapse side-nav">
                            <li>
                                <a href="index.html"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="charts.html"><i class="glyphicon glyphicon-glass"></i> Charts</a>
                            </li>
                            <li>
                                <a href="index-rtl.html"><i class="glyphicon glyphicon-download-alt"></i> RTL Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!--<?php //}  ?>-->
        <?= $this->Flash->render() ?>
        <div class="container-fluid">
            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </body>
</html>
<style>
    body {
        font-family: 'Open Sans', sans-serif;
        font-size: 12px;
        padding-top: 70px;
    }
    .row {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
    .wrapper {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
</style>

<!--<script>
    var myApp = angular.module('myApp', []);
    myApp.filter('range', function () {
        total = 100;

        for (var i = 0; i < total; i++) {
            console.log(i);
        }

        

    });

</script>-->