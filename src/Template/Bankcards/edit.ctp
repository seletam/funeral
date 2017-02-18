<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bankcard->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bankcard->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bankcards'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bankcards form large-9 medium-8 columns content">
    <?= $this->Form->create($bankcard) ?>
    <fieldset>
        <legend><?= __('Edit Bankcard') ?></legend>
        <?php
            echo $this->Form->input('accountholder');
            echo $this->Form->input('type');
            echo $this->Form->input('accountno');
            echo $this->Form->input('bankname');
            echo $this->Form->input('branchcode');
            echo $this->Form->input('payment_id', ['options' => $payments, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
