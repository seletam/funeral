<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bankcard'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bankcards index large-9 medium-8 columns content">
    <h3><?= __('Bankcards') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>id') ?></th>
                <th>accountholder') ?></th>
                <th>type') ?></th>
                <th>accountno') ?></th>
                <th>bankname') ?></th>
                <th>branchcode') ?></th>
                <th>payment_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bankcards as $bankcard): ?>
            <tr>
                <td><?= $this->Number->format($bankcard->id) ?></td>
                <td><?= h($bankcard->accountholder) ?></td>
                <td><?= h($bankcard->type) ?></td>
                <td><?= h($bankcard->accountno) ?></td>
                <td><?= h($bankcard->bankname) ?></td>
                <td><?= h($bankcard->branchcode) ?></td>
                <td><?= $bankcard->has('payment') ? $this->Html->link($bankcard->payment->id, ['controller' => 'Payments', 'action' => 'view', $bankcard->payment->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bankcard->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bankcard->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bankcard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bankcard->id)]) ?>
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
