<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\DreamType[]|\Cake\Collection\CollectionInterface $dreamTypes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dream Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dream Type Id'), ['controller' => 'DreamTypeId', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dream Type Id'), ['controller' => 'DreamTypeId', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Scores'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Score'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dreamTypes index large-9 medium-8 columns content">
    <h3><?= __('Dream Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_type_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dream_type_short_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dreamTypes as $dreamType): ?>
            <tr>
                <td><?= $this->Number->format($dreamType->id) ?></td>
                <td><?= h($dreamType->dream_type_name) ?></td>
                <td><?= h($dreamType->dream_type_short_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dreamType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dreamType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dreamType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dreamType->id)]) ?>
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
