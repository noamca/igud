<div class="Athlets view">
<h2><?php  echo __('Athlete'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name Eng'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['first_name_eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name Eng'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['last_name_eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Name'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['father_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Born Date'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['born_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Immigration Date'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['immigration_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Id'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['team_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Degrees'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['degrees']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Static Chest Number'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['static_chest_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Health Organization Id'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['health_organization_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Number'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['passport_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Expired'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['passport_expired']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Status Id'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['family_status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registarion Date'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['registarion_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Addresses'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['addresses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sizes'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['sizes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medical Tests'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['medical_tests']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height Date'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['height_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight Date'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['weight_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Army Details'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['army_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainer'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['trainer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age Group Id'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['age_group_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association'); ?></dt>
		<dd>
			<?php echo $this->Html->link($athlete['Association']['name'], array('controller' => 'associations', 'action' => 'view', $athlete['Association']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($athlete['Athlete']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Athlete'), array('action' => 'edit', $athlete['Athlete']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Athlete'), array('action' => 'delete', $athlete['Athlete']['id']), null, __('Are you sure you want to delete # %s?', $athlete['Athlete']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Athlets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Athlete'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List ChestNumbers'), array('controller' => 'chestNumbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chest Number'), array('controller' => 'chestNumbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related ChestNumbers'); ?></h3>
	<?php if (!empty($athlete['ChestNumber'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Chest Number'); ?></th>
		<th><?php echo __('Athlete Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($athlete['ChestNumber'] as $chestNumber): ?>
		<tr>
			<td><?php echo $chestNumber['id']; ?></td>
			<td><?php echo $chestNumber['year']; ?></td>
			<td><?php echo $chestNumber['chest_number']; ?></td>
			<td><?php echo $chestNumber['athlete_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'chestNumbers', 'action' => 'view', $chestNumber['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'chestNumbers', 'action' => 'edit', $chestNumber['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'chestNumbers', 'action' => 'delete', $chestNumber['id']), null, __('Are you sure you want to delete # %s?', $chestNumber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Chest Number'), array('controller' => 'chestNumbers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
