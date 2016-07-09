<div class="referees view">
<h2><?php  echo __('Referee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name Eng'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['first_name_eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name Eng'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['last_name_eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Name'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['father_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Born Date'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['born_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Immigration Date'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['immigration_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Id'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['team_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Degrees'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['degrees']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Static Chest Number'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['static_chest_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Health Organization Id'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['health_organization_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Number'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['passport_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Expired'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['passport_expired']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Status Id'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['family_status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registarion Date'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['registarion_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Addresses'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['addresses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sizes'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['sizes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medical Tests'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['medical_tests']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height Date'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['height_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight Date'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['weight_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Army Details'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['army_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainer'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['trainer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age Group Id'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['age_group_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association'); ?></dt>
		<dd>
			<?php echo $this->Html->link($referee['Association']['name'], array('controller' => 'associations', 'action' => 'view', $referee['Association']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($referee['Referee']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Referee'), array('action' => 'edit', $referee['Referee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Referee'), array('action' => 'delete', $referee['Referee']['id']), null, __('Are you sure you want to delete # %s?', $referee['Referee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Referees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
	</ul>
</div>
