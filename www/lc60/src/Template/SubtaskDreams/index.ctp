<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskDream[]|\Cake\Collection\CollectionInterface $subtaskDreams
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subtask Dream'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dreams'), ['controller' => 'Dreams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dream'), ['controller' => 'Dreams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtaskDreams index large-9 medium-8 columns content">
    <h3><?= __('Subtask Dreams') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subtaskDreams as $subtaskDream): ?>
            <tr>
                <td><?= $this->Number->format($subtaskDream->id) ?></td>
                <td><?= $subtaskDream->has('subtask') ? $this->Html->link($subtaskDream->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskDream->subtask->id]) : '' ?></td>
                <td><?= $subtaskDream->has('dream') ? $this->Html->link($subtaskDream->dream->id, ['controller' => 'Dreams', 'action' => 'view', $subtaskDream->dream->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subtaskDream->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subtaskDream->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subtaskDream->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskDream->id)]) ?>
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
