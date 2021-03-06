<div class="productSegments index">
	<h2><?php echo __('Product Segments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('min_age'); ?></th>
			<th><?php echo $this->Paginator->sort('max_age'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('interests'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($productSegments as $productSegment): ?>
	<tr>
		<td><?php echo h($productSegment['ProductSegment']['id']); ?>&nbsp;</td>
		<td><?php echo h($productSegment['ProductSegment']['min_age']); ?>&nbsp;</td>
		<td><?php echo h($productSegment['ProductSegment']['max_age']); ?>&nbsp;</td>
		<td><?php echo h($productSegment['ProductSegment']['city']); ?>&nbsp;</td>
		<td><?php echo h($productSegment['ProductSegment']['gender']); ?>&nbsp;</td>
		<td><?php echo h($productSegment['ProductSegment']['interests']); ?>&nbsp;</td>
		<td><?php echo h($productSegment['ProductSegment']['created']); ?>&nbsp;</td>
		<td><?php echo h($productSegment['ProductSegment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productSegment['ProductSegment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productSegment['ProductSegment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productSegment['ProductSegment']['id']), null, __('Are you sure you want to delete # %s?', $productSegment['ProductSegment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product Segment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
