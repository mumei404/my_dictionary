<h1>Words</h1>
<a href="<?php echo $this->Url->Build(['controller' => 'Words', 'action' => 'add']); ?>"><button>Add a new word</button></a>
<?php echo $this->Form->control('search'); ?>
<table id="table" class="tablesorter">
    <thead>
        <tr>
            <th>Date</th>
            <th>Word</th>
            <th>Meaning</th>
            <th>Example</th>
            <th>Others</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($words as $word): ?>
        <tr>
            <td><?php echo h($word->created); ?></td>
            <td class="words"><?php echo h($word->name); ?></td>
            <td><?php echo h($word->meaning); ?></td>
            <td><?php echo nl2br(h($word->example)); ?></td>
            <td>
                <a href="<?php echo $this->Url->build(['controller' => 'Words', 'action' => 'edit', $word->id]); ?>">
                    Edit
                </a>
                <?php echo $this->Form->postLink('Delete', ['action' => 'delete', $word->id], ['confirm' => 'Are you sure?']); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->Element('Js/order'); ?>
<?php echo $this->Element('Js/search'); ?>
<?php echo $this->Element('Js/speech'); ?>
