<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskShare[]|\Cake\Collection\CollectionInterface $subtaskShares
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subtask Share'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtaskShares index large-9 medium-8 columns content">
    <h3><?= __('Subtask Shares') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('subtask_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subtaskShares as $subtaskShare): ?>
            <tr>
                <td><?= $subtaskShare->has('subtask') ? $this->Html->link($subtaskShare->subtask->id, ['controller' => 'Subtasks', 'action' => 'view', $subtaskShare->subtask->id]) : '' ?></td>
                <td><?= $subtaskShare->has('participant') ? $this->Html->link($subtaskShare->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $subtaskShare->participant->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subtaskShare->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subtaskShare->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subtaskShare->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskShare->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
