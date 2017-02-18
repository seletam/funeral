<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Phone'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="phones index large-9 medium-8 columns content">
    <h3><?= __('Phones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>id') ?></th>
                <th>home') ?></th>
                <th>work') ?></th>
                <th>cell') ?></th>
                <th>holder_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($phones as $phone): ?>
            <tr>
                <td><?= $this->Number->format($phone->id) ?></td>
                <td><?= h($phone->home) ?></td>
                <td><?= h($phone->work) ?></td>
                <td><?= h($phone->cell) ?></td>
                <td><?= $phone->has('holder') ? $this->Html->link($phone->holder->title, ['controller' => 'Holders', 'action' => 'view', $phone->holder->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $phone->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $phone->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $phone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phone->id)]) ?>
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
