<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dependant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="col-lg-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>account holder</th>
                <th>names</th>
                <th>idnumber</th>
                <th>local</th>
                <th><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dependant as $dependant): ?>
            <tr>
                <td><?= $this->Number->format($dependant->id) ?></td>
                <td><?= $dependant->holder->first_names . '' . $dependant->holder->surname ?></td>
                <td><?= h($dependant->names) . ' ' . h($dependant->surname) ?></td>
                <td><?= h($dependant->idnumber) ?></td>
                <td><?= h($dependant->local) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dependant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dependant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dependant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependant->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
