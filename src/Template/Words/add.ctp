<h1>Add a new word</h1>
<?php
    echo $this->Form->create($word);
    echo $this->Form->control('name');
    echo $this->Form->control('meaning');
    echo $this->Form->control('example');
    echo $this->Form->control('tag_id', ['options' => $tags]);
    echo $this->Form->button('Save');
    echo $this->Form->end();
?>
