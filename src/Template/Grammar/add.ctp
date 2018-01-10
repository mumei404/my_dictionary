<h1>Add a new content</h1>
<?php echo $this->Form->create('grammar'); ?>
<?php echo $this->Form->control('title'); ?>
<?php echo $this->Form->control('text', ['type' => 'textarea']); ?>
<?php echo $this->Form->control('grammar_tag_id', ['options' => $options]); ?>
<?php echo $this->Form->button('Save'); ?>
<?php echo $this->Form->end(); ?>
