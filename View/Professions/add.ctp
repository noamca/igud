<div class="professions form">
<?php echo $this->Form->create('Profession'); ?>
	<fieldset>
		<legend><?php echo __('Form Profession'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('name_eng');
		echo $this->Form->input('description');
		echo $this->Form->input('measure_type');
		echo $this->Form->input('profession_type');
		echo $this->Form->input('wind_measure_type');
		echo $this->Form->input('ages_range');
		echo $this->Form->input('results_format');
		echo $this->Form->input('hurdle_default_height');
		echo $this->Form->input('default_weight');
		echo $this->Form->input('max_lanes');
		echo $this->Form->input('qty_runners_on_lane');
		echo $this->Form->input('points_culculation_yn');
		echo $this->Form->input('points_table_id');
		echo $this->Form->input('all_round_yn');
		echo $this->Form->input('all_round_profession_ids');
		echo $this->Form->input('sort');
		echo $this->Form->input('group_id');
		echo $this->Form->input('heat_no');
		echo $this->Form->input('grandprix_group_desc');
		echo $this->Form->input('world_record');
		echo $this->Form->input('euro_record');
		echo $this->Form->input('mifal_record');
		echo $this->Form->input('isr_int_record');
		echo $this->Form->input('isr_record');
		echo $this->Form->input('world_record_w');
		echo $this->Form->input('euro_record_w');
		echo $this->Form->input('mifal_record_w');
		echo $this->Form->input('isr_int_record_w');
		echo $this->Form->input('isr_record_w');
		echo $this->Form->input('isr_champ_record');
		echo $this->Form->input('isr_champ_record_w');
		echo $this->Form->input('isr_champ_record_kadets');
		echo $this->Form->input('isr_champ_record_kadets_w');
		echo $this->Form->input('control_panel_name');
		echo $this->Form->input('macabia_record');
		echo $this->Form->input('length');
		echo $this->Form->input('heat_no_new_panel');
		echo $this->Form->input('multi_fight_sort');
		echo $this->Form->input('multi_fight_sort_7');
		echo $this->Form->input('short_name_en');
		echo $this->Form->input('macabia_record_w');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Profession.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Profession.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Professions'), array('action' => 'index')); ?></li>
	</ul>
</div>
