<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Memos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="memos form large-9 medium-8 columns content">
    <?= $this->Form->create($memo) ?>
    <fieldset>
        <legend><?= __('Add Memo') ?></legend>
        <?php
            echo $this->Form->control('memo_nickname');
            echo $this->Form->control('memo_message');
            echo $this->Form->control('memo_timestamp');
            echo $this->Form->control('memo_unread');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
