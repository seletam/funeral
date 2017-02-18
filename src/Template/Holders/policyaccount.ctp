<!--<div class="col-lg-2">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
	    <li class="heading"><?= __('Actions') ?></li>
	    <li><?= $this->Html->link(__('List Holders'), ['action' => 'index']) ?></li>
	    <li><?= $this->Html->link(__('List Additional'), ['controller' => 'Additional', 'action' => 'index']) ?></li>
	    <li><?= $this->Html->link(__('New Additional'), ['controller' => 'Additional', 'action' => 'add']) ?></li>
	    <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?></li>
	    <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?></li>
	    <li><?= $this->Html->link(__('List Dependant'), ['controller' => 'Dependant', 'action' => 'index']) ?></li>
	    <li><?= $this->Html->link(__('New Dependant'), ['controller' => 'Dependant', 'action' => 'add']) ?></li>
	    <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
	    <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
	    <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?></li>
	    <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?></li>
	</ul>
    </nav>
</div>-->
<div class="col-lg-12 col-lg-12 col-xs-12">
    <div id="wizard">
    <div class="panel panel-default">
	<div class="panel-heading">
	    <h3 class="panel-title"><?= __('Personal details') ?></h3></div>
	<div class="panel-body">
	    <?= $this->Form->create($holder) ?>
	    <div class="row">
		<div class="col-lg-4">
		    <?php
		    echo $this->Form->input('title', ['class' => "form-control input-sm"]);
		    ?>
		</div>
		<div class="col-lg-4">
		    <?php
		    echo $this->Form->input('first_names', ['class' => "form-control input-sm"]);
		    ?>   
		</div>
		<div class="col-lg-4">
		    <?php
		    echo $this->Form->input('surname', ['class' => "form-control input-sm"]);
		    ?>
		</div>
		<div class="col-lg-4">
		    <?php
		    echo $this->Form->input('idnumber', ['class' => "form-control input-sm"]);
		    //echo $this->Form->input('dob', ['empty' => true]);
		    ?>
		</div>
		<div class="col-lg-4">
		    <?php
		    echo $this->Form->input('package', ['class' => "form-control input-sm"]);
		    ?>
		</div>
		<div class="col-lg-4">
		    <?php
		    echo $this->Form->input('premium', ['class' => "form-control input-sm"]);

		    //echo $this->Form->input('creation_date');
		    //echo $this->Form->input('modified_date');
		    ?>
		</div>
	    </div>
	</div>
    </div>

    <div class="panel panel-default">
	<div class="panel-heading">
	    <h3 class="panel-title"><?= __('Contact details') ?></h3></div>
	<div class="panel-body">
	    <div class="col-lg-4">
		<?php
		echo $this->Form->input('home', ['class' => "form-control input-sm"]);
		?>
	    </div>
	    <div class="col-lg-4">
		<?php
		echo $this->Form->input('work', ['class' => "form-control input-sm"]);
		?>
	    </div>
	    <div class="col-lg-4">
		<?php
		echo $this->Form->input('cell', ['class' => "form-control input-sm"]);
		?>
	    </div>
	    <div class="col-lg-4">
		<?php
		// echo $this->Form->input('holder_id', ['options' => $holder, 'empty' => true, 'class' => "form-control input-sm"]);
		?>
	    </div>
	</div>
    </div>

    <div class="panel panel-default">
	<div class="panel-heading">
	    <h3 class="panel-title"><?= __('Address') ?></h3></div>
	<div class="panel-body">
	    <div class="row">
		<div class="col-lg-4">
		    <?php
		    // echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
		    echo $this->Form->input('line_1', ['class' => "form-control input-sm"]);
		    ?>
		</div>
		<div class="col-lg-4">
		    <?php
		    echo $this->Form->input('line_2', ['class' => "form-control input-sm"]);
		    ?>
		</div>
		<div class="col-lg-4">
		    <?php
		    echo $this->Form->input('line_3', ['class' => "form-control input-sm"]);
		    ?>
		</div>
		<div class="col-lg-4">
		    <?php
		    echo $this->Form->input('city', ['class' => "form-control input-sm"]);
		    ?>
		</div>
		<div class="col-lg-2">
		    <?php
		    echo $this->Form->input('code', ['class' => "form-control input-sm"]);
		    ?>
		    <br>
		</div>
		<div class="col-lg-12">
		    <?= $this->Form->button('Submit', ['class' => 'btn btn-default pull-left']) ?>
		    <?= $this->Form->end() ?>
		</div>
	    </div>
	</div>
    </div>
    </div>
    </div>


