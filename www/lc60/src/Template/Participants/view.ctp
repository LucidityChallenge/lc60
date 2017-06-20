<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Participant $participant
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Participant'), ['action' => 'edit', $participant->id]) ?> </li>
        <!--<li><?= $this->Form->postLink(__('Delete Participant'), ['action' => 'delete', $participant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participant->id)]) ?> </li>-->
        <li><?= $this->Html->link(__('List Participants'), ['action' => 'index']) ?> </li>
        <!--<li><?= $this->Html->link(__('New Participant'), ['action' => 'add']) ?> </li>-->
        <li><?= $this->Html->link(__('List Dreams'), ['controller' => 'Dreams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream'), ['controller' => 'Dreams', 'action' => 'add']) ?> </li>
        <!--
        <li><?= $this->Html->link(__('List Score View Complete'), ['controller' => 'ScoreViewComplete', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score View Complete'), ['controller' => 'ScoreViewComplete', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Score View Complete Participant'), ['controller' => 'ScoreViewCompleteParticipant', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Score View Complete Participant'), ['controller' => 'ScoreViewCompleteParticipant', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Share Holder'), ['controller' => 'SubtaskShareHolder', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Share Holder'), ['controller' => 'SubtaskShareHolder', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Shares'), ['controller' => 'SubtaskShares', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Share'), ['controller' => 'SubtaskShares', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Category'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Category'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Category Complete Final'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Category Complete Final'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Category Complete Final Minimum'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinalMinimum', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Category Complete Final Minimum'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinalMinimum', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Category Complete Inner'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Category Complete Inner'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Calculated Subtotal'), ['controller' => 'SuccessfulSubtaskDividendCalculatedSubtotal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Calculated Subtotal'), ['controller' => 'SuccessfulSubtaskDividendCalculatedSubtotal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Calculated Total'), ['controller' => 'SuccessfulSubtaskDividendCalculatedTotal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Calculated Total'), ['controller' => 'SuccessfulSubtaskDividendCalculatedTotal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Dividend Scores'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Dividend Score'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Scoring'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Subtotal'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedSubtotal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Subtotal'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedSubtotal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Total'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotal', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Total'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotal', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Total Complete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalComplete', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Total Complete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalComplete', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask Task With Calculated Total Participant'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalParticipant', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask Task With Calculated Total Participant'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalParticipant', 'action' => 'add']) ?> </li>
        -->
    </ul>
