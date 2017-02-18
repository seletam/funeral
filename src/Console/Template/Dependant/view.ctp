<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dependant'), ['action' => 'edit', $dependant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dependant'), ['action' => 'delete', $dependant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dependant'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dependant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dependant view large-9 medium-8 columns content">
    <h3><?= h($dependant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Names') ?></th>
            <td><?= h($dependant->names) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($dependant->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idnumber') ?></th>
            <td><?= h($dependant->idnumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Local') ?></th>
            <td><?= h($dependant->local) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Holder') ?></th>
            <td><?= $dependant->has('holder') ? $this->Html->link($dependant->holder->title, ['controller' => 'Holders', 'action' => 'view', $dependant->holder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dependant->id) ?></td>
        </tr>
    </table>
</div>
