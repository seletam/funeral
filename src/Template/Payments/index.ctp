<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Holders'), ['controller' => 'Holders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Holder'), ['controller' => 'Holders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bankcards'), ['controller' => 'Bankcards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bankcard'), ['controller' => 'Bankcards', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="col-lg-12">
    <table class="table table-bordered payments">
        <thead>
            <tr>
                <th>id</th>
                <th>type</th>
                <th>refno</th>
                <th>amount</th>
                <th>status</th>
                <th>creation_date</th>
                <th>account holder</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
	    <?php foreach ($payments as $payment): ?>
    	    <tr>
    		<td><?= $this->Number->format($payment->id) ?></td>
    		<td><?php
			if ($payment->type == '1') {
			    $payment->type = $type[1];
			} else if ($payment->type == '2') { {
				$payment->type = $type[2];
			    }
			}
			echo $payment->type;
			?></td>
    		<td><?= h($payment->refno) ?></td>
    		<td><?= $this->Number->Currency($payment->amount, $currency = "ZAR") ?></td>
    		<td><?php
			if ($payment->status == '0') {
			    $payment->status = $status[0];
			} else if ($payment->status == '1') { {
				$payment->status = $status[1];
			    }
			}
			echo $payment->status;
			?>
    		</td>
    		<td><?= date('d-M-Y', strtotime($payment->creation_date)) ?></td>
		<td><?php 
		if(!empty($payment->holder)){
		    echo $payment->holder->first_names . ' ' . $payment->holder->surname;
		} ?></td>
    		<td class="actions">
			<?= $this->Html->link(__('View'), ['action' => 'view', $payment->id]) ?>
    		    <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $payment->id]) ?>
			<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?>-->
    		</td>
    	    </tr>
	    <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $('.payments').dataTable();
</script>