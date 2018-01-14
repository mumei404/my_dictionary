<h1><?php echo h($grammarTag->name); ?></h1>
<a href="<?php echo $this->Url->build(['controller' => 'Grammar', 'action' => 'add']); ?>"><button>Add a new content</button></a>
<ul>
    <?php foreach ($grammar as $eachGrammar): ?>
        <li>
            <a href="<?php echo $this->Url->build(['controller' => 'Grammar', 'action' => 'detail', $eachGrammar->id]); ?>">
                <?php echo h($eachGrammar->title); ?>
            </a>
            <a href="<?php echo $this->Url->build(['controller' => 'Grammar', 'action' => 'edit', $eachGrammar->id]); ?>">
                Edit
            </a>
            <?php echo $this->Form->postLink('Delete', ['action' => 'delete', $eachGrammar->id], ['confirm' => 'Are you sure?']); ?>
        </li>
    <?php endforeach; ?>
</ul>
