<h1>Grammar</h1>
<a href="<?php echo $this->Url->build(['controller' => 'GrammarTags', 'action' => 'add']); ?>"><button>Add new grammar</button></a>
<ul>
    <?php foreach ($grammarTags as $grammarTag): ?>
        <li><a href="<?php echo $this->Url->build(['controller' => 'Grammar', 'action' => 'index', $grammarTag->id]); ?>"><?php echo h($grammarTag->name); ?></a></li>
    <?php endforeach; ?>
</ul>
