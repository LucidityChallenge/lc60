<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Task $task
  */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Task'), ['action' => 'edit', $task->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Task'), ['action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Current Task'), ['controller' => 'CurrentTask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Current Task'), ['controller' => 'CurrentTask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dream With Type'), ['controller' => 'DreamWithType', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dream With Type'), ['controller' => 'DreamWithType', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Share Holder Complete'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Share Holder Complete'), ['controller' => 'SubtaskShareHolderComplete', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Subtask Category'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Subtask Category'), ['controller' => 'SubtaskSubtaskCategory', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Successful Subtask'), ['controller' => 'SuccessfulSubtask', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Unexpired Task'), ['controller' => 'UnexpiredTask', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unexpired Task'), ['controller' => 'UnexpiredTask', 'action' => 'add']) ?> </li>
    </ul>
</nav>-->
<div class="tasks view large-9 medium-8 columns content">
    <h3><?= h($task->task_title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Task Title') ?></th>
            <td><?= h($task->task_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Task Url') ?></th>
            <td><?= $this->Html->link($task->task_url) ?></td>
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
    <?php if (($task->task_image_url) != null) : ?>
    <div class="row">
        <h4><?= __('Task Image') ?></h4>
        <?= $this->Html->image(($task->task_image_url)); ?>
    </div>
    <?php endif; ?>
    <div class="row">
        <h4><?= __('Task Text') ?></h4>
        <?= $this->Text->autoParagraph(h($task->task_text)); ?>
    </div>

    <h4><?= __('Contemporary Dreams') ?></h4>
    <div class="related">
        <?php if (!empty($task->dream_with_type_participant)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Participant Id') ?></th>-->
                <th scope="col"><?= __('Participant') ?></th>
                <th scope="col"><?= __('Dream Timestamp') ?></th>
                <!--<th scope="col"><?= __('Dream Type Id') ?></th>-->
                <th scope="col"><?= __('Dream Type') ?></th>
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
                <!--<td><?= $this->Html->link(($dreamWithType->dream_type_name), ['controller' => 'DreamTypes', 'action' => 'view', $dreamWithType->dream_type_id]) ?></td>-->
                <td><?= $this->Html->link(($dreamWithType->dream_type_short_name), ['controller' => 'DreamTypes', 'action' => 'view', $dreamWithType->dream_type_id]) ?></td>
                <td><?= $this->Html->link(($dreamWithType->final_value_truncate), ['controller' => 'Dreams', 'action' => 'view', $dreamWithType->dream_id])  ?></td>
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
-->
    <h4><?= __('Subtasks Completed') ?></h4>
    <div class="related">
        <?php if (!empty($task->successful_subtask_task_with_calculated_scoring_participant)): ?>
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
            <?php foreach ($task->successful_subtask_task_with_calculated_scoring_participant as $successfulSubtaskTaskWithCalculatedScoring): ?>
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


<?php if (!empty($task->subtask_share_holder_complete)): ?>
<div class="subtaskShareHolderComplete view large-9 medium-8 columns content subtask subtask_yellow">
<h4><?= __('Subtasks') ?></h4>
    <?php foreach ($task->subtask_share_holder_complete as $subtaskShareHolderComplete): ?>
  
    <table class="vertical-table">
        <tr class="subtask_color">
	  <td colspan="2" class="<?= ($subtaskShareHolderComplete->subtask_category_class) ?>"></td>
	</tr>
	<tr>
	<th scope="row" colspan="2"><h3><?= $this->Html->link($subtaskShareHolderComplete->subtask_name, ['controller' => 'Subtasks', 'action' => 'view',($subtaskShareHolderComplete->subtask_id)]) ?></h3></th>
	</tr>
        <tr>
            <th scope="row"><?= __('Symbol') ?></th>
            <td><?= $subtaskShareHolderComplete->has('subtask') ? $this->Html->link($subtaskShareHolderComplete->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskShareHolderComplete->subtask->id]) : '' ?>
            <div class="subtask_picture"><?= (null != $subtaskShareHolderComplete->subtask_image) ? $this->Html->image($subtaskShareHolderComplete->subtask_image, ['alt' => (null != $subtaskShareHolderComplete->subtask_symbol) ? ('&#'.$subtaskShareHolderComplete->subtask_symbol.'; '.($subtaskShareHolderComplete->subtask_name)) : ($subtaskShareHolderComplete->subtask_name)]) :
    ((null != $subtaskShareHolderComplete->subtask_symbol) ? '<span class="emoji">&#'.$subtaskShareHolderComplete->subtask_symbol.';</span>' : '')
    ?></div></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($subtaskShareHolderComplete->subtask_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= ($subtaskShareHolderComplete->subtask_category_name != null) ? $this->Html->link($subtaskShareHolderComplete->subtask_category_name,['controller'=>'subtask_categories', 'action' => 'view',($subtaskShareHolderComplete->subtask_category_id)]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= ($subtaskShareHolderComplete->subtask_type_name != null) ? $this->Html->link($subtaskShareHolderComplete->subtask_type_name,['controller'=>'subtask_types', 'action' => 'view',($subtaskShareHolderComplete->subtask_type_id)]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($subtaskShareHolderComplete->subtask_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Minimum Value') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_base_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maximum Value') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_max_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Starting Bonus') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_starting_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weekly Bonus Increase') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_task_period_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shared Rate') ?></th>
            <td><?= $this->Number->format($subtaskShareHolderComplete->subtask_dividend_rate).'%' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accumulative') ?></th>
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
<?php echo $this->Html->css('subtask_color.css',['block'=>true]); ?>
