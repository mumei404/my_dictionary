<h1>My Dictionary</h1>
<a href="<?php echo $this->Url->Build(['controller' => 'Words', 'action' => 'add']); ?>"><button>Add Words</button></a>
<table>
    <tr>
        <th>登録日時</th>
        <th>単語</th>
        <th>意味</th>
    </tr>
    <?php foreach ($words as $word): ?>
        <tr>
            <td><?php echo h($word->created); ?></td>
            <td><?php echo h($word->name); ?></td>
            <td><?php echo h($word->meaning); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
