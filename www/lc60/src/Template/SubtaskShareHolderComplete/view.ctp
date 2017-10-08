<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskShareHolderComplete $subtaskShareHolderComplete
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtask Share Holder Complete'), ['action' => 'edit', $subtaskShareHolderComplete->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtask Share Holder Complete'), ['action' => 'delete', $subtaskShareHolderComplete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskShareHolderComplete->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Share Holder Complete'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Share Holder Complete'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtaskShareHolderComplete view large-9 medium-8 columns content">
    <h3><?= h($subtaskShareHolderComplete->subtask_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subtask') ?></th>
            <td><?= $subtaskShareHolderComplete->has('subtask') ? $this->Html->link($subtaskShareHolderComplete->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskShareHolderComplete->subtask->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $subtaskShareHolderComplete->has('participant') ? $this->Html->link($subtaskShareHolderComplete->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $subtaskShareHolderComplete->participant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Task') ?></th>
            <td><?= $subtaskShareHolderComplete->has('task') ? $this->Html->link($subtaskShareHolderComplete->task->task_title, ['controller' => 'Tasks', 'action' => 'view', $subtaskShareHolderComplete->task->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Name') ?></th>
            <td><?= h($subtaskShareHolderComplete->subtask_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category') ?></th>
            <td><?= $subtaskShareHolderComplete->has('subtask_category') ? $this->Html->link($subtaskShareHolderComplete->subtask_category->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $subtaskShareHolderComplete->subtask_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Url') ?></th>
            <td><?= h($subtaskShareHolderComplete->subtask_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category Name') ?></th>
            <td><?= h($subtaskShareHolderComplete->subtask_category_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category Class') ?></th>
            <td><?= h($subtaskShareHolderComplete->subtask_category_class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Super Id') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_super_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Base Value') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_base_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Max Value') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_max_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Starting Demand') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_starting_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Inflation Rate') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_inflation_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Demand Cutoff') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_demand_cutoff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Task Period Demand') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_task_period_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participant Owner') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->participant_owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Dividend Rate') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_dividend_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Accumulative') ?></th>
            <td><?= $subtaskShareHolderComplete->subtask_accumulative ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Subtask Description') ?></h4>
        <?= $this->Text->autoParagraph(h($subtaskShareHolderComplete->subtask_description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Subtask Category Description') ?></h4>
        <?= $this->Text->autoParagraph(h($subtaskShareHolderComplete->subtask_category_description)); ?>
    </div>
</div>
