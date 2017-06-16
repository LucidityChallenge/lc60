<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskType[]|\Cake\Collection\CollectionInterface $subtaskTypes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subtask Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtaskTypes index large-9 medium-8 columns content">
    <h3><?= __('Subtask Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_type_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subtaskTypes as $subtaskType): ?>
            <tr>
                <td><?= $this->Number->format($subtaskType->id) ?></td>
                <td><?= h($subtaskType->subtask_type_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subtaskType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subtaskType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subtaskType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskType->id)]) ?>
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
