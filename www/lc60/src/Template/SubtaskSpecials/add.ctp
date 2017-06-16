<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subtask Specials'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="subtaskSpecials form large-9 medium-8 columns content">
    <?= $this->Form->create($subtaskSpecial) ?>
    <fieldset>
        <legend><?= __('Add Subtask Special') ?></legend>
        <?php
            echo $this->Form->control('subtask_is_personal');
            echo $this->Form->control('subtask_is_quest');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
