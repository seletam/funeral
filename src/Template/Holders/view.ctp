<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Holder'), ['action' => 'edit', $holder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Holder'), ['action' => 'delete', $holder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $holder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Holders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Holder'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Additional'), ['controller' => 'Additional', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Additional'), ['controller' => 'Additional', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dependant'), ['controller' => 'Dependant', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dependant'), ['controller' => 'Dependant', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?> </li>
    </ul>
</nav>-->
<div class="col-md-12">
    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($holder->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Names') ?></th>
            <td><?= h($holder->first_names) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($holder->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Package') ?></th>
            <td><?= h($holder->package) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($holder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idnumber') ?></th>
            <td><?= $this->Number->format($holder->idnumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Premium') ?></th>
            <td><?= $this->Number->format($holder->premium) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($holder->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($holder->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($holder->modified_date) ?></td>
        </tr>
    </table>
    <div class="table-responsive">
        <h4><?= __('Phones') ?></h4>
	<?php if (!empty($holder->phones)): ?>
    	<table class="table table-bordered">
    	    <tr>
    		<th scope="col"><?= __('Id') ?></th>
    		<th scope="col"><?= __('Home') ?></th>
    		<th scope="col"><?= __('Work') ?></th>
    		<th scope="col"><?= __('Cell') ?></th>
    		<th scope="col"><?= __('Holder Id') ?></th>
    		<th scope="col" class="actions"><?= __('Actions') ?></th>
    	    </tr>
		<?php foreach ($holder->phones as $phones): ?>
		    <tr>
			<td><?= h($phones->id) ?></td>
			<td><?= h($phones->home) ?></td>
			<td><?= h($phones->work) ?></td>
			<td><?= h($phones->cell) ?></td>
			<td><?= h($phones->holder_id) ?></td>
			<td class="actions">
			    <?= $this->Html->link(__('View'), ['controller' => 'Phones', 'action' => 'view', $phones->id]) ?>
			    <?= $this->Html->link(__('Edit'), ['controller' => 'Phones', 'action' => 'edit', $phones->id]) ?>
			    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Phones', 'action' => 'delete', $phones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phones->id)]) ?>
			</td>
		    </tr>
		<?php endforeach; ?>
    	</table>
	<?php endif; ?>
    </div>
    <div class="table-responsive">
        <h4><?= __('Related Address') ?></h4>
	<?php if (!empty($holder->address)): ?>
    	<table class="table table-bordered">
    	    <tr>
    		<th scope="col"><?= __('Id') ?></th>
    		<th scope="col"><?= __('Holder Id') ?></th>
    		<th scope="col"><?= __('Line 1') ?></th>
    		<th scope="col"><?= __('Line 2') ?></th>
    		<th scope="col"><?= __('Line 3') ?></th>
    		<th scope="col"><?= __('City') ?></th>
    		<th scope="col"><?= __('Code') ?></th>
    		<th scope="col" class="actions"><?= __('Actions') ?></th>
    	    </tr>
		<?php foreach ($holder->address as $address): ?>
		    <tr>
			<td><?= h($address->id) ?></td>
			<td><?= h($address->holder_id) ?></td>
			<td><?= h($address->line_1) ?></td>
			<td><?= h($address->line_2) ?></td>
			<td><?= h($address->line_3) ?></td>
			<td><?= h($address->city) ?></td>
			<td><?= h($address->code) ?></td>
			<td class="actions">
			    <?= $this->Html->link(__('View'), ['controller' => 'Address', 'action' => 'view', $address->id]) ?>
			    <?= $this->Html->link(__('Edit'), ['controller' => 'Address', 'action' => 'edit', $address->id]) ?>
			    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Address', 'action' => 'delete', $address->id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->id)]) ?>
			</td>
		    </tr>
		<?php endforeach; ?>
    	</table>
	<?php endif; ?>
    </div>
    <div class="table-responsive">
        <h4><?= __('Payments') ?></h4>
	<?php if (!empty($holder->payments)): ?>
    	<table class="table table-bordered">
    	    <tr>
    		<th scope="col"><?= __('Id') ?></th>
    		<th scope="col"><?= __('Type') ?></th>
    		<th scope="col"><?= __('Amount') ?></th>
    		<th scope="col"><?= __('Creation Date') ?></th>
    		<th scope="col"><?= __('Holder Id') ?></th>
    		<th scope="col" class="actions"><?= __('Actions') ?></th>
    	    </tr>
		<?php foreach ($holder->payments as $payments): ?>
		    <tr>
			<td><?= h($payments->id) ?></td>
			<td><?= h($payments->type) ?></td>
			<td><?= h($payments->amount) ?></td>
			<td><?= h($payments->creation_date) ?></td>
			<td><?= h($payments->holder_id) ?></td>
			<td class="actions">
			    <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
			    <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
			    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
			</td>
		    </tr>
		<?php endforeach; ?>
    	</table>
	<?php endif; ?>
    </div>
    <div class="table-responsive">
        <h4><?= __('Dependant') ?></h4>
	<?php if (!empty($holder->dependant)): ?>
    	<table class="table table-bordered">
    	    <tr>
    		<th scope="col"><?= __('Id') ?></th>
    		<th scope="col"><?= __('Names') ?></th>
    		<th scope="col"><?= __('Surname') ?></th>
    		<th scope="col"><?= __('Idnumber') ?></th>
    		<th scope="col"><?= __('Local') ?></th>
    		<th scope="col"><?= __('Holder Id') ?></th>
    		<th scope="col" class="actions"><?= __('Actions') ?></th>
    	    </tr>
		<?php foreach ($holder->dependant as $dependant): ?>
		    <tr>
			<td><?= h($dependant->id) ?></td>
			<td><?= h($dependant->names) ?></td>
			<td><?= h($dependant->surname) ?></td>
			<td><?= h($dependant->idnumber) ?></td>
			<td><?= h($dependant->local) ?></td>
			<td><?= h($dependant->holder_id) ?></td>
			<td class="actions">
			    <?= $this->Html->link(__('View'), ['controller' => 'Dependant', 'action' => 'view', $dependant->id]) ?>
			    <?= $this->Html->link(__('Edit'), ['controller' => 'Dependant', 'action' => 'edit', $dependant->id]) ?>
			    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dependant', 'action' => 'delete', $dependant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependant->id)]) ?>
			</td>
		    </tr>
		<?php endforeach; ?>
    	</table>
	<?php endif; ?>
    </div>
    <div class="table-responsive">
        <h4><?= __('Additional') ?></h4>
	<?php if (!empty($holder->additional)): ?>
    	<table class="table table-bordered">
    	    <tr>
    		<th scope="col"><?= __('Id') ?></th>
    		<th scope="col"><?= __('Names') ?></th>
    		<th scope="col"><?= __('Surname') ?></th>
    		<th scope="col"><?= __('Idnumber') ?></th>
    		<th scope="col"><?= __('Gender') ?></th>
    		<th scope="col"><?= __('Premium') ?></th>
    		<th scope="col"><?= __('Creation Date') ?></th>
    		<th scope="col"><?= __('Modified Date') ?></th>
    		<th scope="col"><?= __('Holder Id') ?></th>
    		<th scope="col" class="actions"><?= __('Actions') ?></th>
    	    </tr>
		<?php foreach ($holder->additional as $additional): ?>
		    <tr>
			<td><?= h($additional->id) ?></td>
			<td><?= h($additional->names) ?></td>
			<td><?= h($additional->surname) ?></td>
			<td><?= h($additional->idnumber) ?></td>
			<td><?= h($additional->gender) ?></td>
			<td><?= h($additional->premium) ?></td>
			<td><?= h($additional->creation_date) ?></td>
			<td><?= h($additional->modified_date) ?></td>
			<td><?= h($additional->holder_id) ?></td>
			<td class="actions">
			    <?= $this->Html->link(__('View'), ['controller' => 'Additional', 'action' => 'view', $additional->id]) ?>
			    <?= $this->Html->link(__('Edit'), ['controller' => 'Additional', 'action' => 'edit', $additional->id]) ?>
			    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Additional', 'action' => 'delete', $additional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $additional->id)]) ?>
			</td>
		    </tr>
		<?php endforeach; ?>
    	</table>
	<?php endif; ?>
    </div>
</div>
