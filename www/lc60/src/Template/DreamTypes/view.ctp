<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\DreamType $dreamType
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dream Type'), ['action' => 'edit', $dreamType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dream Type'), ['action' => 'delete', $dreamType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dreamType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dream Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream Type'), ['action' => 'add']) ?> </li>
        <!--
        <li><?= $this->Html->link(__('List Dream Type Id'), ['controller' => 'DreamTypeId', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream Type Id'), ['controller' => 'DreamTypeId', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Scores'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Score'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'add']) ?> </li>
        -->
    </ul>
</nav>
<div class="dreamTypes view large-9 medium-8 columns content">
    <h3><?= h($dreamType->dream_type_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dream Type Name') ?></th>
            <td><?= h($dreamType->dream_type_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream Type Short Name') ?></th>
            <td><?= h($dreamType->dream_type_short_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dreamType->id) ?></td>
        </tr>
    </table>
    
    <?php if (count($dreamType->dream_with_type_participant) > 1) : ?>
    <div class="plot chart_view jqplot-cursor-legend-swatch" id="score_bar_line" style="margin-top:20px; margin-left:10px; width:90%; height:400px;">
    </div>
    <!--<h3><span class="chart_info" id="score_bar_line_info">Hover over line for more precision.</span></h3>-->
    <?php endif; ?>
    
        <div class="related">
        <h4><?= __('Related Dreams') ?></h4>
        <?php    
	   $comma = '';
	   $s1data = '';
	   $s2data = '';
	?>
        <?php if (!empty($dreamType->dream_with_type_participant)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
		<th scope="col"><?= __('Contemporary Task') ?></th>
                <th scope="col"><?= __('Participant') ?></th>		
                <th scope="col"><?= __('Date') ?></th>
                <!--<th scope="col"><?= __('Type') ?></th>-->
                <!--<th scope="col"><?= __('Dream Timestamp') ?></th>-->
                <th scope="col"><?= __('Dream Value') ?></th>
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
            <?php $subtotal = 0;
		  $lastTaskId = null;
		  $lastTaskTitle = null;
		  $subtaskTotalValue = 0;
            ?>
            <?php foreach ($dreamType->dream_with_type_participant as $dreams): ?>
            <?php  if ($lastTaskId != ($dreams->task_id)): ?>
            <?php  if ($lastTaskTitle != null) : ?>
            <tr>
	      <td colspan="3"><?= h('Subtotal for ')?><?= $this->Html->link($lastTaskTitle, ['controller' => 'Tasks', 'action' => 'view', $lastTaskId])  ?></td>
	      <td><?= h($subtotal) ?></td>
	      <?php $subtaskTotalValue += $subtotal;
	      ?>
            </tr>
            <?php  endif; ?>
            <?php   $subtotal= 0;
		    endif;
            ?>
            <?php  $subtotal+= ($dreams->final_value_truncate);
		   $lastTaskId = ($dreams->task_id);
		   $lastTaskTitle = ($dreams->task_title);
            ?>
            <tr>
	        <td><?= $this->Html->link($dreams->task_title, ['controller' => 'Tasks', 'action' => 'view', $dreams->task_id])  ?></td>
	        <td><?= $this->Html->link($dreams->participant_name, ['controller' => 'Participants', 'action' => 'view', $dreams->participant_id]) ?></td>
                <td><?= $this->Html->link($dreams->dream_timestamp, ['controller' => 'Dreams', 'action' => 'view', $dreams->dream_id])  ?></td>
                <!--<td><?= $this->Html->link($dreams->dream_type_name, ['controller' => 'DreamTypes', 'action' => 'view', $dreams->dream_type_id])  ?></td>-->
                <!--<td><?= h($dreams->dream_timestamp) ?></td>-->
                <td><?= $this->Html->link($dreams->final_value_truncate, ['controller' => 'Dreams', 'action' => 'view', $dreams->dream_id]) ?></td>
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dreams', 'action' => 'view', $dreams->dream_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dreams', 'action' => 'edit', $dreams->dream_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dreams', 'action' => 'delete', $dreams->dream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dreams->dream_id)]) ?>
                </td>-->
            </tr>
            <?php
	      $date = ($dreams->dream_timestamp);
	      $value = ($dreams->final_value_truncate);
	      $s1data = $s1data."${comma}[\"${date}\",${value}]";
	      $dreamValue = ($dreamType->subtask_base_value);
	      $s2data = $s2data."${comma}[\"${date}\",${dreamValue}]";
	      $comma = ',';
            ?>            
            <?php endforeach; ?>
            <tr>
	      <td colspan="3"><?= h('Subtotal for ')?><?= $this->Html->link($dreams->task_title, ['controller' => 'Tasks', 'action' => 'view', $dreams->task_id])  ?></td>
	      <td><?= h($subtotal) ?></td>	      
	      <?php
		    $subtaskTotalValue += $subtotal;
	      ?>
            </tr>             
            <tr>
	      <td colspan="3"><?= h('Total') ?></td>
	      <td><?= h($subtaskTotalValue) ?></td>
            </tr>
        </table>
        <?php endif; ?>
	</div>

    
    
        <div class="related">
        <h4><?= __('Related Successful Subtasks') ?></h4>
        <?php if (!empty($dreamType->successful_subtask_task_with_calculated_scoring_participant)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>		
		<th scope="col"><?= __('Contemporary Task') ?></th>
		<!--<th scope="col"><?= __('Task') ?></th>-->
		<th scope="col"><?= __('Subtask') ?></th>
                <th scope="col"><?= __('Participant') ?></th>		
                <th scope="col"><?= __('Date') ?></th>
                <!--<th scope="col"><?= __('Type') ?></th>-->
                <!--<th scope="col"><?= __('Dream Timestamp') ?></th>-->
                <th scope="col"><?= __('Dream Value') ?></th>
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
            <?php $subtotal = 0;
		  $lastTaskId = null;
		  $lastTaskTitle = null;
		  $subtaskTotalValue = 0;
            ?>
            <?php foreach ($dreamType->successful_subtask_task_with_calculated_scoring_participant as $subtasks): ?>
            <?php  if ($lastTaskId != ($subtasks->contemporary_task_id)): ?>
            <?php  if ($lastTaskTitle != null) : ?>
            <tr>
	      <td colspan="4"><?= h('Subtotal for ')?><?= $this->Html->link($lastTaskTitle, ['controller' => 'Tasks', 'action' => 'view', $lastTaskId])  ?></td>
	      <td><?= h($subtotal) ?></td>
	      <?php $subtaskTotalValue += $subtotal;
	      ?>
            </tr>
            <?php  endif; ?>
            <?php   $subtotal= 0;
		    endif;
            ?>
            <?php  $subtotal+= ($subtasks->final_value_truncate);
		   $lastTaskId = ($subtasks->contemporary_task_id);
		   $lastTaskTitle = ($subtasks->task_title);
            ?>
            <tr>
	        <td><?= $this->Html->link($subtasks->task_title, ['controller' => 'Tasks', 'action' => 'view', $subtasks->contemporary_task_id])  ?></td>	        
	        <td><?= $this->Html->link($subtasks->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtasks->subtask_id])  ?></td>
	        <td><?= $this->Html->link($subtasks->participant_name, ['controller' => 'Participants', 'action' => 'view', $subtasks->participant_id]) ?></td>
                <td><?= $this->Html->link($subtasks->dream_timestamp, ['controller' => 'Dreams', 'action' => 'view', $subtasks->dream_id])  ?></td>
                <!--<td><?= $this->Html->link($subtasks->dream_type_name, ['controller' => 'DreamTypes', 'action' => 'view', $subtasks->dream_type_id])  ?></td>-->
                <!--<td><?= h($subtasks->dream_timestamp) ?></td>-->
                <td><?= $this->Html->link($subtasks->final_value_truncate, ['controller' => 'Dreams', 'action' => 'view', $subtasks->dream_id]) ?></td>
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dreams', 'action' => 'view', $subtasks->dream_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dreams', 'action' => 'edit', $subtasks->dream_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dreams', 'action' => 'delete', $subtasks->dream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtasks->dream_id)]) ?>
                </td>-->
            </tr>
            <?php endforeach; ?>
            <tr>
	      <td colspan="4"><?= h('Subtotal for ')?><?= $this->Html->link($subtasks->task_title, ['controller' => 'Tasks', 'action' => 'view', $subtasks->contemporary_task_id])  ?></td>
	      <td><?= h($subtotal) ?></td>
	      <?php
		    $subtaskTotalValue += $subtotal;
	      ?>
            </tr>             
            <tr>
	      <td colspan="4"><?= h('Total') ?></td>
	      <td><?= h($subtaskTotalValue) ?></td>
            </tr>
        </table>
        <?php endif; ?>
    </div>

    <!--
    
    
    
    
    <div class="related">
        <h4><?= __('Related Dream Type Id') ?></h4>
        <?php if (!empty($dreamType->dream_type_id)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Dream Id') ?></th>
                <th scope="col"><?= __('Dream Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dreamType->dream_type_id as $dreamTypeId): ?>
            <tr>
                <td><?= h($dreamTypeId->dream_id) ?></td>
                <td><?= h($dreamTypeId->dream_type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DreamTypeId', 'action' => 'view', $dreamTypeId->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DreamTypeId', 'action' => 'edit', $dreamTypeId->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DreamTypeId', 'action' => 'delete', $dreamTypeId->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dreamTypeId->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask') ?></h4>
        <?php if (!empty($dreamType->successful_subtask)): ?>
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
            <?php foreach ($dreamType->successful_subtask as $successfulSubtask): ?>
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
        <h4><?= __('Related Successful Subtask Dividend Scores') ?></h4>
        <?php if (!empty($dreamType->successful_subtask_dividend_scores)): ?>
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
            <?php foreach ($dreamType->successful_subtask_dividend_scores as $successfulSubtaskDividendScores): ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'view', $successfulSubtaskDividendScores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'edit', $successfulSubtaskDividendScores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'delete', $successfulSubtaskDividendScores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskDividendScores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task') ?></h4>
        <?php if (!empty($dreamType->successful_subtask_task)): ?>
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
            <?php foreach ($dreamType->successful_subtask_task as $successfulSubtaskTask): ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'view', $successfulSubtaskTask->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'edit', $successfulSubtaskTask->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'delete', $successfulSubtaskTask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTask->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task With Calculated Scoring') ?></h4>
        <?php if (!empty($dreamType->successful_subtask_task_with_calculated_scoring)): ?>
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
            <?php foreach ($dreamType->successful_subtask_task_with_calculated_scoring as $successfulSubtaskTaskWithCalculatedScoring): ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'view', $successfulSubtaskTaskWithCalculatedScoring->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedScoring->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedScoring->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedScoring->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    -->
</div>

<?php if (count($dreamType->dream_with_type_participant) > 1) : ?>
  <?php echo '<script class="code" type="text/javascript">'; ?>
$(document).ready(function () {
    $.jqplot._noToImageButton = true;
    var acc = [<?= $s1data ?>];
 
    var dream = [<?= $s2data ?>];
 
    var plot1 = $.jqplot("score_bar_line", [acc, dream], {
        seriesColors: ["rgba(78, 135, 194, 0.7)", "rgb(211, 235, 59)"],
        title: '<?= ('Value Evolution for "'.($dreamType->dream_type_name).'" with subtasks') ?>',
        highlighter: {
            show: true,
            sizeAdjust: 1,
            tooltipOffset: 1
        },
        grid: {
            background: 'rgba(57,57,57,0.0)',
            drawBorder: false,
            shadow: false,
            gridLineColor: '#808080',
            gridLineWidth: 2
        },
        legend: {
	    renderer: $.jqplot.EnhancedLegendRenderer,
            show: true,
            sizeAdjust: 0.5,
            placement: 'insideGrid',
            location: 'nw',
            showSwatches: true,
        },
        seriesDefaults: {
            rendererOptions: {
                smooth: true,
                animation: {
                    show: true
                }
            },
            showMarker: false
        },
        series: [
            {
                fill: true,
                label: 'Accumulated Subtask Value'
            },
            {
                label: 'Dream Type Value'
            }
        ],
        axesDefaults: {
            rendererOptions: {
                baselineWidth: 1.5,
                baselineColor: '#444444',
                drawBaseline: false
            }
        },
        axes: {
            xaxis: {
                renderer: $.jqplot.DateAxisRenderer,
                tickRenderer: $.jqplot.CanvasAxisTickRenderer,
                tickOptions: {
                    formatString: "%b %e",
                    angle: 270,
                    textColor: '#202020'
                },
                tickInterval: "1 day",
                drawMajorGridlines: false
            },
            yaxis: {
                renderer: $.jqplot.LogAxisRenderer,
                pad: 0,
                rendererOptions: {
                    minorTicks: 1
                },
                tickOptions: {
                    formatString: "%4.2f points",
                    showMark: false
                },
                min: 0,
                pad: 2
            }
        }
    });
});
   </script>


<?php echo $this->Html->css('jqplot/jquery_jqplot.css',['block'=>true]); ?>
<?php echo $this->Html->css('http://www.jqplot.com/examples/examples.css',['block'=>true]); ?>
<?php echo $this->Html->script('jqplot/excanvas.js',['block'=>'notie', 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/jquery_min.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/jquery_jqplot.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_barRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_pointLabels.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_cursor.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_highlighter.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_dateAxisRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_canvasAxisTickRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_canvasAxisLabelRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_canvasTextRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_enhancedLegendRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->css('emoji.css',['block'=>true]); ?>

<?php  endif; ?>
