<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="col-lg-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <!--<th>password</th>-->
                <th>email</th>
                <th>created</th>
                <th><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
	    <?php foreach ($users as $user): ?>
    	    <tr>
    		<td><?= $this->Number->format($user->id) ?></td>
    		<td><?= h($user->username) ?></td>
    		<!--<td><?= h($user->password) ?></td>-->
    		<td><?= h($user->email) ?></td>
		<td><?= date('d-m-Y', strtotime($user->created)) ?></td>
    		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
			<?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
    		</td>
    	    </tr>
	    <?php endforeach; ?>
        </tbody>
    </table>
</div>
