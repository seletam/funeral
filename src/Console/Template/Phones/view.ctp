<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Phone'), ['action' => 'edit', $phone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Phone'), ['action' => 'delete', $phone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Phones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="phones view large-9 medium-8 columns content">
    <h3><?= h($phone->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Home') ?></th>
            <td><?= h($phone->home) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work') ?></th>
            <td><?= h($phone->work) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cell') ?></th>
            <td><?= h($phone->cell) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Holder') ?></th>
            <td><?= $phone->has('holder') ? $this->Html->link($phone->holder->title, ['controller' => 'Holders', 'action' => 'view', $phone->holder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($phone->id) ?></td>
        </tr>
    </table>
</div>
