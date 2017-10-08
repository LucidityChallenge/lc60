<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskCategory $subtaskCategory
  */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtask Category'), ['action' => 'edit', $subtaskCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtask Category'), ['action' => 'delete', $subtaskCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Calculated Subtask Demand External'), ['controller' => 'CalculatedSubtaskDemandExternal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calculated Subtask Demand External'), ['controller' => 'CalculatedSubtaskDemandExternal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Calculated Subtask Demand Final Value'), ['controller' => 'CalculatedSubtaskDemandFinalValue', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calculated Subtask Demand Final Value'), ['controller' => 'CalculatedSubtaskDemandFinalValue', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Calculated Subtask Demand Inner'), ['controller' => 'CalculatedSubtaskDemandInner', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calculated Subtask Demand Inner'), ['controller' => 'CalculatedSubtaskDemandInner', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Calculated Subtask Demand Union'), ['controller' => 'CalculatedSubtaskDemandUnion', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calculated Subtask Demand Union'), ['controller' => 'CalculatedSubtaskDemandUnion', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demand View Success'), ['controller' => 'DemandViewSuccess', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand View Succes'), ['controller' => 'DemandViewSuccess', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demand View Success Contemporary Demand'), ['controller' => 'DemandViewSuccessContemporaryDemand', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand View Success Contemporary Demand'), ['controller' => 'DemandViewSuccessContemporaryDemand', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demand View Success Contemporary Demand Positive'), ['controller' => 'DemandViewSuccessContemporaryDemandPositive', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand View Success Contemporary Demand Positive'), ['controller' => 'DemandViewSuccessContemporaryDemandPositive', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demand View Uncomplete Contemporary Demand'), ['controller' => 'DemandViewUncompleteContemporaryDemand', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand View Uncomplete Contemporary Demand'), ['controller' => 'DemandViewUncompleteContemporaryDemand', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demand View Uncomplete Contemporary Demand Positive'), ['controller' => 'DemandViewUncompleteContemporaryDemandPositive', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demand View Uncomplete Contemporary Demand Positive'), ['controller' => 'DemandViewUncompleteContemporaryDemandPositive', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Category'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Category'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Category Complete Final'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Category Complete Final'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Category Complete Inner'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Category Complete Inner'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Scores'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Score'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'add']) ?> </li>
    </ul>
