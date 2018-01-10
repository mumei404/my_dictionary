<h1>一覧</h1>
<a href="<?php echo $this->Url->Build(['controller' => 'Words', 'action' => 'add']); ?>"><button>単語登録</button></a>
<?php // echo $this->Fotm->create('search'); ?>
<?php echo $this->Form->control('search'); ?>
<?php // echo $this->Form->end(); ?>
<table id="table" class="tablesorter">
    <thead>
        <tr>
            <th>登録日時</th>
            <th>単語</th>
            <th>意味</th>
            <th>機能</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($words as $word): ?>
        <tr>
            <td><?php echo h($word->created); ?></td>
            <td class="words"><?php echo h($word->name); ?></td>
            <td><?php echo h($word->meaning); ?></td>
            <td><?php echo $this->Form->postLink('Delete', ['action' => 'delete', $word->id], ['confirm' => 'Are you sure?']); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->Element('Js/order'); ?>
<?php echo $this->Element('Js/search'); ?>
<?php echo $this->Element('Js/speech'); ?>
