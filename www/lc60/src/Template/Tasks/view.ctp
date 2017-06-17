<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Task $task
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Task'), ['action' => 'edit', $task->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Task'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?> </li>
        <!--
        <li><?= $this->Html->link(__('List Current Task'), ['controller' => 'CurrentTask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Current Task'), ['controller' => 'CurrentTask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dream With Type'), ['controller' => 'DreamWithType', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream With Type'), ['controller' => 'DreamWithType', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Share Holder Complete'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Share Holder Complete'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Subtask Category'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Subtask Category'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'add']) ?> </li>
        -->
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
        <!--
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Unexpired Task'), ['controller' => 'UnexpiredTask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unexpired Task'), ['controller' => 'UnexpiredTask', 'action' => 'add']) ?> </li>
        -->
    </ul>
</nav>
<div class="tasks view large-9 medium-8 columns content">
    <h3><?= h($task->task_title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Task Title') ?></th>
            <td><?= h($task->task_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Task Url') ?></th>
            <td><?= h($task->task_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($task->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Task Start') ?></th>
            <td><?= h($task->task_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Task Expiration') ?></th>
            <td><?= h($task->task_expiration) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Task Text') ?></h4>
        <?= $this->Text->autoParagraph(h($task->task_text)); ?>
    </div>
    <!--
    <div class="related">
        <h4><?= __('Related Current Task') ?></h4>
        <?php if (!empty($task->current_task)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Task Id') ?></th>
                <th scope="col"><?= __('Task Title') ?></th>
                <th scope="col"><?= __('Task Start') ?></th>
                <th scope="col"><?= __('Task Expiration') ?></th>
                <th scope="col"><?= __('Task Text') ?></th>
                <th scope="col"><?= __('Task Url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($task->current_task as $currentTask): ?>
            <tr>
                <td><?= h($currentTask->task_id) ?></td>
                <td><?= h($currentTask->task_title) ?></td>
                <td><?= h($currentTask->task_start) ?></td>
                <td><?= h($currentTask->task_expiration) ?></td>
                <td><?= h($currentTask->task_text) ?></td>
                <td><?= h($currentTask->task_url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CurrentTask', 'action' => 'view', $currentTask->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CurrentTask', 'action' => 'edit', $currentTask->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CurrentTask', 'action' => 'delete', $currentTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $currentTask->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>-->
    <div class="related">
        <h4><?= __('Related Dreams') ?></h4>
        <?php if (!empty($task->dream_with_type_participant)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Participant Id') ?></th>-->
                <th scope="col"><?= __('Participant') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <!--<th scope="col"><?= __('Dream Type Id') ?></th>-->
                <th scope="col"><?= __('Dream Type Name') ?></th>
                <!--<th scope="col"><?= __('Dream Type Short Name') ?></th>-->
                <th scope="col"><?= __('Dream Value') ?></th>
                <!--<th scope="col"><?= __('Task Id') ?></th>-->
                <!--<th scope="col"><?= __('Task Title') ?></th>-->
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
            <?php foreach ($task->dream_with_type_participant as $dreamWithType): ?>
            <tr>
                <!--<td><?= h($dreamWithType->participant_id) ?></td>-->
                <td><?= $this->Html->link(($dreamWithType->participant_name), ['controller' => 'Participants', 'action' => 'view', $dreamWithType->participant_id]) ?></td>
                <td><?= $this->Html->link(($dreamWithType->dream_timestamp), ['controller' => 'Dreams', 'action' => 'view', $dreamWithType->dream_id])  ?></td>
                <!--<td><?= h($dreamWithType->dream_type_id) ?></td>-->                
                <td><?= $this->Html->link(($dreamWithType->dream_type_name), ['controller' => 'DreamTypes', 'action' => 'view', $dreamWithType->dream_type_id]) ?></td>
                <!--<td><?= h($dreamWithType->dream_type_short_name) ?></td>-->
                <td><?= h($dreamWithType->final_value_truncate) ?></td>
                <!--<td><?= h($dreamWithType->task_id) ?></td>-->
                <!--<td><?= h($dreamWithType->task_title) ?></td>-->
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dreams', 'action' => 'view', $dreamWithType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dreams', 'action' => 'edit', $dreamWithType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DreamWithType', 'action' => 'delete', $dreamWithType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dreamWithType->id)]) ?>
                </td>-->
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <!--
    <div class="related">
        <h4><?= __('Related Subtask Share Holder Complete') ?></h4>
        <?php if (!empty($task->subtask_share_holder_complete)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Participant Owner') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Subtask Image') ?></th>
                <th scope="col"><?= __('Subtask Symbol') ?></th>
                <th scope="col"><?= __('Subtask Share Holder Count') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($task->subtask_share_holder_complete as $subtaskShareHolderComplete): ?>
            <tr>
                <td><?= h($subtaskShareHolderComplete->id) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_id) ?></td>
                <td><?= h($subtaskShareHolderComplete->participant_id) ?></td>
                <td><?= h($subtaskShareHolderComplete->task_id) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_super_id) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_name) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_category_id) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_base_value) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_max_value) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_starting_demand) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_inflation_rate) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_demand_cutoff) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_description) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_url) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_accumulative) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_task_period_demand) ?></td>
                <td><?= h($subtaskShareHolderComplete->participant_owner) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_dividend_rate) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_category_name) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_category_class) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_category_description) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_image) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_symbol) ?></td>
                <td><?= h($subtaskShareHolderComplete->subtask_share_holder_count) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'view', $subtaskShareHolderComplete->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'edit', $subtaskShareHolderComplete->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'delete', $subtaskShareHolderComplete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskShareHolderComplete->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Subtask Subtask Category') ?></h4>
        <?php if (!empty($task->subtask_subtask_category)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Image') ?></th>
                <th scope="col"><?= __('Subtask Symbol') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($task->subtask_subtask_category as $subtaskSubtaskCategory): ?>
            <tr>
                <td><?= h($subtaskSubtaskCategory->subtask_id) ?></td>
                <td><?= h($subtaskSubtaskCategory->task_id) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_super_id) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_name) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_category_id) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_base_value) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_max_value) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_starting_demand) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_inflation_rate) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_demand_cutoff) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_description) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_url) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_accumulative) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_task_period_demand) ?></td>
                <td><?= h($subtaskSubtaskCategory->participant_id) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_dividend_rate) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_image) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_symbol) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_category_name) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_category_class) ?></td>
                <td><?= h($subtaskSubtaskCategory->subtask_category_description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'view', $subtaskSubtaskCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'edit', $subtaskSubtaskCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'delete', $subtaskSubtaskCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskSubtaskCategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Subtasks') ?></h4>
        <?php if (!empty($task->subtasks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Image') ?></th>
                <th scope="col"><?= __('Subtask Symbol') ?></th>
                <th scope="col"><?= __('Subtask Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($task->subtasks as $subtasks): ?>
            <tr>
                <td><?= h($subtasks->id) ?></td>
                <td><?= h($subtasks->task_id) ?></td>
                <td><?= h($subtasks->subtask_super_id) ?></td>
                <td><?= h($subtasks->subtask_name) ?></td>
                <td><?= h($subtasks->subtask_category_id) ?></td>
                <td><?= h($subtasks->subtask_base_value) ?></td>
                <td><?= h($subtasks->subtask_max_value) ?></td>
                <td><?= h($subtasks->subtask_starting_demand) ?></td>
                <td><?= h($subtasks->subtask_inflation_rate) ?></td>
                <td><?= h($subtasks->subtask_demand_cutoff) ?></td>
                <td><?= h($subtasks->subtask_description) ?></td>
                <td><?= h($subtasks->subtask_url) ?></td>
                <td><?= h($subtasks->subtask_accumulative) ?></td>
                <td><?= h($subtasks->subtask_task_period_demand) ?></td>
                <td><?= h($subtasks->participant_id) ?></td>
                <td><?= h($subtasks->subtask_dividend_rate) ?></td>
                <td><?= h($subtasks->subtask_image) ?></td>
                <td><?= h($subtasks->subtask_symbol) ?></td>
                <td><?= h($subtasks->subtask_type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Subtasks', 'action' => 'view', $subtasks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Subtasks', 'action' => 'edit', $subtasks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subtasks', 'action' => 'delete', $subtasks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtasks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask') ?></h4>
        <?php if (!empty($task->successful_subtask)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col"><?= __('Dream Url') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($task->successful_subtask as $successfulSubtask): ?>
            <tr>
                <td><?= h($successfulSubtask->participant_id) ?></td>
                <td><?= h($successfulSubtask->dream_id) ?></td>
                <td><?= h($successfulSubtask->dream_timestamp) ?></td>
                <td><?= h($successfulSubtask->dream_type_id) ?></td>
                <td><?= h($successfulSubtask->dream_url) ?></td>
                <td><?= h($successfulSubtask->subtask_id) ?></td>
                <td><?= h($successfulSubtask->task_id) ?></td>
                <td><?= h($successfulSubtask->subtask_super_id) ?></td>
                <td><?= h($successfulSubtask->subtask_name) ?></td>
                <td><?= h($successfulSubtask->subtask_category_id) ?></td>
                <td><?= h($successfulSubtask->subtask_base_value) ?></td>
                <td><?= h($successfulSubtask->subtask_max_value) ?></td>
                <td><?= h($successfulSubtask->subtask_starting_demand) ?></td>
                <td><?= h($successfulSubtask->subtask_inflation_rate) ?></td>
                <td><?= h($successfulSubtask->subtask_demand_cutoff) ?></td>
                <td><?= h($successfulSubtask->subtask_task_period_demand) ?></td>
                <td><?= h($successfulSubtask->subtask_description) ?></td>
                <td><?= h($successfulSubtask->subtask_url) ?></td>
                <td><?= h($successfulSubtask->subtask_accumulative) ?></td>
                <td><?= h($successfulSubtask->subtask_owner_participant_id) ?></td>
                <td><?= h($successfulSubtask->subtask_dividend_rate) ?></td>
                <td><?= h($successfulSubtask->subtask_category_name) ?></td>
                <td><?= h($successfulSubtask->subtask_category_class) ?></td>
                <td><?= h($successfulSubtask->subtask_category_description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtask', 'action' => 'view', $successfulSubtask->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtask', 'action' => 'edit', $successfulSubtask->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtask', 'action' => 'delete', $successfulSubtask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtask->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Unexpired Task') ?></h4>
        <?php if (!empty($task->unexpired_task)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Task Id') ?></th>
                <th scope="col"><?= __('Task Title') ?></th>
                <th scope="col"><?= __('Task Start') ?></th>
                <th scope="col"><?= __('Task Expiration') ?></th>
                <th scope="col"><?= __('Task Text') ?></th>
                <th scope="col"><?= __('Task Url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($task->unexpired_task as $unexpiredTask): ?>
            <tr>
                <td><?= h($unexpiredTask->task_id) ?></td>
                <td><?= h($unexpiredTask->task_title) ?></td>
                <td><?= h($unexpiredTask->task_start) ?></td>
                <td><?= h($unexpiredTask->task_expiration) ?></td>
                <td><?= h($unexpiredTask->task_text) ?></td>
                <td><?= h($unexpiredTask->task_url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UnexpiredTask', 'action' => 'view', $unexpiredTask->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UnexpiredTask', 'action' => 'edit', $unexpiredTask->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UnexpiredTask', 'action' => 'delete', $unexpiredTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unexpiredTask->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    -->
</div>
