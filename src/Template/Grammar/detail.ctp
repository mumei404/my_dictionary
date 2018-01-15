<h1>
    <?php echo h($grammar->title); ?>
    <small>
        <a href="<?php echo $this->Url->build(['controller' => 'Grammar', 'action' => 'edit', $grammar->id]); ?>">
            Edit
        </a>
    </small>
    <small>
        <?php echo $this->Form->postLink('Delete', ['action' => 'delete', $grammar->id], ['confirm' => 'Are you sure?']); ?>
    </small>
</h1>
<hr>
<p><?php echo nl2br(h($grammar->text)); ?></p>
