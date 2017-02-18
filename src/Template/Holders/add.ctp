<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Additional'), ['controller' => 'Additional', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Additional'), ['controller' => 'Additional', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Address'), ['controller' => 'Address', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Addres'), ['controller' => 'Address', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dependant'), ['controller' => 'Dependant', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dependant'), ['controller' => 'Dependant', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="holders form large-9 medium-8 columns content">
    <?= $this->Form->create($holder) ?>
    <fieldset>
        <legend><?= __('Add Holder') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('first_names');
            echo $this->Form->input('surname');
            echo $this->Form->input('idnumber');
            echo $this->Form->input('dob', ['empty' => true]);
            echo $this->Form->input('package');
            echo $this->Form->input('premium');
            echo $this->Form->input('creation_date');
            echo $this->Form->input('modified_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
