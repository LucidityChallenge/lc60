<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Dream $dream
  */
?>
<?php if ($dream->user_id != null) : ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dream'), ['action' => 'edit', $dream->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dream'), ['action' => 'delete', $dream->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dream->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dreams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
        <!--
        <li><?= $this->Html->link(__('List Subtask Dream Super'), ['controller' => 'SubtaskDreamSuper', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Dream Super'), ['controller' => 'SubtaskDreamSuper', 'action' => 'add']) ?> </li>
        -->
        <li><?= $this->Html->link(__('List Subtask Dreams'), ['controller' => 'SubtaskDreams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Dream'), ['controller' => 'SubtaskDreams', 'action' => 'add']) ?> </li>
        <!--
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
<?php endif; ?>
<div class="dreams view large-9 medium-8 columns content">
    <h3><?= h('Dream '.$dream->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $dream->has('participant') ? $this->Html->link($dream->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $dream->participant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dream Url') ?></th>
            <td><?= $this->Html->link($dream->dream_url) ?></td>
        </tr>
        <?php if ($dream->user_id != null) : ?>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dream->id) ?></td>
        </tr>
        <?php endif; ?>
        <tr>
            <th scope="row"><?= __('Dream Timestamp') ?></th>
            <td><?= h($dream->dream_timestamp) ?></td>
        </tr>
    </table>
    
<div class="related">
        <h4><?= __('Dream information ') ?></h4>
        <?php if (!empty($dream->dream_with_type)): ?>
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
            <?php foreach ($dream->dream_with_type as $dreams): ?>        
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
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <?php if ($dream->user_id != null) : ?>
    <h3><?= $this->Html->link(__('Add Subtask to this Dream'), ['controller' => 'SubtaskDreams', 'action' => 'add',($dream->id)]) ?></h3>   
    <?php endif; ?>
    <div class="related">
        <h4><?= __('Associated Subtasks') ?></h4>
        <?php if (!empty($dream->subtask_dream_super_name)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Subtask Dream Attempt') ?></th>-->
                <th scope="col"><?= __('Subtask') ?></th>
                <th scope="col"><?= __('Implied') ?></th>
                <th scope="col"><?= __('Super Subtask') ?></th>
                <?php if ($dream->user_id != null) : ?>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                <?php endif; ?>
            </tr>
            <?php foreach ($dream->subtask_dream_super_name as $subtaskDreamSuper): ?>
            <tr>
                <!--<td><?= h($subtaskDreamSuper->subtask_dream_attempt) ?></td>-->
                <td><?= $this->Html->link($subtaskDreamSuper->subtask_name,['controller' => 'Subtasks', 'action' => 'view', $subtaskDreamSuper->subtask_id]) ?></td>
                <td><?= h(($subtaskDreamSuper->implied_from_super_task==1) ? 'Yes' : 'No') ?></td>
                <td><?= (($subtaskDreamSuper->super_subtask_name != null) ? $this->Html->link($subtaskDreamSuper->super_subtask_name,['controller' => 'Subtasks', 'action' => 'view', $subtaskDreamSuper->subtask_super_id]) : h('')) ?></td>
                <?php if ($dream->user_id != null) : ?>
                <td class="actions">
                    <!--<?= $this->Html->link(__('View'), ['controller' => 'SubtaskDreams', 'action' => 'view', $subtaskDreamSuper->subtask_dream_attempt]) ?>-->
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SubtaskDreams', 'action' => 'edit', $subtaskDreamSuper->subtask_dream_attempt]) ?>
                    <?= ($subtaskDreamSuper->implied_from_super_task==0) ? $this->Form->postLink(__('Delete'), ['controller' => 'SubtaskDreams', 'action' => 'delete', $subtaskDreamSuper->subtask_dream_attempt], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskDreamSuper->subtask_dream_attempt)]) : '' ?>
                </td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    
    <div class="related">
        <h4><?= __('Direct Scoreboard') ?></h4>
	<div class="chart_view jqplot-cursor-legend-swatch" id="score_bars" style="margin-top:20px; margin-left:20px; width:95%; height:400px;">
	</div>
	<h3><span class="chart_info" id="score_bar_info">Click on a bar for more precision.</span></h3>
	<br/>        
        <?php if (!empty($dream->successful_subtask_task_with_calculated_scoring)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
            <!--
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
                <th scope="col"><?= __('Subtask Super Id') ?></th>-->
                <th scope="col"><?= __('Subtask Name') ?></th>
                <!--<th scope="col"><?= __('Subtask Category Id') ?></th>-->
                <th scope="col"><?= __('Minimum Value') ?></th>
                <th scope="col"><?= __('Constant') ?></th>
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
                <th scope="col"><?= __('Past Success Count') ?></th>
                <th scope="col"><?= __('Current Success Count') ?></th>
                <th scope="col"><?= __('Contemporary Demand') ?></th>
                <!--<th scope="col"><?= __('Contemporary Demand Positive') ?></th>-->
                <!--<th scope="col"><?= __('Inner Function') ?></th>-->
                <!--<th scope="col"><?= __('External Function') ?></th>-->
                <th scope="col"><?= __('Final Value') ?></th>
                <!--<th scope="col"><?= __('Subtask Dividend Rate') ?></th>-->
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
            <?php $sum = 0;
		  $sdata  = '';
		  $tickdata = '';
		  $comma = '';
            ?>            
            <?php foreach ($dream->successful_subtask_task_with_calculated_scoring as $successfulSubtaskTaskWithCalculatedScoring): ?>
            <tr>
            <!--
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
                <td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_super_id) ?></td>-->
                <td class="<?= $successfulSubtaskTaskWithCalculatedScoring->subtask_category_class ?>"><?= $this->Html->link($successfulSubtaskTaskWithCalculatedScoring->subtask_name, ['controller' => 'Subtasks', 'action' => 'view',$successfulSubtaskTaskWithCalculatedScoring->subtask_id]) ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_id) ?></td>-->
                <td class="<?= $successfulSubtaskTaskWithCalculatedScoring->subtask_category_class ?>"><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_base_value) ?></td>
                <td class="<?= $successfulSubtaskTaskWithCalculatedScoring->subtask_category_class ?>"><?= h((($successfulSubtaskTaskWithCalculatedScoring->subtask_max_value == 0) || ($successfulSubtaskTaskWithCalculatedScoring->subtask_starting_demand == 0) || ($successfulSubtaskTaskWithCalculatedScoring->subtask_max_value == $successfulSubtaskTaskWithCalculatedScoring->subtask_base_value)) ? 'Yes' : 'No') ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_max_value) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_starting_demand) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_inflation_rate) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_demand_cutoff) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_task_period_demand) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_description) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_url) ?></td>-->
                <td class="<?= $successfulSubtaskTaskWithCalculatedScoring->subtask_category_class ?>"><?= h(($successfulSubtaskTaskWithCalculatedScoring->subtask_accumulative != 0) ? 'Yes' : 'No') ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_owner_participant_id) ?></td>-->
                <td class="<?= $successfulSubtaskTaskWithCalculatedScoring->subtask_category_class ?>"><?= (($successfulSubtaskTaskWithCalculatedScoring->subtask_category_name) != null) ? $this->Html->link($successfulSubtaskTaskWithCalculatedScoring->subtask_category_name,['controller' => 'SubtaskCategories', 'action' => 'view',($successfulSubtaskTaskWithCalculatedScoring->subtask_category_id)]) : h('None') ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_class) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_category_description) ?></td>-->
                <td class="<?= $successfulSubtaskTaskWithCalculatedScoring->subtask_category_class ?>"><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_success_count) ?></td>
                <td class="<?= $successfulSubtaskTaskWithCalculatedScoring->subtask_category_class ?>"><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_success_count_total) ?></td>
                <td class="<?= $successfulSubtaskTaskWithCalculatedScoring->subtask_category_class ?>"><?= h((($successfulSubtaskTaskWithCalculatedScoring->contemporary_demand >0) ? '+' : '').$successfulSubtaskTaskWithCalculatedScoring->contemporary_demand) ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->contemporary_demand_positive) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->inner_function) ?></td>-->
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->external_function) ?></td>-->
                <td class="<?= $successfulSubtaskTaskWithCalculatedScoring->subtask_category_class ?>"><?= $this->Number->precision($successfulSubtaskTaskWithCalculatedScoring->final_value_truncate,2) ?></td>
                <!--<td><?= h($successfulSubtaskTaskWithCalculatedScoring->subtask_dividend_rate) ?></td>-->
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'view', $successfulSubtaskTaskWithCalculatedScoring->dream_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedScoring->dream_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedScoring->dream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedScoring->dream_id)]) ?>
                </td>-->
            </tr>
            <?php $sum += ($successfulSubtaskTaskWithCalculatedScoring->final_value_truncate);
		  $sdata = ($successfulSubtaskTaskWithCalculatedScoring->final_value_truncate).($comma).($sdata);
		  $tickdata = '"'.str_replace('"','\"', $successfulSubtaskTaskWithCalculatedScoring->subtask_name).'"'.($comma).($tickdata);
		  $comma = ',';
            ?>
            <?php endforeach; ?>
            <td colspan="8"><?= h('Total:') ?></td>
            <td><?= $this->Number->precision($sum,2) ?></td>
        </table>
        <?php endif; ?>
    </div>
    <!--
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="related">
        <h4><?= __('Related Successful Subtask') ?></h4>
        <?php if (!empty($dream->successful_subtask)): ?>
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
            <?php foreach ($dream->successful_subtask as $successfulSubtask): ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtask', 'action' => 'view', $successfulSubtask->dream_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtask', 'action' => 'edit', $successfulSubtask->dream_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtask', 'action' => 'delete', $successfulSubtask->dream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtask->dream_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Dividend Scores') ?></h4>
        <?php if (!empty($dream->successful_subtask_dividend_scores)): ?>
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
            <?php foreach ($dream->successful_subtask_dividend_scores as $successfulSubtaskDividendScores): ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'view', $successfulSubtaskDividendScores->dream_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'edit', $successfulSubtaskDividendScores->dream_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskDividendScores', 'action' => 'delete', $successfulSubtaskDividendScores->dream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskDividendScores->dream_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task') ?></h4>
        <?php if (!empty($dream->successful_subtask_task)): ?>
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
            <?php foreach ($dream->successful_subtask_task as $successfulSubtaskTask): ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'view', $successfulSubtaskTask->dream_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'edit', $successfulSubtaskTask->dream_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTask', 'action' => 'delete', $successfulSubtaskTask->dream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTask->dream_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Successful Subtask Task With Calculated Scoring') ?></h4>
        <?php if (!empty($dream->successful_subtask_task_with_calculated_scoring)): ?>
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
            <?php foreach ($dream->successful_subtask_task_with_calculated_scoring as $successfulSubtaskTaskWithCalculatedScoring): ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'view', $successfulSubtaskTaskWithCalculatedScoring->dream_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedScoring->dream_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedScoring->dream_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedScoring->dream_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    -->
