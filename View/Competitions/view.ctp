<div class="competitions view">
<h2><?php  echo __('Competition'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Eng'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['name_eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Start'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['date_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date End'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['date_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is International'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['is_international']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age From'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['age_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age To'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['age_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Api Open'); ?></dt>
		<dd>
			<?php echo h($competition['Competition']['is_api_open']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competition'), array('action' => 'edit', $competition['Competition']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competition'), array('action' => 'delete', $competition['Competition']['id']), null, __('Are you sure you want to delete # %s?', $competition['Competition']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Competitions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competition'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Professions'); ?></h3>
	<?php if (!empty($competition['Profession'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Name Eng'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Measure Type'); ?></th>
		<th><?php echo __('Profession Type'); ?></th>
		<th><?php echo __('Wind Measure Type'); ?></th>
		<th><?php echo __('Ages Range'); ?></th>
		<th><?php echo __('Results Format'); ?></th>
		<th><?php echo __('Hurdle Default Height'); ?></th>
		<th><?php echo __('Default Weight'); ?></th>
		<th><?php echo __('Max Lanes'); ?></th>
		<th><?php echo __('Qty Runners On Lane'); ?></th>
		<th><?php echo __('Points Culculation Yn'); ?></th>
		<th><?php echo __('All Round Yn'); ?></th>
		<th><?php echo __('All Round Profession Ids'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($competition['Profession'] as $profession): ?>
		<tr>
			<td><?php echo $profession['id']; ?></td>
			<td><?php echo $profession['name']; ?></td>
			<td><?php echo $profession['name_eng']; ?></td>
			<td><?php echo $profession['description']; ?></td>
			<td><?php echo $profession['measure_type']; ?></td>
			<td><?php echo $profession['profession_type']; ?></td>
			<td><?php echo $profession['wind_measure_type']; ?></td>
			<td><?php echo $profession['ages_range']; ?></td>
			<td><?php echo $profession['results_format']; ?></td>
			<td><?php echo $profession['hurdle_default_height']; ?></td>
			<td><?php echo $profession['default_weight']; ?></td>
			<td><?php echo $profession['max_lanes']; ?></td>
			<td><?php echo $profession['qty_runners_on_lane']; ?></td>
			<td><?php echo $profession['points_culculation_yn']; ?></td>
			<td><?php echo $profession['all_round_yn']; ?></td>
			<td><?php echo $profession['all_round_profession_ids']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'professions', 'action' => 'view', $profession['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'professions', 'action' => 'edit', $profession['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'professions', 'action' => 'delete', $profession['id']), null, __('Are you sure you want to delete # %s?', $profession['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
