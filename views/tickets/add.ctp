<div class="tickets form">
<?php echo $this->Form->create('Ticket');?>
	<fieldset>
 		<legend><?php __('Add Ticket'); ?></legend>
	<?php
		echo $this->Form->input('status');
		echo $this->Form->input('category');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tickets', true), array('action' => 'index'));?></li>
	</ul>
</div>