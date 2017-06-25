<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskType $subtaskType
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtask Type'), ['action' => 'edit', $subtaskType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtask Type'), ['action' => 'delete', $subtaskType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtaskTypes view large-9 medium-8 columns content">
    <h3><?= h($subtaskType->subtask_type_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subtask Type Name') ?></th>
            <td><?= h($subtaskType->subtask_type_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subtaskType->id) ?></td>
        </tr>
    </table>

    <h4><?= __('Completed '.($subtaskType->subtask_type_name).' Subtasks') ?></h4>
    <div class="related">
        <?php if (!empty($subtaskType->successful_subtask_task_with_calculated_scoring_participant)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Participant Id') ?></th>-->
                <th scope="col"><?= __('Participant') ?></th>
                <!--<th scope="col"><?= __('Dream Id') ?></th>-->
                <!--<th scope="col"><?= __('Dream Type Id') ?></th>-->
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <!--<th scope="col"><?= __('Dream Url') ?></th>-->
                <!--<th scope="col"><?= __('Contemporary Task Id') ?></th>-->
                <!--<th scope="col"><?= __('Contemporary Task Start') ?></th>-->
                <!--<th scope="col"><?= __('Contemporary Task Expiration') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Id') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Task Id') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Super Id') ?></th>-->
                <th scope="col"><?= __('Name') ?></th>
                <!--<th scope="col"><?= __('Subtask Category Id') ?></th>-->
                <th scope="col"><?= __('Minimum Value') ?></th>
                <!--<th scope="col"><?= __('Subtask Max Value') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Starting Demand') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Inflation Rate') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Demand Cutoff') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Task Period Demand') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Description') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Url') ?></th>-->
                <th scope="col"><?= __('Accumulative') ?></th>
                <!--<th scope="col"><?= __('Subtask Owner Participant Id') ?></th>-->
                <th scope="col"><?= __('Category') ?></th>
                <!--<th scope="col"><?= __('Subtask Category Class') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Category Description') ?></th>-->
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <!--<th scope="col"><?= __('Contemporary Demand Positive') ?></th>-->
                <!--<th scope="col"><?= __('Inner Function') ?></th>-->
                <!--<th scope="col"><?= __('External Function') ?></th>-->
                <th scope="col"><?= __('Final Value') ?></th>
                <!--<th scope="col"><?= __('Subtask Dividend Rate') ?></th>-->
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
            <?php foreach ($subtaskType->successful_subtask_task_with_calculated_scoring_participant as $successfulSubtaskTaskWithCalculatedScoring): ?>
            <tr>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->participant_id) ?></td>-->
                <td><?= $this->Html->link($successfulSubtaskTaskWithCalculatedScoring->participant_name, ['controller' => 'Participants', 'action' => 'view',($successfulSubtaskTaskWithCalculatedScoring->participant_id)]) ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_id) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_type_id) ?></td>-->
                <td><?= $this->Html->link($successfulSubtaskTaskWithCalculatedScoring->dream_timestamp,['controller' => 'Dreams', 'action' => 'view',($successfulSubtaskTaskWithCalculatedScoring->dream_id)]) ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_url) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_id) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_start) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_expiration) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_id) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_task_id) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_super_id) ?></td>-->
                <td><?= $this->Html->link($successfulSubtaskTaskWithCalculatedScoring->subtask_name,['controller' => 'Subtasks', 'action' => 'view',($successfulSubtaskTaskWithCalculatedScoring->subtask_id)]) ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_id) ?></td>-->
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_base_value) ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_max_value) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_starting_demand) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_inflation_rate) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_demand_cutoff) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_task_period_demand) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_description) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_url) ?></td>-->
                <td><?= h(($successfulSubtaskTaskWithCalculatedScoring->subtask_accumulative == 1)? 'Yes' : 'No') ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_owner_participant_id) ?></td>-->
                <td><?= $this->Html->link($successfulSubtaskTaskWithCalculatedScoring->subtask_category_name,['controller' => 'SubtaskCategories', 'action' => 'view',($successfulSubtaskTaskWithCalculatedScoring->subtask_category_id)]) ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_class) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_description) ?></td>-->
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_success_count) ?></td>
                <td><?= $this->Number->format($successfulSubtaskTaskWithCalculatedScoring->contemporary_demand) ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_demand_positive) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->inner_function) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->external_function) ?></td>-->
               <td><?= $this->Number->precision(intval(100*$successfulSubtaskTaskWithCalculatedScoring->final_value)/100,2) ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_dividend_rate) ?></td>-->
                <!--
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'view', $successfulSubtaskTaskWithCalculatedScoring->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedScoring->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedScoring->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedScoring->id)]) ?>
                </td>
                -->
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    
   <?php if (!empty($subtaskType->subtask_share_holder_complete)): ?>
<div class="subtaskShareHolderComplete view large-9 medium-8 columns content subtask subtask_yellow">
<h4><?= __(($subtaskType->subtask_type_name).' Subtasks') ?></h4>
    <?php foreach ($subtaskType->subtask_share_holder_complete as $subtaskShareHolderComplete): ?>
    <h3><?= $this->Html->link($subtaskShareHolderComplete->subtask_name, ['controller' => 'Subtasks', 'action' => 'view',($subtaskShareHolderComplete->subtask_id)]) ?></h3>
    <div class="subtask_picture"><?= (null != $subtaskShareHolderComplete->subtask_image) ? $this->Html->image($subtaskShareHolderComplete->subtask_image, ['alt' => (null != $subtaskShareHolderComplete->subtask_symbol) ? ('&#'.$subtaskShareHolderComplete->subtask_symbol.'; '.($subtaskShareHolderComplete->subtask_name)) : ($subtaskShareHolderComplete->subtask_name)]) :
    ((null != $subtaskShareHolderComplete->subtask_symbol) ? '<span class="emoji">&#'.$subtaskShareHolderComplete->subtask_symbol.';</span>' : '')
    ?></div>
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
        <tr>
            <th scope="row"><?= __('Subtask Share Holder Count') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_share_holder_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Instruction') ?></th>
            <td><?= h($subtaskShareHolderComplete->subtask_instruction) ?></td>
        </tr>         
    </table> 
    <?php endforeach; ?>    
    <?php endif; ?>
    </div>

</div>
<?php echo $this->Html->css('emoji.css',['block'=>true]); ?>
