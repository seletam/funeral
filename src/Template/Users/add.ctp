<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>-->
<div class="col-lg-12">
    <div class="panel panel-default">
	<div class="panel-heading">Add user</div>
	<div class="panel-body">
	    <?= $this->Form->create($user) ?>
	    <?php
	    echo $this->Form->input('username', ['class' => 'form-control']);
	    echo $this->Form->input('password', ['class' => 'form-control']);
	    echo $this->Form->input('email', ['class' => 'form-control']);
	    ?>
	    <?= $this->Form->button('Submit', ['class' => 'btn btn-primary pull-right']) ?>
	    <?= $this->Form->end() ?>
	</div>
    </div>
</div>