</nav>
<div class="participants view large-9 medium-8 columns content">
    <h2><?= h($participant->id .': '. $participant->participant_name) ?></h2>
    <?php if (!empty($participant->score_view_complete)): ?>
    <?php $scoreViewComplete = reset($participant->score_view_complete); ?> 
    <?php $finalScore = (intval(100*$scoreViewComplete->final_value_total_with_dividends)/100);
	  $subtaskTotalValue = (intval(100*$scoreViewComplete->final_value_total)/100);
    ?>
    <table class="vertical-table">
    <!--
        <tr>
            <th scope="row"><?= __('Participant Name') ?></th>
            <td><?= h($participant->participant_name) ?></td>
        </tr>-->
        <tr>
            <th scope="row"><?= __('Personal Goal') ?></th>
            <td><?= h($participant->participant_goal) ?></td>
        </tr>
        <?php if ($participant->participant_dj_url != null) : ?>
        <tr>
            <th scope="row"><?= __('Dream Journal') ?></th>
            <td><?= $this->Html->link($participant->participant_dj_url,$participant->participant_dj_url) ?></td>
        </tr>
        <?php endif; ?>
        <tr>
            <th scope="row"><?= __('Joining Post') ?></th>
            <td><?= $this->Html->link($participant->participant_join_url,$participant->participant_join_url) ?></td>
        </tr>
        <!--
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($participant->id) ?></td>
        </tr>
        -->
        <tr>
            <th scope="row"><?= __('Final Score') ?></th>
            <td><span class="final_score"><?= h($finalScore) ?></span></td>
        </tr>        
    </table>
    <h4>Score Totals</h4>
    <div class="related">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Participant Id') ?></th>-->
                <!--<th scope="col"><?= __('Subtask Success Count Sum Total') ?></th>-->
                <th scope="col"><?= __('Successful Subtasks') ?></th>
                <th scope="col"><?= __('Average Value per Subtask') ?></th>
                <th scope="col"><?= __('Total Subtask Value') ?></th>
                <!--<th scope="col"><?= __('Dividend Count Sum Total') ?></th>-->
                <th scope="col"><?= __('Successes from Shares') ?></th>
                <th scope="col"><?= __('Average Dividend per Share') ?></th>
                <th scope="col"><?= __('Total Dividend Value') ?></th>
                <th scope="col"><?= __('Final Value with Dividends') ?></th>
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
<!-- for moved up -->
            <tr>
                <!--<td><?= h($scoreViewComplete->participant_id) ?></td>-->
                <!--<td><?= h($scoreViewComplete->subtask_success_count_sum_total) ?></td>-->
                <td><?= h($scoreViewComplete->subtask_success_count_participant_total) ?></td>
                <td><?= $this->Number->precision((intval(100*$scoreViewComplete->final_value_avg)/100),2) ?></td>
                <td><?= $this->Number->precision(($subtaskTotalValue),2) ?></td>
                <!--<td><?= h($scoreViewComplete->dividend_count_sum_total) ?></td>-->
                <td><?= h($scoreViewComplete->dividend_count_participant_total) ?></td>
		<td><?= $this->Number->precision(intval(100*$scoreViewComplete->final_dividend_value_avg)/100,2) ?></td>
                <td><?= $this->Number->precision(($scoreViewComplete->final_dividend_value_total),2) ?></td>
		<td><?= $this->Number->precision(($finalScore),2) ?></td>                
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ScoreViewComplete', 'action' => 'view', $scoreViewComplete->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ScoreViewComplete', 'action' => 'edit', $scoreViewComplete->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ScoreViewComplete', 'action' => 'delete', $scoreViewComplete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scoreViewComplete->id)]) ?>
                </td>-->
            </tr>
        </table>
        <?php endif; ?>
    </div>
    <h4><?= __('Dreams of '.$participant->participant_name) ?></h4>
    <?php if (count($participant->dream_with_type) > 1) : ?>
    <div class="plot chart_view jqplot-cursor-legend-swatch" id="score_bar_line" style="margin-top:20px; margin-left:10px; width:90%; height:400px;">
    </div>
    <!--<h3><span class="chart_info" id="score_bar_line_info">Hover over line for more precision.</span></h3>-->
    <?php endif; ?>
    <div class="related">
        <?php    
	   $comma = '';
	   $s1data = '';
	   $s2data = '';
	   $accValue = 0;
	   if (!empty($participant->dream_with_type)): 
        ?>
        <br/>
        <table cellpadding="0" cellspacing="0">
            <tr>
		<th scope="col"><?= __('Contemporary Task') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <!--<th scope="col"><?= __('Participant') ?></th>-->
                <th scope="col"><?= __('Type') ?></th>
                <!--<th scope="col"><?= __('Dream Timestamp') ?></th>-->
                <th scope="col"><?= __('Dream Value') ?></th>
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
            <?php $subtotal = 0;
		  $lastTaskId = null;
		  $lastTaskTitle = null;
            ?>
            <?php foreach ($participant->dream_with_type as $dreams): ?>
            <?php  if ($lastTaskId != ($dreams->task_id)): ?>
            <?php  if ($lastTaskTitle != null) : ?>
            <tr class="subtotal">
	      <td colspan="3"><?= h('Subtotal for ')?><?= $this->Html->link($lastTaskTitle, ['controller' => 'Tasks', 'action' => 'view', $lastTaskId])  ?></td>
	      <td><?= $this->Number->precision($subtotal,2) ?></td>
            </tr>  
            <?php  endif; ?>
            <?php $subtotal= 0;  endif; ?>
            <?php  $subtotal+= ($dreams->final_value_truncate);
		   $lastTaskId = ($dreams->task_id);
		   $lastTaskTitle = ($dreams->task_title);
            ?>            
            <tr>
	        <td><?= $this->Html->link($dreams->task_title, ['controller' => 'Tasks', 'action' => 'view', $dreams->task_id])  ?></td>
                <td><?= $this->Html->link($dreams->dream_timestamp, ['controller' => 'Dreams', 'action' => 'view', $dreams->dream_id])  ?></td>
                <!--<td><?= $this->Html->link($participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $participant->id]) ?></td>-->
                <td><?= $this->Html->link($dreams->dream_type_name, ['controller' => 'DreamTypes', 'action' => 'view', $dreams->dream_type_id])  ?></td>
                <!--<td><?= h($dreams->dream_timestamp) ?></td>-->
                <td><?= $this->Html->link($this->Number->precision($dreams->final_value_truncate,2), ['controller' => 'Dreams', 'action' => 'view', $dreams->dream_id]) ?></td>
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dreams', 'action' => 'view', $dreams->dream_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dreams', 'action' => 'edit', $dreams->dream_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dreams', 'action' => 'delete', $dreams->dream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dreams->dream_id)]) ?>
                </td>-->
            </tr>      
            <?php
	      $date = $dreams->dream_timestamp;
	      $value = $dreams->final_value_truncate;
	      $s1data = $s1data."${comma}[\"${date}\",${value}]";
	      $accValue += $value;
	      $s2data = $s2data."${comma}[\"${date}\",${accValue}]";
	      $comma = ',';
            ?>
            <?php endforeach; ?>
            <tr class="subtotal">
	      <td colspan="3"><?= h('Subtotal for ')?><?= $this->Html->link($dreams->task_title, ['controller' => 'Tasks', 'action' => 'view', $dreams->task_id])  ?></td>
	      <td><?= $this->Number->precision($subtotal,2) ?></td>
            </tr>             
            <tr class="total">
	      <td colspan="3"><?= h('Total') ?></td>
	      <td><?= $this->Number->precision($subtaskTotalValue,2) ?></td>
            </tr>
        </table>
        <?php endif; ?>
    </div>   
    
    
