<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payment Due'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paymentDue index large-9 medium-8 columns content">
    <h3><?= __('Payment Due') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>id') ?></th>
                <th>commencement_date') ?></th>
                <th>payroll_deduction_date') ?></th>
                <th>holder_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paymentDue as $paymentDue): ?>
            <tr>
                <td><?= $this->Number->format($paymentDue->id) ?></td>
                <td><?= h($paymentDue->commencement_date) ?></td>
                <td><?= h($paymentDue->payroll_deduction_date) ?></td>
                <td><?= $this->Number->format($paymentDue->holder_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paymentDue->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paymentDue->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paymentDue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentDue->id)]) ?>
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
