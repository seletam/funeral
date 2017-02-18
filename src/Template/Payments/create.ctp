<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $payment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="col-sm-12">
    <?= $this->Form->create($holders) ?>
    <?= debug($holders) ?>
    <fieldset>
        <legend><?= __('Edit Holder') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('first_names');
            echo $this->Form->input('surname');
            echo $this->Form->input('idnumber');
            echo $this->Form->input('type');
            echo $this->Form->input('amount');
            echo $this->Form->input('creation_date', ['empty' => true]);
            echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
