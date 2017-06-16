<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskSpecial $subtaskSpecial
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtask Special'), ['action' => 'edit', $subtaskSpecial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtask Special'), ['action' => 'delete', $subtaskSpecial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskSpecial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Specials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Special'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtaskSpecials view large-9 medium-8 columns content">
    <h3><?= h($subtaskSpecial->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subtaskSpecial->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Is Personal') ?></th>
            <td><?= $subtaskSpecial->subtask_is_personal ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Is Quest') ?></th>
            <td><?= $subtaskSpecial->subtask_is_quest ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
