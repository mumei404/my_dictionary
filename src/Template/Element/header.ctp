<nav class="top-bar expanded" data-topbar role="navigation">
    <ul class="title-area large-2 medium-4 columns">
        <li class="name">
            <h1><a href="<?php echo $this->Url->build(['controller' => 'Words', 'action' => 'index']); ?>">My Dictionary</a></h1>
        </li>
    </ul>
    <div class="top-bar-section">
        <ul class="right">
            <li><a href="<?php echo $this->Url->build(['controller' => 'Words', 'action' => 'index']); ?>">Words</a></li>
            <li><a href="<?php echo $this->Url->build(['controller' => 'GrammarTags', 'action' => 'index']); ?>">Grammar</a></li>
        </ul>
    </div>
</nav>
