<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskCategory[]|\Cake\Collection\CollectionInterface $subtaskCategories
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Calculated Subtask Demand External'), ['controller' => 'CalculatedSubtaskDemandExternal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calculated Subtask Demand External'), ['controller' => 'CalculatedSubtaskDemandExternal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Calculated Subtask Demand Final Value'), ['controller' => 'CalculatedSubtaskDemandFinalValue', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calculated Subtask Demand Final Value'), ['controller' => 'CalculatedSubtaskDemandFinalValue', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Calculated Subtask Demand Inner'), ['controller' => 'CalculatedSubtaskDemandInner', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calculated Subtask Demand Inner'), ['controller' => 'CalculatedSubtaskDemandInner', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Calculated Subtask Demand Union'), ['controller' => 'CalculatedSubtaskDemandUnion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calculated Subtask Demand Union'), ['controller' => 'CalculatedSubtaskDemandUnion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demand View Success'), ['controller' => 'DemandViewSuccess', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demand View Succes'), ['controller' => 'DemandViewSuccess', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demand View Success Contemporary Demand'), ['controller' => 'DemandViewSuccessContemporaryDemand', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demand View Success Contemporary Demand'), ['controller' => 'DemandViewSuccessContemporaryDemand', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demand View Success Contemporary Demand Positive'), ['controller' => 'DemandViewSuccessContemporaryDemandPositive', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demand View Success Contemporary Demand Positive'), ['controller' => 'DemandViewSuccessContemporaryDemandPositive', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demand View Uncomplete Contemporary Demand'), ['controller' => 'DemandViewUncompleteContemporaryDemand', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demand View Uncomplete Contemporary Demand'), ['controller' => 'DemandViewUncompleteContemporaryDemand', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demand View Uncomplete Contemporary Demand Positive'), ['controller' => 'DemandViewUncompleteContemporaryDemandPositive', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demand View Uncomplete Contemporary Demand Positive'), ['controller' => 'DemandViewUncompleteContemporaryDemandPositive', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Category'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Category'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Category Complete Final'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Category Complete Final'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Category Complete Inner'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Category Complete Inner'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Scores'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Score'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtaskCategories index large-9 medium-8 columns content">
    <h3><?= __('Subtask Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_class') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subtaskCategories as $subtaskCategory): ?>
            <tr>
                <td><?= $this->Number->format($subtaskCategory->id) ?></td>
                <td><?= h($subtaskCategory->subtask_category_name) ?></td>
                <td><?= h($subtaskCategory->subtask_category_color) ?></td>
                <td><?= h($subtaskCategory->subtask_category_class) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subtaskCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subtaskCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subtaskCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskCategory->id)]) ?>
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
