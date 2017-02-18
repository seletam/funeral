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
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
	<?= $this->Html->css('/formwizard/styles/demo_style') ?>
	<?= $this->Html->css('/formwizard/styles/smart_wizard') ?>
	<?= $this->Html->css('semantic') ?>
	<?= $this->Html->css('card') ?>
	<?= $this->Html->css('card.min') ?>
	<?= $this->Html->css('style') ?>

	<?= $this->Html->script('jquery-1.12') ?>
	<?= $this->Html->script('bootstrap') ?>
	<?= $this->Html->script('angular.min') ?>
	<?= $this->Html->script('semantic') ?>
	<?= $this->Html->script('semantic.min') ?>
	<?= $this->Html->script('/select2/select2.min.js') ?>
	<?= $this->Html->script('/datatables/jquery.dataTables.min.js') ?>
	<?= $this->Html->script('/datatables/jquery.dataTables.js') ?>
	<?= $this->Html->script('/cloudflare/moment-with-locales.js') ?>
	<?= $this->Html->script('/daterangepicker/bootstrap-daterangepicker.custom.js') ?>
	<?= $this->Html->script('/datetimepicker/js/bootstrap-datetimepicker.min') ?>
	<?= $this->Html->script('/formwizard/js/jquery.smartWizard') ?>

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
    </head>
    <body>
        <div class="container-fluid">
	    <?php
	    if ($username) {
		$id = $_SESSION['Auth']['User']['id'];
		$displayName = $_SESSION['Auth']['User']['username'];
		?>
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
    			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <?= $displayName ?> <b class="caret"></b></a>
    			<ul class="dropdown-menu">
    			    <li><?= $this->Html->link('My profile', ['controller' => 'Users', 'action' => 'view', $id]); ?></li>
    			    <li><?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']); ?></li>
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

    	    <div class="col-md-3">
    		<div id="MainMenu">
    		    <div class="list-group panel">
			    <?= $this->Html->link('Admin', array('controller' => 'Pages', 'action' => 'home'), array('class' => 'list-group-item disabled list-group-item-success active')); ?>
    			<a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Accounts <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
    			<div class="collapse" id="demo3">
				<?= $this->Html->link('New account', array('controller' => 'holders', 'action' => 'create'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
				<?= $this->Html->link('All account', array('controller' => 'holders', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
				<?= $this->Html->link('Reports', array('controller' => 'holders', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
    			    <!--<a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">New account <i class="fa fa-caret-down"></i></a>
    			    <a href="#" class="list-group-item" data-parent="#SubMenu1">All account</a>
    			    <a href="#" class="list-group-item" data-parent="#SubMenu1">Other</a>-->
    			</div>
    			<a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Transactions  <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
    			<div class="collapse" id="demo4">
				<?= $this->Html->link('Transact', array('controller' => 'holders', 'action' => 'accounts'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
				<?= $this->Html->link('All transactions', array('controller' => 'payments', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
				<?= $this->Html->link('Monthly transactions', array('controller' => 'payments', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
				<?= $this->Html->link('Reports', array('controller' => 'payments', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
    			    <!--<a href="" class="list-group-item">Transact</a>
    			    <a href="" class="list-group-item">All transactions</a>
    			    <a href="" class="list-group-item">Other</a>-->
    			</div>
    			<a href="#demo5" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">User accounts  <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
    			<div class="collapse" id="demo5">
				<?= $this->Html->link('New user', array('controller' => 'users', 'action' => 'add'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
				<?= $this->Html->link('All user', array('controller' => 'users', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
				<!--<?= $this->Html->link('All employees', array('controller' => 'users', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>-->
				<?= $this->Html->link('Reports', array('controller' => 'payments', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
    			    <!--<a href="" class="list-group-item">Transact</a>
    			    <a href="" class="list-group-item">All transactions</a>
    			    <a href="" class="list-group-item">Other</a>-->
    			</div>
    			<a href="#demo6" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Maintain  <i class="glyphicon glyphicon-chevron-down pull-right"></i></a>
    			<div class="collapse" id="demo6">
				<?= $this->Html->link('New user', array('controller' => 'users', 'action' => 'add'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
				<?= $this->Html->link('All user', array('controller' => 'users', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
				<!--<?= $this->Html->link('All employees', array('controller' => 'users', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>-->
				<?= $this->Html->link('Reports', array('controller' => 'payments', 'action' => 'index'), array('class' => 'list-group-item disabled list-group-item-success')); ?>
    			    <!--<a href="" class="list-group-item">Transact</a>
    			    <a href="" class="list-group-item">All transactions</a>
    			    <a href="" class="list-group-item">Other</a>-->
    			</div>
    		    </div>
    		</div>
    	    </div>
	    <?php } ?>
	    <!--<?php //}                 ?>-->
	    <?= $this->Flash->render() ?>
	    <div class="col-md-9">
		<div class="row">
		    <div class="col-md-12">
			<div class="ui breadcrumb">
			    <a class="section"><?= $this->request->params['controller']; ?></a>
			    <div class="divider"> / </div>
			    <div class="active section"><?= $this->request->params['action']; ?></div>
			</div>
		    </div>
		    <?= $this->fetch('content') ?>
		</div>
	    </div>
        </div>
        <footer>
        </footer>
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
	</style>
    </body>
</html>