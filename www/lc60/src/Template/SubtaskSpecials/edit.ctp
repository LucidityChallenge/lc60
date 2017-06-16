<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subtaskSpecial->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskSpecial->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subtask Specials'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="subtaskSpecials form large-9 medium-8 columns content">
    <?= $this->Form->create($subtaskSpecial) ?>
    <fieldset>
        <legend><?= __('Edit Subtask Special') ?></legend>
        <?php
            echo $this->Form->control('subtask_is_personal');
            echo $this->Form->control('subtask_is_quest');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