</nav>-->
<div class="subtaskCategories view large-9 medium-8 columns content">
    <h3><?= h(($subtaskCategory->subtask_category_name).' Subtasks') ?></h3>
    <table class="vertical-table">
	<tr class="subtask_color">
	  <td colspan="2" class="<?= ($subtaskCategory->subtask_category_class) ?>"></td>
	</tr>
        <tr>
            <th scope="row"><?= __('Subtask Category Name') ?></th>
            <td><?= h($subtaskCategory->subtask_category_name) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Subtask Category Description') ?></h4>
        <?= $this->Text->autoParagraph(h($subtaskCategory->subtask_category_description)); ?>
    </div>
    
    <h4><?= __('Completed '.($subtaskCategory->subtask_category_name).' Subtasks') ?></h4>
    <div class="related">
        <?php if (!empty($subtaskCategory->successful_subtask_task_with_calculated_scoring_participant)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Participant Id') ?></th>-->
                <!--<th scope="col"><?= __('Dream Id') ?></th>-->
                <!--<th scope="col"><?= __('Dream Type Id') ?></th>-->
                <th scope="col"><?= __('Participant Name') ?></th>
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
                <!--<th scope="col"><?= __('Subtask Success Count') ?></th>-->
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <!--<th scope="col"><?= __('Contemporary Demand Positive') ?></th>-->
                <!--<th scope="col"><?= __('Inner Function') ?></th>-->
                <!--<th scope="col"><?= __('External Function') ?></th>-->
                <th scope="col"><?= __('Final Value') ?></th>
                <!--<th scope="col"><?= __('Subtask Dividend Rate') ?></th>-->
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
            <?php foreach ($subtaskCategory->successful_subtask_task_with_calculated_scoring_participant as $successfulSubtaskTaskWithCalculatedScoring): ?>
            <tr>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->participant_id) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_id) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_type_id) ?></td>-->
                <td><?= $this->Html->link($successfulSubtaskTaskWithCalculatedScoring->participant_name,['controller' => 'Participants', 'action' => 'view',($successfulSubtaskTaskWithCalculatedScoring->participant_id)]) ?></td>
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
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_success_count) ?></td>-->
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
<?php if (!empty($subtaskCategory->subtask_share_holder_complete)): ?>
<div class="subtaskShareHolderComplete view large-9 medium-8 columns content subtask subtask_yellow">
<h4><?= __(($subtaskCategory->subtask_category_name).' Subtasks') ?></h4>
    <?php foreach ($subtaskCategory->subtask_share_holder_complete as $subtaskShareHolderComplete): ?>
    
    <table class="vertical-table">
    	<tr class="subtask_color">
	  <td colspan="2" class="<?= ($subtaskCategory->subtask_category_class) ?>"></td>
	</tr>
	<tr>
	  <th scope="row" colspan="2"><h3><?= $this->Html->link($subtaskShareHolderComplete->subtask_name, ['controller' => 'Subtasks', 'action' => 'view',($subtaskShareHolderComplete->subtask_id)]) ?></h3></th>
	</tr>
        <tr>
            <th scope="row"><?= __('Symbol') ?></th>
            <td><?= $subtaskShareHolderComplete->has('subtask') ? $this->Html->link($subtaskShareHolderComplete->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskShareHolderComplete->subtask->id]) : '' ?>
                <div class="subtask_picture"><?= (null != $subtaskShareHolderComplete->subtask_image) ? $this->Html->image($subtaskShareHolderComplete->subtask_image, ['alt' => (null != $subtaskShareHolderComplete->subtask_symbol) ? ('&#'.$subtaskShareHolderComplete->subtask_symbol.'; '.($subtaskShareHolderComplete->subtask_name)) : ($subtaskShareHolderComplete->subtask_name)]) :
    ((null != $subtaskShareHolderComplete->subtask_symbol) ? '<span class="emoji">&#'.$subtaskShareHolderComplete->subtask_symbol.';</span>' : '')
    ?></div>
            </td>
        </tr>
        <!--<tr>
            <th scope="row"><?= __('Task') ?></th>
            <td><?= $subtaskShareHolderComplete->has('task') ? $this->Html->link($subtaskShareHolderComplete->task->task_title, ['controller' => 'Tasks', 'action' => 'view', $subtaskShareHolderComplete->task->id]) : '' ?></td>
        </tr>-->
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $subtaskShareHolderComplete->has('subtask_category') ? $this->Html->link($subtaskShareHolderComplete->subtask_category->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $subtaskShareHolderComplete->subtask_category->id]) : 'None' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= ($subtaskShareHolderComplete->subtask_type_name != null) ? $this->Html->link($subtaskShareHolderComplete->subtask_type_name,['controller'=>'subtask_types', 'action' => 'view',($subtaskShareHolderComplete->subtask_type_id)]) : 'None' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($subtaskShareHolderComplete->subtask_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Name') ?></th>
            <td><?= h($subtaskShareHolderComplete->subtask_category_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Minimum Value') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_base_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maximum Value') ?></th>
            <td><?= ($subtaskShareHolderComplete->subtask_max_value == 0) ? ($subtaskShareHolderComplete->subtask_base_value) : $this->Number->format($subtaskShareHolderComplete->subtask_max_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stating Bonus') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_starting_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participant Owner') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->participant_owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shared Rate') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_dividend_rate).'%' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Accumulative') ?></th>
            <td><?= $subtaskShareHolderComplete->subtask_accumulative ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Count') ?></th>
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
   
