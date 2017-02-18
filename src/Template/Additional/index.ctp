<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Additional'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="additional index large-9 medium-8 columns content">
    <h3><?= __('Additional') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>id') ?></th>
                <th>names') ?></th>
                <th>surname') ?></th>
                <th>idnumber') ?></th>
                <th>gender') ?></th>
                <th>premium') ?></th>
                <th>creation_date') ?></th>
                <th>modified_date') ?></th>
                <th>holder_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($additional as $additional): ?>
            <tr>
                <td><?= $this->Number->format($additional->id) ?></td>
                <td><?= h($additional->names) ?></td>
                <td><?= h($additional->surname) ?></td>
                <td><?= h($additional->idnumber) ?></td>
                <td><?= $this->Number->format($additional->gender) ?></td>
                <td><?= $this->Number->format($additional->premium) ?></td>
                <td><?= h($additional->creation_date) ?></td>
                <td><?= h($additional->modified_date) ?></td>
                <td><?= $this->Number->format($additional->holder_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $additional->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $additional->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $additional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $additional->id)]) ?>
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
