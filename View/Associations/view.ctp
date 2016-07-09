<div class="associations view">
<h2><?php  echo __('Association'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($association['Association']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($association['Association']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Eng'); ?></dt>
		<dd>
			<?php echo h($association['Association']['name_eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Internal Number'); ?></dt>
		<dd>
			<?php echo h($association['Association']['internal_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leagues'); ?></dt>
		<dd>
			<?php echo h($association['Association']['leagues']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Red Board'); ?></dt>
		<dd>
			<?php echo h($association['Association']['red_board']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Association'), array('action' => 'edit', $association['Association']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Association'), array('action' => 'delete', $association['Association']['id']), null, __('Are you sure you want to delete # %s?', $association['Association']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Associations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Athlets'), array('controller' => 'Athlets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Athlete'), array('controller' => 'Athlets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coachers'), array('controller' => 'coachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coacher'), array('controller' => 'coachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referees'), array('controller' => 'referees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referee'), array('controller' => 'referees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Athlets'); ?></h3>
	<?php if (!empty($association['Athlete'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('First Name Eng'); ?></th>
		<th><?php echo __('Last Name Eng'); ?></th>
		<th><?php echo __('Father Name'); ?></th>
		<th><?php echo __('Born Date'); ?></th>
		<th><?php echo __('Immigration Date'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Degrees'); ?></th>
		<th><?php echo __('Static Chest Number'); ?></th>
		<th><?php echo __('Health Organization Id'); ?></th>
		<th><?php echo __('Passport Number'); ?></th>
		<th><?php echo __('Passport Expired'); ?></th>
		<th><?php echo __('Family Status Id'); ?></th>
		<th><?php echo __('Registarion Date'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Addresses'); ?></th>
		<th><?php echo __('Sizes'); ?></th>
		<th><?php echo __('Medical Tests'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Height Date'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Weight Date'); ?></th>
		<th><?php echo __('Army Details'); ?></th>
		<th><?php echo __('Trainer'); ?></th>
		<th><?php echo __('Age Group Id'); ?></th>
		<th><?php echo __('Association Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($association['Athlete'] as $athlete): ?>
		<tr>
			<td><?php echo $athlete['id']; ?></td>
			<td><?php echo $athlete['first_name']; ?></td>
			<td><?php echo $athlete['last_name']; ?></td>
			<td><?php echo $athlete['first_name_eng']; ?></td>
			<td><?php echo $athlete['last_name_eng']; ?></td>
			<td><?php echo $athlete['father_name']; ?></td>
			<td><?php echo $athlete['born_date']; ?></td>
			<td><?php echo $athlete['immigration_date']; ?></td>
			<td><?php echo $athlete['team_id']; ?></td>
			<td><?php echo $athlete['degrees']; ?></td>
			<td><?php echo $athlete['static_chest_number']; ?></td>
			<td><?php echo $athlete['health_organization_id']; ?></td>
			<td><?php echo $athlete['passport_number']; ?></td>
			<td><?php echo $athlete['passport_expired']; ?></td>
			<td><?php echo $athlete['family_status_id']; ?></td>
			<td><?php echo $athlete['registarion_date']; ?></td>
			<td><?php echo $athlete['is_active']; ?></td>
			<td><?php echo $athlete['email']; ?></td>
			<td><?php echo $athlete['addresses']; ?></td>
			<td><?php echo $athlete['sizes']; ?></td>
			<td><?php echo $athlete['medical_tests']; ?></td>
			<td><?php echo $athlete['image']; ?></td>
			<td><?php echo $athlete['gender']; ?></td>
			<td><?php echo $athlete['updated']; ?></td>
			<td><?php echo $athlete['height']; ?></td>
			<td><?php echo $athlete['height_date']; ?></td>
			<td><?php echo $athlete['weight']; ?></td>
			<td><?php echo $athlete['weight_date']; ?></td>
			<td><?php echo $athlete['army_details']; ?></td>
			<td><?php echo $athlete['trainer']; ?></td>
			<td><?php echo $athlete['age_group_id']; ?></td>
			<td><?php echo $athlete['association_id']; ?></td>
			<td><?php echo $athlete['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'Athlets', 'action' => 'view', $athlete['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'Athlets', 'action' => 'edit', $athlete['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Athlets', 'action' => 'delete', $athlete['id']), null, __('Are you sure you want to delete # %s?', $athlete['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Athlete'), array('controller' => 'Athlets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Coachers'); ?></h3>
	<?php if (!empty($association['Coacher'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('First Name Eng'); ?></th>
		<th><?php echo __('Last Name Eng'); ?></th>
		<th><?php echo __('Father Name'); ?></th>
		<th><?php echo __('Born Date'); ?></th>
		<th><?php echo __('Immigration Date'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Degrees'); ?></th>
		<th><?php echo __('Static Chest Number'); ?></th>
		<th><?php echo __('Health Organization Id'); ?></th>
		<th><?php echo __('Passport Number'); ?></th>
		<th><?php echo __('Passport Expired'); ?></th>
		<th><?php echo __('Family Status Id'); ?></th>
		<th><?php echo __('Registarion Date'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Addresses'); ?></th>
		<th><?php echo __('Sizes'); ?></th>
		<th><?php echo __('Medical Tests'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Height Date'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Weight Date'); ?></th>
		<th><?php echo __('Army Details'); ?></th>
		<th><?php echo __('Trainer'); ?></th>
		<th><?php echo __('Age Group Id'); ?></th>
		<th><?php echo __('Association Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($association['Coacher'] as $coacher): ?>
		<tr>
			<td><?php echo $coacher['id']; ?></td>
			<td><?php echo $coacher['first_name']; ?></td>
			<td><?php echo $coacher['last_name']; ?></td>
			<td><?php echo $coacher['first_name_eng']; ?></td>
			<td><?php echo $coacher['last_name_eng']; ?></td>
			<td><?php echo $coacher['father_name']; ?></td>
			<td><?php echo $coacher['born_date']; ?></td>
			<td><?php echo $coacher['immigration_date']; ?></td>
			<td><?php echo $coacher['team_id']; ?></td>
			<td><?php echo $coacher['degrees']; ?></td>
			<td><?php echo $coacher['static_chest_number']; ?></td>
			<td><?php echo $coacher['health_organization_id']; ?></td>
			<td><?php echo $coacher['passport_number']; ?></td>
			<td><?php echo $coacher['passport_expired']; ?></td>
			<td><?php echo $coacher['family_status_id']; ?></td>
			<td><?php echo $coacher['registarion_date']; ?></td>
			<td><?php echo $coacher['is_active']; ?></td>
			<td><?php echo $coacher['email']; ?></td>
			<td><?php echo $coacher['addresses']; ?></td>
			<td><?php echo $coacher['sizes']; ?></td>
			<td><?php echo $coacher['medical_tests']; ?></td>
			<td><?php echo $coacher['image']; ?></td>
			<td><?php echo $coacher['gender']; ?></td>
			<td><?php echo $coacher['updated']; ?></td>
			<td><?php echo $coacher['height']; ?></td>
			<td><?php echo $coacher['height_date']; ?></td>
			<td><?php echo $coacher['weight']; ?></td>
			<td><?php echo $coacher['weight_date']; ?></td>
			<td><?php echo $coacher['army_details']; ?></td>
			<td><?php echo $coacher['trainer']; ?></td>
			<td><?php echo $coacher['age_group_id']; ?></td>
			<td><?php echo $coacher['association_id']; ?></td>
			<td><?php echo $coacher['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'coachers', 'action' => 'view', $coacher['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'coachers', 'action' => 'edit', $coacher['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'coachers', 'action' => 'delete', $coacher['id']), null, __('Are you sure you want to delete # %s?', $coacher['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Coacher'), array('controller' => 'coachers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Referees'); ?></h3>
	<?php if (!empty($association['Referee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('First Name Eng'); ?></th>
		<th><?php echo __('Last Name Eng'); ?></th>
		<th><?php echo __('Father Name'); ?></th>
		<th><?php echo __('Born Date'); ?></th>
		<th><?php echo __('Immigration Date'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Degrees'); ?></th>
		<th><?php echo __('Static Chest Number'); ?></th>
		<th><?php echo __('Health Organization Id'); ?></th>
		<th><?php echo __('Passport Number'); ?></th>
		<th><?php echo __('Passport Expired'); ?></th>
		<th><?php echo __('Family Status Id'); ?></th>
		<th><?php echo __('Registarion Date'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Addresses'); ?></th>
		<th><?php echo __('Sizes'); ?></th>
		<th><?php echo __('Medical Tests'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Height Date'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Weight Date'); ?></th>
		<th><?php echo __('Army Details'); ?></th>
		<th><?php echo __('Trainer'); ?></th>
		<th><?php echo __('Age Group Id'); ?></th>
		<th><?php echo __('Association Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($association['Referee'] as $referee): ?>
		<tr>
			<td><?php echo $referee['id']; ?></td>
			<td><?php echo $referee['first_name']; ?></td>
			<td><?php echo $referee['last_name']; ?></td>
			<td><?php echo $referee['first_name_eng']; ?></td>
			<td><?php echo $referee['last_name_eng']; ?></td>
			<td><?php echo $referee['father_name']; ?></td>
			<td><?php echo $referee['born_date']; ?></td>
			<td><?php echo $referee['immigration_date']; ?></td>
			<td><?php echo $referee['team_id']; ?></td>
			<td><?php echo $referee['degrees']; ?></td>
			<td><?php echo $referee['static_chest_number']; ?></td>
			<td><?php echo $referee['health_organization_id']; ?></td>
			<td><?php echo $referee['passport_number']; ?></td>
			<td><?php echo $referee['passport_expired']; ?></td>
			<td><?php echo $referee['family_status_id']; ?></td>
			<td><?php echo $referee['registarion_date']; ?></td>
			<td><?php echo $referee['is_active']; ?></td>
			<td><?php echo $referee['email']; ?></td>
			<td><?php echo $referee['addresses']; ?></td>
			<td><?php echo $referee['sizes']; ?></td>
			<td><?php echo $referee['medical_tests']; ?></td>
			<td><?php echo $referee['image']; ?></td>
			<td><?php echo $referee['gender']; ?></td>
			<td><?php echo $referee['updated']; ?></td>
			<td><?php echo $referee['height']; ?></td>
			<td><?php echo $referee['height_date']; ?></td>
			<td><?php echo $referee['weight']; ?></td>
			<td><?php echo $referee['weight_date']; ?></td>
			<td><?php echo $referee['army_details']; ?></td>
			<td><?php echo $referee['trainer']; ?></td>
			<td><?php echo $referee['age_group_id']; ?></td>
			<td><?php echo $referee['association_id']; ?></td>
			<td><?php echo $referee['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'referees', 'action' => 'view', $referee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'referees', 'action' => 'edit', $referee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'referees', 'action' => 'delete', $referee['id']), null, __('Are you sure you want to delete # %s?', $referee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Referee'), array('controller' => 'referees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
