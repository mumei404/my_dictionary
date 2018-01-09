<h1>Add words</h1>
<?php
    echo $this->Form->create($word);
    echo $this->Form->control('name');
    echo $this->Form->control('meaning');
    echo $this->Form->control('example');
    echo $this->Form->control('tag_id', ['options' => $tags]);
    echo $this->Form->button('save');
    echo $this->Form->end();
?>
