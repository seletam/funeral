<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paymentDue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paymentDue->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Payment Due'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paymentDue form large-9 medium-8 columns content">
    <?= $this->Form->create($paymentDue) ?>
    <fieldset>
        <legend><?= __('Edit Payment Due') ?></legend>
        <?php
            echo $this->Form->input('commencement_date', ['empty' => true]);
            echo $this->Form->input('payroll_deduction_date', ['empty' => true]);
            echo $this->Form->input('holder_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
