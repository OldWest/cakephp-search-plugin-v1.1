<div class="tickets index">
	<h2><?php __('Tickets');?></h2>
	
	<div class="filter">
	<?php
		echo $this->Form->create('Ticket', array(
			'url' => array_merge(array('action' => 'index'), $this->params['pass'])
			));
		echo $this->Form->input('title', array('div' => false, 'empty' => true)); // empty creates blank option.
		echo $this->Form->input('status', array('div' => false, 'empty' => true)); // disable div output.
		echo $this->Form->submit(__('Search', true), array('div' => false));
		echo $this->Form->end();
	?>
	</div>	
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('category');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tickets as $ticket):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ticket['Ticket']['status']; ?>&nbsp;</td>
		<td><?php echo $ticket['Ticket']['category']; ?>&nbsp;</td>
		<td><?php echo $ticket['Ticket']['title']; ?>&nbsp;</td>
		<td><?php echo $ticket['Ticket']['content']; ?>&nbsp;</td>
		<td><?php echo $ticket['Ticket']['created']; ?>&nbsp;</td>
		<td><?php echo $ticket['Ticket']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ticket['Ticket']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ticket['Ticket']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ticket['Ticket']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticket['Ticket']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('action' => 'add')); ?></li>
	</ul>
</div>