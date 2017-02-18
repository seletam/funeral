<div class="col-sm-2">
    <ul class="nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Create policy'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Additional'), ['controller' => 'Additional', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dependant'), ['controller' => 'Dependant', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dependant'), ['controller' => 'Dependant', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payment Due'), ['controller' => 'PaymentDue', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment Due'), ['controller' => 'PaymentDue', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?></li>
    </ul>
</div>

<div class="col-sm-10">
<div class="table-responsive">
    <h4><?= __('Holders') ?></h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>first_names</th>
                <th>surname</th>
                <th>idnumber</th>
                <th>dob</th>
                <th>package</th>
                <th>premium</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($holders as $holder): ?>
            <tr>
                <td><?= $this->Number->format($holder->id) ?></td>
                <td><?= h($holder->title) ?></td>
                <td><?= h($holder->first_names) ?></td>
                <td><?= h($holder->surname) ?></td>
                <td><?= $holder->idnumber ?></td>
                <td><?= h($holder->dob) ?></td>
                <td><?= h($holder->package) ?></td>
                <td><?= $this->Number->format($holder->premium) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $holder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $holder->id]) ?><i class="glyphicon glyphicon-edit"></i></a>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $holder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $holder->id)]) ?><i class="glyphicon glyphicon-trash" style="color:red"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
