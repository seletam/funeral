<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $additional->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $additional->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Additional'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="additional form large-9 medium-8 columns content">
    <?= $this->Form->create($additional) ?>
    <fieldset>
        <legend><?= __('Edit Additional') ?></legend>
        <?php
            echo $this->Form->input('names');
            echo $this->Form->input('surname');
            echo $this->Form->input('idnumber');
            echo $this->Form->input('gender');
            echo $this->Form->input('premium');
            echo $this->Form->input('creation_date');
            echo $this->Form->input('modified_date');
            echo $this->Form->input('holder_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
