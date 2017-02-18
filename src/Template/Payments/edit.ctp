<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?=
$this->Form->postLink(
	__('Delete'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]
)
?></li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bankcards'), ['controller' => 'Bankcards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bankcard'), ['controller' => 'Bankcards', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="col-lg-12">
    <div class="panel panel-default">
	<div class="panel-heading">Transaction</div>
	<div class="panel-body">
	    <?= $this->Form->create($payment) ?>
	    <?php
	   // $type = array('1' => 'Cash', '2' => 'Debit');
	   // $status = array('0' => 'Paid', '1' => 'Cancelled');

	    echo $this->Form->input('type', ['class' => 'form-control', 'options' => $type]);
	    echo $this->Form->input('refno', ['class' => 'form-control', 'disabled'=>'disabled']);
	    echo $this->Form->input('amount', ['class' => 'form-control']);
	    echo $this->Form->input('status', ['class' => 'form-control', 'options' => $status]);
	    echo $this->Form->input('creation_date', ['empty' => true, 'type' => 'hidden']);
	    //echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
	    ?>
	    <?= $this->Form->button(('Transact'), ['class'=>'btn btn-primary pull-right']) ?>
	    <?= $this->Form->end() ?>
	</div>
    </div>
</div>