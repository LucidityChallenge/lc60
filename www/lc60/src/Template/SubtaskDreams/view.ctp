<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskDream $subtaskDream
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtask Dream'), ['action' => 'edit', $subtaskDream->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtask Dream'), ['action' => 'delete', $subtaskDream->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskDream->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Dreams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Dream'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dreams'), ['controller' => 'Dreams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream'), ['controller' => 'Dreams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtaskDreams view large-9 medium-8 columns content">
    <h3><?= h($subtaskDream->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subtask') ?></th>
            <td><?= $subtaskDream->has('subtask') ? $this->Html->link($subtaskDream->subtask->id, ['controller' => 'Subtasks', 'action' => 'view', $subtaskDream->subtask->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream') ?></th>
            <td><?= $subtaskDream->has('dream') ? $this->Html->link($subtaskDream->dream->id, ['controller' => 'Dreams', 'action' => 'view', $subtaskDream->dream->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subtaskDream->id) ?></td>
        </tr>
    </table>
</div>