<h4><?= __('Subtasks Completed by '.($participant->participant_name)) ?></h4>
    <div class="related">
        <?php if (!empty($participant->successful_subtask_task_with_calculated_scoring)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Participant Id') ?></th>-->
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
            <?php foreach ($participant->successful_subtask_task_with_calculated_scoring as $successfulSubtaskTaskWithCalculatedScoring): ?>
            <tr>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->participant_id) ?></td>-->
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
    
    <h4><?= __('Shares Owned by '.($participant->participant_name)) ?></h4>
    <div class="related">
    <!--
        <?php if (!empty($participant->subtask_share_holder_complete)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->subtask_share_holder_complete as $subtaskShareHolderComplete): ?>
            <tr>
                <td><?= h($subtaskShareHolderComplete->subtask_id) ?></td>
                <td><?= h($subtaskShareHolderComplete->participant_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SubtaskShareHolder', 'action' => 'view', $subtaskShareHolderComplete->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SubtaskShareHolder', 'action' => 'edit', $subtaskShareHolderComplete->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubtaskShareHolder', 'action' => 'delete', $subtaskShareHolderComplete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskShareHolderComplete->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        -->
<div class="subtaskShareHolderComplete view large-9 medium-8 columns content subtask subtask_yellow">
    <?php foreach ($participant->subtask_share_holder_complete as $subtaskShareHolderComplete): ?>
    <h3><?= $this->Html->link($subtaskShareHolderComplete->subtask_name, ['controller' => 'Subtasks', 'action' => 'view',($subtaskShareHolderComplete->subtask_id)]) ?></h3>
    <div class="subtask_picture"><?= (null != $subtaskShareHolderComplete->subtask_image) ? $this->Html->image($subtaskShareHolderComplete->subtask_image, ['alt' => (null != $subtaskShareHolderComplete->subtask_symbol) ? ('&#'.$subtaskShareHolderComplete->subtask_symbol.'; '.($subtaskShareHolderComplete->subtask_name)) : ($subtaskShareHolderComplete->subtask_name)]) :
    ((null != $subtaskShareHolderComplete->subtask_symbol) ? '&#'.$subtaskShareHolderComplete->subtask_symbol.';' : '')
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
<!--
    <div class="related">
        <h4><?= __('Related Subtask Shares') ?></h4>
        <?php if (!empty($participant->subtask_shares)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Subtask Id') ?></th>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->subtask_shares as $subtaskShares): ?>
            <tr>
                <td><?= h($subtaskShares->subtask_id) ?></td>
                <td><?= h($subtaskShares->participant_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SubtaskShares', 'action' => 'view', $subtaskShares->subtask_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SubtaskShares', 'action' => 'edit', $subtaskShares->subtask_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubtaskShares', 'action' => 'delete', $subtaskShares->subtask_id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskShares->subtask_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask') ?></h4>
        <?php if (!empty($participant->successful_subtask)): ?>
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
            <?php foreach ($participant->successful_subtask as $successfulSubtask): ?>
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
        <h4><?= __('Related Successful Subtask Category') ?></h4>
        <?php if (!empty($participant->successful_subtask_category)): ?>
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
            <?php foreach ($participant->successful_subtask_category as $successfulSubtaskCategory): ?>
            <tr>
                <td><?= h($successfulSubtaskCategory->participant_id) ?></td>
                <td><?= h($successfulSubtaskCategory->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskCategory->subtask_category_name) ?></td>
                <td><?= h($successfulSubtaskCategory->subtask_category_class) ?></td>
                <td><?= h($successfulSubtaskCategory->subtask_category_description) ?></td>
                <td><?= h($successfulSubtaskCategory->subtask_category_count) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'view', $successfulSubtaskCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'edit', $successfulSubtaskCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskCategory', 'action' => 'delete', $successfulSubtaskCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskCategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Category Complete Final') ?></h4>
        <?php if (!empty($participant->successful_subtask_category_complete_final)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Category Count Sum') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->successful_subtask_category_complete_final as $successfulSubtaskCategoryCompleteFinal): ?>
            <tr>
                <td><?= h($successfulSubtaskCategoryCompleteFinal->participant_id) ?></td>
                <td><?= h($successfulSubtaskCategoryCompleteFinal->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskCategoryCompleteFinal->subtask_category_count_sum) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'view', $successfulSubtaskCategoryCompleteFinal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'edit', $successfulSubtaskCategoryCompleteFinal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinal', 'action' => 'delete', $successfulSubtaskCategoryCompleteFinal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskCategoryCompleteFinal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Category Complete Final Minimum') ?></h4>
        <?php if (!empty($participant->successful_subtask_category_complete_final_minimum)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Category Count Sum Min') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->successful_subtask_category_complete_final_minimum as $successfulSubtaskCategoryCompleteFinalMinimum): ?>
            <tr>
                <td><?= h($successfulSubtaskCategoryCompleteFinalMinimum->participant_id) ?></td>
                <td><?= h($successfulSubtaskCategoryCompleteFinalMinimum->subtask_category_count_sum_min) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinalMinimum', 'action' => 'view', $successfulSubtaskCategoryCompleteFinalMinimum->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinalMinimum', 'action' => 'edit', $successfulSubtaskCategoryCompleteFinalMinimum->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskCategoryCompleteFinalMinimum', 'action' => 'delete', $successfulSubtaskCategoryCompleteFinalMinimum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskCategoryCompleteFinalMinimum->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Category Complete Inner') ?></h4>
        <?php if (!empty($participant->successful_subtask_category_complete_inner)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Category Id') ?></th>
                <th scope="col"><?= __('Subtask Category Count') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->successful_subtask_category_complete_inner as $successfulSubtaskCategoryCompleteInner): ?>
            <tr>
                <td><?= h($successfulSubtaskCategoryCompleteInner->participant_id) ?></td>
                <td><?= h($successfulSubtaskCategoryCompleteInner->subtask_category_id) ?></td>
                <td><?= h($successfulSubtaskCategoryCompleteInner->subtask_category_count) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'view', $successfulSubtaskCategoryCompleteInner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'edit', $successfulSubtaskCategoryCompleteInner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskCategoryCompleteInner', 'action' => 'delete', $successfulSubtaskCategoryCompleteInner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskCategoryCompleteInner->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Dividend Calculated Subtotal') ?></h4>
        <?php if (!empty($participant->successful_subtask_dividend_calculated_subtotal)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Success Count Sum Subtotal') ?></th>
                <th scope="col"><?= __('Subtask Success Count Participant Subtotal') ?></th>
                <th scope="col"><?= __('Final Dividend Value Avg') ?></th>
                <th scope="col"><?= __('Final Dividend Value Subtotal') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->successful_subtask_dividend_calculated_subtotal as $successfulSubtaskDividendCalculatedSubtotal): ?>
            <tr>
                <td><?= h($successfulSubtaskDividendCalculatedSubtotal->participant_id) ?></td>
                <td><?= h($successfulSubtaskDividendCalculatedSubtotal->contemporary_task_id) ?></td>
                <td><?= h($successfulSubtaskDividendCalculatedSubtotal->subtask_success_count_sum_subtotal) ?></td>
                <td><?= h($successfulSubtaskDividendCalculatedSubtotal->subtask_success_count_participant_subtotal) ?></td>
                <td><?= h($successfulSubtaskDividendCalculatedSubtotal->final_dividend_value_avg) ?></td>
                <td><?= h($successfulSubtaskDividendCalculatedSubtotal->final_dividend_value_subtotal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskDividendCalculatedSubtotal', 'action' => 'view', $successfulSubtaskDividendCalculatedSubtotal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskDividendCalculatedSubtotal', 'action' => 'edit', $successfulSubtaskDividendCalculatedSubtotal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskDividendCalculatedSubtotal', 'action' => 'delete', $successfulSubtaskDividendCalculatedSubtotal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskDividendCalculatedSubtotal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Dividend Calculated Total') ?></h4>
        <?php if (!empty($participant->successful_subtask_dividend_calculated_total)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Success Count Sum Total') ?></th>
                <th scope="col"><?= __('Subtask Success Count Participant Total') ?></th>
                <th scope="col"><?= __('Final Dividend Value Avg') ?></th>
                <th scope="col"><?= __('Final Dividend Value Total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->successful_subtask_dividend_calculated_total as $successfulSubtaskDividendCalculatedTotal): ?>
            <tr>
                <td><?= h($successfulSubtaskDividendCalculatedTotal->participant_id) ?></td>
                <td><?= h($successfulSubtaskDividendCalculatedTotal->subtask_success_count_sum_total) ?></td>
                <td><?= h($successfulSubtaskDividendCalculatedTotal->subtask_success_count_participant_total) ?></td>
                <td><?= h($successfulSubtaskDividendCalculatedTotal->final_dividend_value_avg) ?></td>
                <td><?= h($successfulSubtaskDividendCalculatedTotal->final_dividend_value_total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskDividendCalculatedTotal', 'action' => 'view', $successfulSubtaskDividendCalculatedTotal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskDividendCalculatedTotal', 'action' => 'edit', $successfulSubtaskDividendCalculatedTotal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskDividendCalculatedTotal', 'action' => 'delete', $successfulSubtaskDividendCalculatedTotal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskDividendCalculatedTotal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Dividend Scores') ?></h4>
        <?php if (!empty($participant->successful_subtask_dividend_scores)): ?>
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
            <?php foreach ($participant->successful_subtask_dividend_scores as $successfulSubtaskDividendScores): ?>
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
        <?php if (!empty($participant->successful_subtask_task)): ?>
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
            <?php foreach ($participant->successful_subtask_task as $successfulSubtaskTask): ?>
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
    -->
    </div>
    
    <!--
    <div class="related">
        <h4><?= __('Related Successful Subtask Task With Calculated Subtotal') ?></h4>
        <?php if (!empty($participant->successful_subtask_task_with_calculated_subtotal)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Contemporary Task Id') ?></th>
                <th scope="col"><?= __('Subtask Success Count Sum Subtotal') ?></th>
                <th scope="col"><?= __('Subtask Success Count Participant Subtotal') ?></th>
                <th scope="col"><?= __('Final Value Avg') ?></th>
                <th scope="col"><?= __('Final Value Subtotal') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->successful_subtask_task_with_calculated_subtotal as $successfulSubtaskTaskWithCalculatedSubtotal): ?>
            <tr>
                <td><?= h($successfulSubtaskTaskWithCalculatedSubtotal->participant_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedSubtotal->contemporary_task_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedSubtotal->subtask_success_count_sum_subtotal) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedSubtotal->subtask_success_count_participant_subtotal) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedSubtotal->final_value_avg) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedSubtotal->final_value_subtotal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedSubtotal', 'action' => 'view', $successfulSubtaskTaskWithCalculatedSubtotal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedSubtotal', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedSubtotal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedSubtotal', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedSubtotal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedSubtotal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task With Calculated Total') ?></h4>
        <?php if (!empty($participant->successful_subtask_task_with_calculated_total)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Success Count Sum Total') ?></th>
                <th scope="col"><?= __('Subtask Success Count Participant Total') ?></th>
                <th scope="col"><?= __('Final Value Avg') ?></th>
                <th scope="col"><?= __('Final Value Total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->successful_subtask_task_with_calculated_total as $successfulSubtaskTaskWithCalculatedTotal): ?>
            <tr>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotal->participant_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotal->subtask_success_count_sum_total) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotal->subtask_success_count_participant_total) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotal->final_value_avg) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotal->final_value_total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotal', 'action' => 'view', $successfulSubtaskTaskWithCalculatedTotal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotal', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedTotal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotal', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedTotal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedTotal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task With Calculated Total Complete') ?></h4>
        <?php if (!empty($participant->successful_subtask_task_with_calculated_total_complete)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Subtask Success Count Sum Total') ?></th>
                <th scope="col"><?= __('Subtask Success Count Participant Total') ?></th>
                <th scope="col"><?= __('Final Value Avg') ?></th>
                <th scope="col"><?= __('Final Value Total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->successful_subtask_task_with_calculated_total_complete as $successfulSubtaskTaskWithCalculatedTotalComplete): ?>
            <tr>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotalComplete->participant_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotalComplete->subtask_success_count_sum_total) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotalComplete->subtask_success_count_participant_total) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotalComplete->final_value_avg) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotalComplete->final_value_total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalComplete', 'action' => 'view', $successfulSubtaskTaskWithCalculatedTotalComplete->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalComplete', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedTotalComplete->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalComplete', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedTotalComplete->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedTotalComplete->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task With Calculated Total Participant') ?></h4>
        <?php if (!empty($participant->successful_subtask_task_with_calculated_total_participant)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Participant') ?></th>
                <th scope="col"><?= __('Successes') ?></th>
                <th scope="col"><?= __('Score') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->successful_subtask_task_with_calculated_total_participant as $successfulSubtaskTaskWithCalculatedTotalParticipant): ?>
            <tr>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotalParticipant->participant_id) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotalParticipant->participant) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotalParticipant->successes) ?></td>
                <td><?= h($successfulSubtaskTaskWithCalculatedTotalParticipant->score) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalParticipant', 'action' => 'view', $successfulSubtaskTaskWithCalculatedTotalParticipant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalParticipant', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedTotalParticipant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedTotalParticipant', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedTotalParticipant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedTotalParticipant->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
    <div class="related">
        <h4><?= __('Related Score View Complete Participant') ?></h4>
        <?php if (!empty($participant->score_view_complete_participant)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Participant Name') ?></th>
                <th scope="col"><?= __('Subtask Success Count Sum Total') ?></th>
                <th scope="col"><?= __('Subtask Success Count Participant Total') ?></th>
                <th scope="col"><?= __('Final Value Avg') ?></th>
                <th scope="col"><?= __('Final Value Total') ?></th>
                <th scope="col"><?= __('Dividend Count Sum Total') ?></th>
                <th scope="col"><?= __('Dividend Count Participant Total') ?></th>
                <th scope="col"><?= __('Final Dividend Value Avg') ?></th>
                <th scope="col"><?= __('Final Dividend Value Total') ?></th>
                <th scope="col"><?= __('Final Value Total With Dividends') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participant->score_view_complete_participant as $scoreViewCompleteParticipant): ?>
            <tr>
                <td><?= h($scoreViewCompleteParticipant->participant_id) ?></td>
                <td><?= h($scoreViewCompleteParticipant->participant_name) ?></td>
                <td><?= h($scoreViewCompleteParticipant->subtask_success_count_sum_total) ?></td>
                <td><?= h($scoreViewCompleteParticipant->subtask_success_count_participant_total) ?></td>
                <td><?= h($scoreViewCompleteParticipant->final_value_avg) ?></td>
                <td><?= h($scoreViewCompleteParticipant->final_value_total) ?></td>
                <td><?= h($scoreViewCompleteParticipant->dividend_count_sum_total) ?></td>
                <td><?= h($scoreViewCompleteParticipant->dividend_count_participant_total) ?></td>
                <td><?= h($scoreViewCompleteParticipant->final_dividend_value_avg) ?></td>
                <td><?= h($scoreViewCompleteParticipant->final_dividend_value_total) ?></td>
                <td><?= h($scoreViewCompleteParticipant->final_value_total_with_dividends) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ScoreViewCompleteParticipant', 'action' => 'view', $scoreViewCompleteParticipant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ScoreViewCompleteParticipant', 'action' => 'edit', $scoreViewCompleteParticipant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ScoreViewCompleteParticipant', 'action' => 'delete', $scoreViewCompleteParticipant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scoreViewCompleteParticipant->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
-->
</div>
</div>
<?php if (count($participant->dream_with_type) > 1) : ?>

  <?php echo '<script class="code" type="text/javascript">'; ?>
$(document).ready(function () {
    $.jqplot._noToImageButton = true;
    var dream = [<?= $s1data ?>];
 
    var acc = [<?= $s2data ?>];
 
    var plot1 = $.jqplot("score_bar_line", [dream, acc], {
        seriesColors: ["rgba(78, 135, 194, 0.7)", "rgb(211, 235, 59)"],
        title: 'Dream Score Evolution for <?= $participant->participant_name ?>',
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
                smooth: false,
                animation: {
                    show: true
                }
            },
            showMarker: false
        },
        series: [
            {
                fill: true,
                label: 'Dream Score'
            },
            {
                label: 'Accumulative'
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
                }
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

<?php  endif; ?>
