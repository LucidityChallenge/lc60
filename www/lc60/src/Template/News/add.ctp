<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="news form large-9 medium-8 columns content">
    <?= $this->Form->create($news) ?>
    <fieldset>
        <legend><?= __('Add News') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo h('Note: Leave empty to be redirected to view.');            
            echo $this->Form->control('url');
            echo $this->Form->control('content');
            echo $this->Form->control('image');
            echo h('Note: Set to future to delay publish.');            
            echo $this->Form->control('publish');
            echo h('Note: User is automatically set.');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true, 'disabled' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
