<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskShare $subtaskShare
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtask Share'), ['action' => 'edit', $subtaskShare->subtask_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtask Share'), ['action' => 'delete', $subtaskShare->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskShare->subtask_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Shares'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Share'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtaskShares view large-9 medium-8 columns content">
    <h3><?= h($subtaskShare->subtask_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subtask') ?></th>
            <td><?= $subtaskShare->has('subtask') ? $this->Html->link($subtaskShare->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskShare->subtask->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $subtaskShare->has('participant') ? $this->Html->link($subtaskShare->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $subtaskShare->participant->id]) : '' ?></td>
        </tr>
    </table>
</div>
