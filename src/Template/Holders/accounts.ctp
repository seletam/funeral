<!--<div class="col-lg-2">
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Holder'), ['action' => 'add']) ?></li>
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
</nav>-->

<!--</div>-->
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading"><?= __('Policy accounts') ?>
        </div>
	<div class="panel-body">
	    <table class="table table-bordered table-condensed account">
		<thead>
		    <tr>
			<th>ID</th>
			<th>Title</th>
			<th>First names</th>
			<th>Surname</th>
			<th>ID Number</th>
			<th>Actions</th>
		    </tr>
		</thead>
		<tbody>
		    <?php foreach ($holders as $holder): ?>
    		    <tr>
    			<td><?= $this->Number->format($holder->id) ?></td>
    			<td><?= h($holder->title) ?></td>
    			<td><?= h($holder->first_names) ?></td>
    			<td><?= h($holder->surname) ?></td>
    			<td><?= h($holder->idnumber) ?></td>
    			<td class="actions">
				<?= $this->Html->link(__('Pay'), ['controller' => 'Payments', 'action' => 'Add', $holder->id]) ?>
    			</td>
    		    </tr>
		    <?php endforeach; ?>
		</tbody>
	    </table>
	</div>
    </div>
</div>

<script>
    $('.account').DataTable({});
</script>
