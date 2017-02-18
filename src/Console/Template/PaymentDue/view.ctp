<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment Due'), ['action' => 'edit', $paymentDue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment Due'), ['action' => 'delete', $paymentDue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentDue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payment Due'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment Due'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paymentDue view large-9 medium-8 columns content">
    <h3><?= h($paymentDue->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paymentDue->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Holder Id') ?></th>
            <td><?= $this->Number->format($paymentDue->holder_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commencement Date') ?></th>
            <td><?= h($paymentDue->commencement_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payroll Deduction Date') ?></th>
            <td><?= h($paymentDue->payroll_deduction_date) ?></td>
        </tr>
    </table>
</div>
