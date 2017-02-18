<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bankcard'), ['action' => 'edit', $bankcard->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bankcard'), ['action' => 'delete', $bankcard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bankcard->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bankcards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bankcard'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bankcards view large-9 medium-8 columns content">
    <h3><?= h($bankcard->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Accountholder') ?></th>
            <td><?= h($bankcard->accountholder) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($bankcard->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accountno') ?></th>
            <td><?= h($bankcard->accountno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bankname') ?></th>
            <td><?= h($bankcard->bankname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branchcode') ?></th>
            <td><?= h($bankcard->branchcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment') ?></th>
            <td><?= $bankcard->has('payment') ? $this->Html->link($bankcard->payment->id, ['controller' => 'Payments', 'action' => 'view', $bankcard->payment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bankcard->id) ?></td>
        </tr>
    </table>
</div>
