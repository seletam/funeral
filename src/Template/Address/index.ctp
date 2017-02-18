<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="address index large-9 medium-8 columns content">
    <h3><?= __('Address') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>id') ?></th>
                <th>holder_id') ?></th>
                <th>line_1') ?></th>
                <th>line_2') ?></th>
                <th>line_3') ?></th>
                <th>city') ?></th>
                <th>code') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($address as $addres): ?>
            <tr>
                <td><?= $this->Number->format($addres->id) ?></td>
                <td><?= $addres->has('holder') ? $this->Html->link($addres->holder->title, ['controller' => 'Holders', 'action' => 'view', $addres->holder->id]) : '' ?></td>
                <td><?= h($addres->line_1) ?></td>
                <td><?= h($addres->line_2) ?></td>
                <td><?= h($addres->line_3) ?></td>
                <td><?= h($addres->city) ?></td>
                <td><?= h($addres->code) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $addres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id)]) ?>
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
