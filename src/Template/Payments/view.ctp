<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bankcards'), ['controller' => 'Bankcards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bankcard'), ['controller' => 'Bankcards', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payments view large-9 medium-8 columns content">
    <h3><?= h($payment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Refno') ?></th>
            <td><?= h($payment->refno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Holder') ?></th>
            <td><?= $payment->has('holder') ? $this->Html->link($payment->holder->title, ['controller' => 'Holders', 'action' => 'view', $payment->holder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($payment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($payment->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($payment->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($payment->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($payment->creation_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bankcards') ?></h4>
        <?php if (!empty($payment->bankcards)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Accountholder') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Accountno') ?></th>
                <th scope="col"><?= __('Bankname') ?></th>
                <th scope="col"><?= __('Branchcode') ?></th>
                <th scope="col"><?= __('Payment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($payment->bankcards as $bankcards): ?>
            <tr>
                <td><?= h($bankcards->id) ?></td>
                <td><?= h($bankcards->accountholder) ?></td>
                <td><?= h($bankcards->type) ?></td>
                <td><?= h($bankcards->accountno) ?></td>
                <td><?= h($bankcards->bankname) ?></td>
                <td><?= h($bankcards->branchcode) ?></td>
                <td><?= h($bankcards->payment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bankcards', 'action' => 'view', $bankcards->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bankcards', 'action' => 'edit', $bankcards->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bankcards', 'action' => 'delete', $bankcards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bankcards->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
