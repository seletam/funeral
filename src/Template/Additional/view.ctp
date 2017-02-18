<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Additional'), ['action' => 'edit', $additional->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Additional'), ['action' => 'delete', $additional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $additional->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Additional'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Additional'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="additional view large-9 medium-8 columns content">
    <h3><?= h($additional->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Names') ?></th>
            <td><?= h($additional->names) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($additional->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idnumber') ?></th>
            <td><?= h($additional->idnumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($additional->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= $this->Number->format($additional->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Premium') ?></th>
            <td><?= $this->Number->format($additional->premium) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Holder Id') ?></th>
            <td><?= $this->Number->format($additional->holder_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($additional->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($additional->modified_date) ?></td>
        </tr>
    </table>
</div>
