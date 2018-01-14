<h1>Edit a word</h1>
<?php echo $this->Form->create($word); ?>
<?php echo $this->Form->control('name'); ?>
<?php echo $this->Form->control('meaning'); ?>
<?php echo $this->Form->control('example'); ?>
<?php echo $this->Form->control('tag_id', ['options' => $options]); ?>
<?php echo $this->Form->button('Save'); ?>
<?php echo $this->Form->end(); ?>