<!--    
    <div class="related">
        <h4><?= __('Related Successful Subtask Task With Calculated Scoring') ?></h4>
        <?php if (!empty($subtaskCategory->successful_subtask_task_with_calculated_scoring)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <th scope="col"><?= __('Dream Url') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Start') ?></th>
                <th scope="col"><?= __('Contemporary Task Expiration') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
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
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col"><?= __('Inner Function') ?></th>
                <th scope="col"><?= __('External Function') ?></th>
                <th scope="col"><?= __('Final Value') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->successful_subtask_task_with_calculated_scoring as $successfulSubtaskTaskWithCalculatedScoring): ?>
            <tr>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->participant_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_type_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_timestamp) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_url) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_start) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_expiration) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_task_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_super_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_name) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_base_value) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_max_value) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_starting_demand) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_inflation_rate) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_demand_cutoff) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_task_period_demand) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_description) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_url) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_accumulative) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_owner_participant_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_name) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_class) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_description) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_success_count) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_demand) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_demand_positive) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->inner_function) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->external_function) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->final_value) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_dividend_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'view', $successfulSubtaskTaskWithCalculatedScoring->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedScoring->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedScoring->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedScoring->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
        <div class="related">
        <h4><?= __('Related Calculated Subtask Demand External') ?></h4>
        <?php if (!empty($subtaskCategory->calculated_subtask_demand_external)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Current Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col"><?= __('Inner Function') ?></th>
                <th scope="col"><?= __('External Function') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->calculated_subtask_demand_external as $calculatedSubtaskDemandExternal): ?>
            <tr>
                <td><?= h($calculatedSubtaskDemandExternal->current_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->contemporary_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_id) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_starting_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_success_count) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_task_period_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_super_id) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_name) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_category_id) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_base_value) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_max_value) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_inflation_rate) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_demand_cutoff) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_description) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_url) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_accumulative) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_owner_participant_id) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_dividend_rate) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_category_name) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_category_class) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->subtask_category_description) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->contemporary_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->contemporary_demand_positive) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->inner_function) ?></td>
                <td><?= h($calculatedSubtaskDemandExternal->external_function) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CalculatedSubtaskDemandExternal', 'action' => 'view', $calculatedSubtaskDemandExternal->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CalculatedSubtaskDemandExternal', 'action' => 'edit', $calculatedSubtaskDemandExternal->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CalculatedSubtaskDemandExternal', 'action' => 'delete', $calculatedSubtaskDemandExternal->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $calculatedSubtaskDemandExternal->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    
    
    
    
    
    
    
    
    
    <div class="related">
        <h4><?= __('Related Calculated Subtask Demand Final Value') ?></h4>
        <?php if (!empty($subtaskCategory->calculated_subtask_demand_final_value)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Current Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col"><?= __('Inner Function') ?></th>
                <th scope="col"><?= __('External Function') ?></th>
                <th scope="col"><?= __('Final Value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->calculated_subtask_demand_final_value as $calculatedSubtaskDemandFinalValue): ?>
            <tr>
                <td><?= h($calculatedSubtaskDemandFinalValue->current_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->contemporary_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_id) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_starting_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_success_count) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_task_period_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_super_id) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_name) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_category_id) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_base_value) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_max_value) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_inflation_rate) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_demand_cutoff) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_description) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_url) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_accumulative) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_owner_participant_id) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_dividend_rate) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_category_name) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_category_class) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->subtask_category_description) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->contemporary_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->contemporary_demand_positive) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->inner_function) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->external_function) ?></td>
                <td><?= h($calculatedSubtaskDemandFinalValue->final_value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CalculatedSubtaskDemandFinalValue', 'action' => 'view', $calculatedSubtaskDemandFinalValue->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CalculatedSubtaskDemandFinalValue', 'action' => 'edit', $calculatedSubtaskDemandFinalValue->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CalculatedSubtaskDemandFinalValue', 'action' => 'delete', $calculatedSubtaskDemandFinalValue->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $calculatedSubtaskDemandFinalValue->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Calculated Subtask Demand Inner') ?></h4>
        <?php if (!empty($subtaskCategory->calculated_subtask_demand_inner)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Current Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col"><?= __('Inner Function') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->calculated_subtask_demand_inner as $calculatedSubtaskDemandInner): ?>
            <tr>
                <td><?= h($calculatedSubtaskDemandInner->current_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->contemporary_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_id) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_starting_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_success_count) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_task_period_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_super_id) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_name) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_category_id) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_base_value) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_max_value) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_inflation_rate) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_demand_cutoff) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_description) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_url) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_accumulative) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_owner_participant_id) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_dividend_rate) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_category_name) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_category_class) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->subtask_category_description) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->contemporary_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->contemporary_demand_positive) ?></td>
                <td><?= h($calculatedSubtaskDemandInner->inner_function) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CalculatedSubtaskDemandInner', 'action' => 'view', $calculatedSubtaskDemandInner->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CalculatedSubtaskDemandInner', 'action' => 'edit', $calculatedSubtaskDemandInner->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CalculatedSubtaskDemandInner', 'action' => 'delete', $calculatedSubtaskDemandInner->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $calculatedSubtaskDemandInner->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Calculated Subtask Demand Union') ?></h4>
        <?php if (!empty($subtaskCategory->calculated_subtask_demand_union)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Current Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->calculated_subtask_demand_union as $calculatedSubtaskDemandUnion): ?>
            <tr>
                <td><?= h($calculatedSubtaskDemandUnion->current_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->contemporary_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_id) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_starting_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_success_count) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_task_period_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_task_id) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_super_id) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_name) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_category_id) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_base_value) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_max_value) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_inflation_rate) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_demand_cutoff) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_description) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_url) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_accumulative) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_owner_participant_id) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_dividend_rate) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_category_name) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_category_class) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->subtask_category_description) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->contemporary_demand) ?></td>
                <td><?= h($calculatedSubtaskDemandUnion->contemporary_demand_positive) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CalculatedSubtaskDemandUnion', 'action' => 'view', $calculatedSubtaskDemandUnion->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CalculatedSubtaskDemandUnion', 'action' => 'edit', $calculatedSubtaskDemandUnion->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CalculatedSubtaskDemandUnion', 'action' => 'delete', $calculatedSubtaskDemandUnion->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $calculatedSubtaskDemandUnion->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Demand View Success') ?></h4>
        <?php if (!empty($subtaskCategory->demand_view_success)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
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
            <?php foreach ($subtaskCategory->demand_view_success as $demandViewSuccess): ?>
            <tr>
                <td><?= h($demandViewSuccess->contemporary_task_id) ?></td>
                <td><?= h($demandViewSuccess->subtask_id) ?></td>
                <td><?= h($demandViewSuccess->subtask_starting_demand) ?></td>
                <td><?= h($demandViewSuccess->subtask_success_count) ?></td>
                <td><?= h($demandViewSuccess->subtask_task_period_demand) ?></td>
                <td><?= h($demandViewSuccess->subtask_task_id) ?></td>
                <td><?= h($demandViewSuccess->subtask_super_id) ?></td>
                <td><?= h($demandViewSuccess->subtask_name) ?></td>
                <td><?= h($demandViewSuccess->subtask_category_id) ?></td>
                <td><?= h($demandViewSuccess->subtask_base_value) ?></td>
                <td><?= h($demandViewSuccess->subtask_max_value) ?></td>
                <td><?= h($demandViewSuccess->subtask_inflation_rate) ?></td>
                <td><?= h($demandViewSuccess->subtask_demand_cutoff) ?></td>
                <td><?= h($demandViewSuccess->subtask_description) ?></td>
                <td><?= h($demandViewSuccess->subtask_url) ?></td>
                <td><?= h($demandViewSuccess->subtask_accumulative) ?></td>
                <td><?= h($demandViewSuccess->subtask_owner_participant_id) ?></td>
                <td><?= h($demandViewSuccess->subtask_dividend_rate) ?></td>
                <td><?= h($demandViewSuccess->subtask_category_name) ?></td>
                <td><?= h($demandViewSuccess->subtask_category_class) ?></td>
                <td><?= h($demandViewSuccess->subtask_category_description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DemandViewSuccess', 'action' => 'view', $demandViewSuccess->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DemandViewSuccess', 'action' => 'edit', $demandViewSuccess->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DemandViewSuccess', 'action' => 'delete', $demandViewSuccess->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandViewSuccess->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Demand View Success Contemporary Demand') ?></h4>
        <?php if (!empty($subtaskCategory->demand_view_success_contemporary_demand)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Current Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->demand_view_success_contemporary_demand as $demandViewSuccessContemporaryDemand): ?>
            <tr>
                <td><?= h($demandViewSuccessContemporaryDemand->current_task_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->contemporary_task_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_starting_demand) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_success_count) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_task_period_demand) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_task_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_super_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_name) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_category_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_base_value) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_max_value) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_inflation_rate) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_demand_cutoff) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_description) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_url) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_accumulative) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_owner_participant_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_dividend_rate) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_category_name) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_category_class) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->subtask_category_description) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemand->contemporary_demand) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DemandViewSuccessContemporaryDemand', 'action' => 'view', $demandViewSuccessContemporaryDemand->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DemandViewSuccessContemporaryDemand', 'action' => 'edit', $demandViewSuccessContemporaryDemand->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DemandViewSuccessContemporaryDemand', 'action' => 'delete', $demandViewSuccessContemporaryDemand->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandViewSuccessContemporaryDemand->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Demand View Success Contemporary Demand Positive') ?></h4>
        <?php if (!empty($subtaskCategory->demand_view_success_contemporary_demand_positive)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Current Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->demand_view_success_contemporary_demand_positive as $demandViewSuccessContemporaryDemandPositive): ?>
            <tr>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->current_task_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->contemporary_task_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_starting_demand) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_success_count) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_task_period_demand) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_task_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_super_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_name) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_category_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_base_value) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_max_value) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_inflation_rate) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_demand_cutoff) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_description) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_url) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_accumulative) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_owner_participant_id) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_dividend_rate) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_category_name) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_category_class) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->subtask_category_description) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->contemporary_demand) ?></td>
                <td><?= h($demandViewSuccessContemporaryDemandPositive->contemporary_demand_positive) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DemandViewSuccessContemporaryDemandPositive', 'action' => 'view', $demandViewSuccessContemporaryDemandPositive->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DemandViewSuccessContemporaryDemandPositive', 'action' => 'edit', $demandViewSuccessContemporaryDemandPositive->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DemandViewSuccessContemporaryDemandPositive', 'action' => 'delete', $demandViewSuccessContemporaryDemandPositive->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandViewSuccessContemporaryDemandPositive->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Demand View Uncomplete Contemporary Demand') ?></h4>
        <?php if (!empty($subtaskCategory->demand_view_uncomplete_contemporary_demand)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Current Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->demand_view_uncomplete_contemporary_demand as $demandViewUncompleteContemporaryDemand): ?>
            <tr>
                <td><?= h($demandViewUncompleteContemporaryDemand->current_task_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->contemporary_task_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_starting_demand) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_success_count) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_task_period_demand) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_task_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_super_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_name) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_category_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_base_value) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_max_value) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_inflation_rate) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_demand_cutoff) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_description) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_url) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_accumulative) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_owner_participant_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_dividend_rate) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_category_name) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_category_class) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->subtask_category_description) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemand->contemporary_demand) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DemandViewUncompleteContemporaryDemand', 'action' => 'view', $demandViewUncompleteContemporaryDemand->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DemandViewUncompleteContemporaryDemand', 'action' => 'edit', $demandViewUncompleteContemporaryDemand->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DemandViewUncompleteContemporaryDemand', 'action' => 'delete', $demandViewUncompleteContemporaryDemand->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandViewUncompleteContemporaryDemand->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Demand View Uncomplete Contemporary Demand Positive') ?></h4>
        <?php if (!empty($subtaskCategory->demand_view_uncomplete_contemporary_demand_positive)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Current Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Starting Demand') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Subtask Task Period Demand') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
                <th scope="col"><?= __('Subtask Super Id') ?></th>
                <th scope="col"><?= __('Subtask Name') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Base Value') ?></th>
                <th scope="col"><?= __('Subtask Max Value') ?></th>
                <th scope="col"><?= __('Subtask Inflation Rate') ?></th>
                <th scope="col"><?= __('Subtask Demand Cutoff') ?></th>
                <th scope="col"><?= __('Subtask Description') ?></th>
                <th scope="col"><?= __('Subtask Url') ?></th>
                <th scope="col"><?= __('Subtask Accumulative') ?></th>
                <th scope="col"><?= __('Subtask Owner Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->demand_view_uncomplete_contemporary_demand_positive as $demandViewUncompleteContemporaryDemandPositive): ?>
            <tr>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->current_task_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->contemporary_task_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_starting_demand) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_success_count) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_task_period_demand) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_task_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_super_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_name) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_category_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_base_value) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_max_value) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_inflation_rate) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_demand_cutoff) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_description) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_url) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_accumulative) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_owner_participant_id) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_dividend_rate) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_category_name) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_category_class) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->subtask_category_description) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->contemporary_demand) ?></td>
                <td><?= h($demandViewUncompleteContemporaryDemandPositive->contemporary_demand_positive) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DemandViewUncompleteContemporaryDemandPositive', 'action' => 'view', $demandViewUncompleteContemporaryDemandPositive->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DemandViewUncompleteContemporaryDemandPositive', 'action' => 'edit', $demandViewUncompleteContemporaryDemandPositive->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DemandViewUncompleteContemporaryDemandPositive', 'action' => 'delete', $demandViewUncompleteContemporaryDemandPositive->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandViewUncompleteContemporaryDemandPositive->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Subtasks') ?></h4>
        <?php if (!empty($subtaskCategory->subtasks)): ?>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->subtasks as $subtasks): ?>
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
        <?php if (!empty($subtaskCategory->successful_subtask)): ?>
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
            <?php foreach ($subtaskCategory->successful_subtask as $successfulSubtask): ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtask', 'action' => 'view', $successfulSubtask->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtask', 'action' => 'edit', $successfulSubtask->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtask', 'action' => 'delete', $successfulSubtask->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtask->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Category') ?></h4>
        <?php if (!empty($subtaskCategory->successful_subtask_category)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Subtask Category Count') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->successful_subtask_category as $successfulSubtaskCategory): ?>
            <tr>
                <td><?= h($successfulSubtaskCategory->participant_id) ?></td>
                <td><?= h($successfulSubtaskCategory->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskCategory->subtask_category_name) ?></td>
                <td><?= h($successfulSubtaskCategory->subtask_category_class) ?></td>
                <td><?= h($successfulSubtaskCategory->subtask_category_description) ?></td>
                <td><?= h($successfulSubtaskCategory->subtask_category_count) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'view', $successfulSubtaskCategory->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'edit', $successfulSubtaskCategory->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'delete', $successfulSubtaskCategory->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskCategory->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Category Complete Final') ?></h4>
        <?php if (!empty($subtaskCategory->successful_subtask_category_complete_final)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Category Count Sum') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->successful_subtask_category_complete_final as $successfulSubtaskCategoryCompleteFinal): ?>
            <tr>
                <td><?= h($successfulSubtaskCategoryCompleteFinal->participant_id) ?></td>
                <td><?= h($successfulSubtaskCategoryCompleteFinal->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskCategoryCompleteFinal->subtask_category_count_sum) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'view', $successfulSubtaskCategoryCompleteFinal->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'edit', $successfulSubtaskCategoryCompleteFinal->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'delete', $successfulSubtaskCategoryCompleteFinal->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskCategoryCompleteFinal->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Category Complete Inner') ?></h4>
        <?php if (!empty($subtaskCategory->successful_subtask_category_complete_inner)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Category Count') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->successful_subtask_category_complete_inner as $successfulSubtaskCategoryCompleteInner): ?>
            <tr>
                <td><?= h($successfulSubtaskCategoryCompleteInner->participant_id) ?></td>
                <td><?= h($successfulSubtaskCategoryCompleteInner->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskCategoryCompleteInner->subtask_category_count) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'view', $successfulSubtaskCategoryCompleteInner->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'edit', $successfulSubtaskCategoryCompleteInner->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'delete', $successfulSubtaskCategoryCompleteInner->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskCategoryCompleteInner->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Dividend Scores') ?></h4>
        <?php if (!empty($subtaskCategory->successful_subtask_dividend_scores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Dreamer Id') ?></th>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <th scope="col"><?= __('Dream Url') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Start') ?></th>
                <th scope="col"><?= __('Contemporary Task Expiration') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
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
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col"><?= __('Inner Function') ?></th>
                <th scope="col"><?= __('External Function') ?></th>
                <th scope="col"><?= __('Final Value') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col"><?= __('Subtask Share Holder Count') ?></th>
                <th scope="col"><?= __('Final Dividend Value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->successful_subtask_dividend_scores as $successfulSubtaskDividendScores): ?>
            <tr>
                <td><?= h($successfulSubtaskDividendScores->participant_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->dreamer_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->dream_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->dream_type_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->dream_timestamp) ?></td>
                <td><?= h($successfulSubtaskDividendScores->dream_url) ?></td>
                <td><?= h($successfulSubtaskDividendScores->contemporary_task_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->contemporary_task_start) ?></td>
                <td><?= h($successfulSubtaskDividendScores->contemporary_task_expiration) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_task_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_super_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_name) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_base_value) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_max_value) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_starting_demand) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_inflation_rate) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_demand_cutoff) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_task_period_demand) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_description) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_url) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_accumulative) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_owner_participant_id) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_category_name) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_category_class) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_category_description) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_success_count) ?></td>
                <td><?= h($successfulSubtaskDividendScores->contemporary_demand) ?></td>
                <td><?= h($successfulSubtaskDividendScores->contemporary_demand_positive) ?></td>
                <td><?= h($successfulSubtaskDividendScores->inner_function) ?></td>
                <td><?= h($successfulSubtaskDividendScores->external_function) ?></td>
                <td><?= h($successfulSubtaskDividendScores->final_value) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_dividend_rate) ?></td>
                <td><?= h($successfulSubtaskDividendScores->subtask_share_holder_count) ?></td>
                <td><?= h($successfulSubtaskDividendScores->final_dividend_value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'view', $successfulSubtaskDividendScores->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'edit', $successfulSubtaskDividendScores->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'delete', $successfulSubtaskDividendScores->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskDividendScores->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task') ?></h4>
        <?php if (!empty($subtaskCategory->successful_subtask_task)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <th scope="col"><?= __('Dream Url') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Start') ?></th>
                <th scope="col"><?= __('Contemporary Task Expiration') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
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
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->successful_subtask_task as $successfulSubtaskTask): ?>
            <tr>
                <td><?= h($successfulSubtaskTask->participant_id) ?></td>
                <td><?= h($successfulSubtaskTask->dream_id) ?></td>
                <td><?= h($successfulSubtaskTask->dream_type_id) ?></td>
                <td><?= h($successfulSubtaskTask->dream_timestamp) ?></td>
                <td><?= h($successfulSubtaskTask->dream_url) ?></td>
                <td><?= h($successfulSubtaskTask->contemporary_task_id) ?></td>
                <td><?= h($successfulSubtaskTask->contemporary_task_start) ?></td>
                <td><?= h($successfulSubtaskTask->contemporary_task_expiration) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_id) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_task_id) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_super_id) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_name) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_base_value) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_max_value) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_starting_demand) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_inflation_rate) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_demand_cutoff) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_task_period_demand) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_description) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_url) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_accumulative) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_owner_participant_id) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_category_name) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_category_class) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_category_description) ?></td>
                <td><?= h($successfulSubtaskTask->subtask_dividend_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'view', $successfulSubtaskTask->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'edit', $successfulSubtaskTask->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'delete', $successfulSubtaskTask->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTask->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task With Calculated Scoring') ?></h4>
        <?php if (!empty($subtaskCategory->successful_subtask_task_with_calculated_scoring)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <th scope="col"><?= __('Dream Url') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Start') ?></th>
                <th scope="col"><?= __('Contemporary Task Expiration') ?></th>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Subtask Task Id') ?></th>
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
                <th scope="col"><?= __('Subtask Category Name') ?></th>
                <th scope="col"><?= __('Subtask Category Class') ?></th>
                <th scope="col"><?= __('Subtask Category Description') ?></th>
                <th scope="col"><?= __('Subtask Success Count') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <th scope="col"><?= __('Contemporary Demand Positive') ?></th>
                <th scope="col"><?= __('Inner Function') ?></th>
                <th scope="col"><?= __('External Function') ?></th>
                <th scope="col"><?= __('Final Value') ?></th>
                <th scope="col"><?= __('Subtask Dividend Rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subtaskCategory->successful_subtask_task_with_calculated_scoring as $successfulSubtaskTaskWithCalculatedScoring): ?>
            <tr>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->participant_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_type_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_timestamp) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->dream_url) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_start) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_task_expiration) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_task_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_super_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_name) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_base_value) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_max_value) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_starting_demand) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_inflation_rate) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_demand_cutoff) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_task_period_demand) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_description) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_url) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_accumulative) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_owner_participant_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_name) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_class) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_description) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_success_count) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_demand) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_demand_positive) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->inner_function) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->external_function) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->final_value) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_dividend_rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'view', $successfulSubtaskTaskWithCalculatedScoring->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedScoring->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedScoring->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedScoring->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
-->
</div>
<?php echo $this->Html->css('emoji.css',['block'=>true]); ?>
<?php echo $this->Html->css('subtask_color.css',['block'=>true]); ?>
