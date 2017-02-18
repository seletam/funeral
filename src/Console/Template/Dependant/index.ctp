<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dependant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dependant index large-9 medium-8 columns content">
    <h3><?= __('Dependant') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>id') ?></th>
                <th>names') ?></th>
                <th>surname') ?></th>
                <th>idnumber') ?></th>
                <th>local') ?></th>
                <th>holder_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dependant as $dependant): ?>
            <tr>
                <td><?= $this->Number->format($dependant->id) ?></td>
                <td><?= h($dependant->names) ?></td>
                <td><?= h($dependant->surname) ?></td>
                <td><?= h($dependant->idnumber) ?></td>
                <td><?= h($dependant->local) ?></td>
                <td><?= $dependant->has('holder') ? $this->Html->link($dependant->holder->title, ['controller' => 'Holders', 'action' => 'view', $dependant->holder->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dependant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dependant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dependant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependant->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
