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
<div class="col-md-12">
    <table class="table table-bordered holders">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>first_names</th>
                <th>surname</th>
                <th>idnumber</th>
                <!--<th>dob</th>
                <th>package</th>
                <th>premium</th>-->
                <th>creation_date</th>
                <!--<th>modified_date</th>-->
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
                    <!--<td><?= h($holder->dob) ?></td>
                    <td><?= h($holder->package) ?></td>
                    <td><?= h($holder->premium) ?></td>-->
                    <td><?= date('d-m-Y', strtotime($holder->creation_date)) ?></td>
                    <!--<td><?= h($holder->modified_date) ?></td>-->
                    <td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $holder->id]) ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'modify', $holder->id]) ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $holder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $holder->id)]) ?>
                    </td>
                </tr>
	    <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $('.holders').dataTable();
</script>