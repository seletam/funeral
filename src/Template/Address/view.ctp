<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Addres'), ['action' => 'edit', $addres->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Addres'), ['action' => 'delete', $addres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="address view large-9 medium-8 columns content">
    <h3><?= h($addres->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Holder') ?></th>
            <td><?= $addres->has('holder') ? $this->Html->link($addres->holder->title, ['controller' => 'Holders', 'action' => 'view', $addres->holder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Line 1') ?></th>
            <td><?= h($addres->line_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Line 2') ?></th>
            <td><?= h($addres->line_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Line 3') ?></th>
            <td><?= h($addres->line_3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($addres->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($addres->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($addres->id) ?></td>
        </tr>
    </table>
</div>
