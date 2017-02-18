<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dependant'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dependant form large-9 medium-8 columns content">
    <?= $this->Form->create($dependant) ?>
    <fieldset>
        <legend><?= __('Add Dependant') ?></legend>
        <?php
            echo $this->Form->input('names');
            echo $this->Form->input('surname');
            echo $this->Form->input('idnumber');
            echo $this->Form->input('local');
            echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
