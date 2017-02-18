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
     <?php 
      // if ($loggedIn) { ?>
        <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                            <a class="navbar-brand" href="#"></a>
                        </div>
                        <ul class="nav navbar-nav">
							 <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']); ?></li
                        </ul>

                    </div>
                </div>
            </nav>
		<!--<?php //} ?>-->
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