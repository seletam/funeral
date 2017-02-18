<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="address form large-9 medium-8 columns content">
    <?= $this->Form->create($addres) ?>
    <fieldset>
        <legend><?= __('Add Addres') ?></legend>
        <?php
            echo $this->Form->input('holder_id', ['options' => $holders, 'empty' => true]);
            echo $this->Form->input('line_1');
            echo $this->Form->input('line_2');
            echo $this->Form->input('line_3');
            echo $this->Form->input('city');
            echo $this->Form->input('code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
