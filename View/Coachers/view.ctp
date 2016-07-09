<div class="coachers view">
<h2><?php  echo __('Coacher'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name Eng'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['first_name_eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name Eng'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['last_name_eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Name'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['father_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Born Date'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['born_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Immigration Date'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['immigration_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Id'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['team_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Degrees'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['degrees']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Static Chest Number'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['static_chest_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Health Organization Id'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['health_organization_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Number'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['passport_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Expired'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['passport_expired']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Status Id'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['family_status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registarion Date'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['registarion_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Addresses'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['addresses']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sizes'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['sizes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medical Tests'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['medical_tests']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height Date'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['height_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight Date'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['weight_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Army Details'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['army_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainer'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['trainer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age Group Id'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['age_group_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coacher['Association']['name'], array('controller' => 'associations', 'action' => 'view', $coacher['Association']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($coacher['Coacher']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coacher'), array('action' => 'edit', $coacher['Coacher']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Coacher'), array('action' => 'delete', $coacher['Coacher']['id']), null, __('Are you sure you want to delete # %s?', $coacher['Coacher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coachers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coacher'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
	</ul>
</div>
