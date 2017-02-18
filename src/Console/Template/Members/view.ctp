<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Additional'), ['controller' => 'Additional', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Additional'), ['controller' => 'Additional', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="members view large-9 medium-8 columns content">
    <h3><?= h($member->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Holder') ?></th>
            <td><?= $member->has('holder') ? $this->Html->link($member->holder->title, ['controller' => 'Holders', 'action' => 'view', $member->holder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Additional') ?></th>
            <td><?= $member->has('additional') ? $this->Html->link($member->additional->id, ['controller' => 'Additional', 'action' => 'view', $member->additional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($member->id) ?></td>
        </tr>
    </table>
</div>