</div>

  <?php echo '<script class="code" type="text/javascript">'; ?>
$(document).ready(function(){
        $.jqplot.config.enablePlugins = true;
        //var s1 = [2, 6, 7, 10];
        var s1 = [<?= $sdata ?>];
        //var ticks = ['a', 'b', 'c', 'd'];
        var ticks = [<?= $tickdata ?>];
         
        plot1 = $.jqplot('score_bars', [s1], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            animate: !$.jqplot.use_excanvas,
            seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
                pointLabels: { show: true, location: 'e', edgeTolerance: -15 },
                shadowAngle: 135,
                rendererOptions: {
                    barDirection: 'horizontal'
                }
            },
            axes: {
                yaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },
            highlighter: { show: false }
        });
     
        $('#score_bars').bind('jqplotDataClick', 
            function (ev, seriesIndex, pointIndex, data) {
		var value = data.toString();
		var floatVal = parseFloat(value.substr(0,value.indexOf(',')));
		var intVal = parseInt(floatVal*100);
                $('#score_bar_info').html('score is '+ (intVal/100).toFixed(2));
            }
        );
    });
   </script>

<?php echo $this->Html->css('jqplot/jquery_jqplot.css',['block'=>true]); ?>
<?php echo $this->Html->script('jqplot/excanvas.js',['block'=>'notie', 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/jquery_min.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/jquery_jqplot.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_barRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_categoryAxisRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_pointLabels.js', ['block'=>true, 'type' => 'text/javascript']); ?>
