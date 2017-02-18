<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paymenttype'), ['action' => 'edit', $paymenttype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paymenttype'), ['action' => 'delete', $paymenttype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymenttype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paymenttype'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paymenttype'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paymenttype view large-9 medium-8 columns content">
    <h3><?= h($paymenttype->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($paymenttype->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paymenttype->id) ?></td>
        </tr>
    </table>
</div>
