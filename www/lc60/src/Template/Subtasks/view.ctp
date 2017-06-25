<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Subtask $subtask
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subtask'), ['action' => 'edit', $subtask->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subtask'), ['action' => 'delete', $subtask->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtask->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subtask Types'), ['controller' => 'SubtaskTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subtask Type'), ['controller' => 'SubtaskTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subtasks view large-9 medium-8 columns content">
    <h3><?= h($subtask->subtask_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Task') ?></th>
            <td><?= $subtask->has('task') ? $this->Html->link($subtask->task->task_title, ['controller' => 'Tasks', 'action' => 'view', $subtask->task->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask') ?></th>
            <td><?= $subtask->has('subtask') ? $this->Html->link($subtask->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtask->subtask->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Name') ?></th>
            <td><?= h($subtask->subtask_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Category') ?></th>
            <td><?= $subtask->has('subtask_category') ? $this->Html->link($subtask->subtask_category->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $subtask->subtask_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Url') ?></th>
            <td><?= h($subtask->subtask_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $subtask->has('participant') ? $this->Html->link($subtask->participant->participant_name, ['controller' => 'Participants', 'action' => 'view', $subtask->participant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Image') ?></th>
            <td><?= ($subtask->subtask_image != null) ? $this->Html->image($subtask->subtask_image, ['alt' => ($subtask->subtask_name)]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Type') ?></th>
            <td><?= $subtask->has('subtask_type') ? $this->Html->link($subtask->subtask_type->subtask_type_name, ['controller' => 'SubtaskTypes', 'action' => 'view', $subtask->subtask_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subtask->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Base Value') ?></th>
            <td><?= $this->Number->format($subtask->subtask_base_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Max Value') ?></th>
            <td><?= $this->Number->format($subtask->subtask_max_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Starting Demand') ?></th>
            <td><?= $this->Number->format($subtask->subtask_starting_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Inflation Rate') ?></th>
            <td><?= $this->Number->format($subtask->subtask_inflation_rate) ?> (<?=$this->Number->format($subtask->subtask_inflation_rate-100)?>% per demand)</td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Demand Cutoff') ?></th>
            <td><?= $this->Number->format($subtask->subtask_demand_cutoff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Task Period Demand') ?></th>
            <td><?= $this->Number->format($subtask->subtask_task_period_demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Dividend Rate') ?></th>
            <td><?= $this->Number->format($subtask->subtask_dividend_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Symbol') ?></th>
            <td><span class="emoji"><?= ($subtask->subtask_symbol != NULL) ? ('&#'.($subtask->subtask_symbol).';') : '' ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtask Accumulative') ?></th>
            <td><?= $subtask->subtask_accumulative ? __('Yes') : __('No'); ?></td>
        </tr>        
    </table>
    <div class="row">
        <h4><?= __('Subtask Description') ?></h4>
        <?= $this->Text->autoParagraph(h($subtask->subtask_description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Subtask Instructions') ?></h4>
        <?= $this->Text->autoParagraph(h($subtask->subtask_instruction)); ?>
    </div>
    <?php    
      $comma = '';
      $s1data = '';
      $s2data = '';      
    ?>
    <?php if (count($subtask->successful_subtask_task_with_calculated_scoring_participant)>1) : ?>
    <h4><?= __('Value evolution for "'.($subtask->subtask_name).'"') ?></h4>
    <div class="plot chart_view jqplot-cursor-legend-swatch" id="score_bar_line" style="margin-top:20px; margin-left:10px; width:90%; height:400px;">
    </div>
    <?php endif; ?>
    <!--<h3><span class="chart_info" id="score_bar_line_info">Hover over line for more precision.</span></h3>-->
    <h4><?= __('Completed "'.($subtask->subtask_name).'" Instances') ?></h4>
    <div class="related">
        <?php if (!empty($subtask->successful_subtask_task_with_calculated_scoring_participant)): ?>
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
                <th scope="col"><?= __('Holder') ?></th>                
                <!--<th scope="col"><?= __('Subtask Dividend Rate') ?></th>-->
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
            <?php foreach ($subtask->successful_subtask_task_with_calculated_scoring_participant as $successfulSubtaskTaskWithCalculatedScoring): ?>
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
                <td><?= (($successfulSubtaskTaskWithCalculatedScoring->subtask_share_holder_count) == 1)? $this->Html->link($successfulSubtaskTaskWithCalculatedScoring->participant_holder_name,['controller' => 'Participants', 'action' => 'view',($successfulSubtaskTaskWithCalculatedScoring->participant_holder_id)]) : $this->Number->format($successfulSubtaskTaskWithCalculatedScoring->subtask_share_holder_count).' holders' ?></td>
                <!--
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'view', $successfulSubtaskTaskWithCalculatedScoring->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'edit', $successfulSubtaskTaskWithCalculatedScoring->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuccessfulSubtaskTaskWithCalculatedScoring', 'action' => 'delete', $successfulSubtaskTaskWithCalculatedScoring->id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedScoring->id)]) ?>
                </td>
                -->
            </tr>
            <?php
	      $date = $successfulSubtaskTaskWithCalculatedScoring->dream_timestamp;
	      $value =  $successfulSubtaskTaskWithCalculatedScoring->final_value;
	      $s1data = $s1data."${comma}[\"${date}\",${value}]";
	      $baseValue = ($successfulSubtaskTaskWithCalculatedScoring->subtask_base_value);
	      $s2data = $s2data."${comma}[\"${date}\",${baseValue}]";
	      $comma = ',';
            ?>           
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <h4><?= __('Holders of "'.($subtask->subtask_name).'" Subtask') ?></h4>
    <div class="related">
        <?php if (!empty($subtask->share_holders_participant)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Participant') ?></th>
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
            <?php foreach ($subtask->share_holders_participant as $holder): ?>
            <tr>
                <!--<td><?= h($holder->participant_id) ?></td>-->
                <td><?= $this->Html->link($holder->participant_name, ['controller' => 'Participants', 'action' => 'view',($holder->participant_id)]) ?></td>     
                <!--
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Participants', 'action' => 'view', $holder->participant_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Participants', 'action' => 'edit', $holder->participant_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Participants', 'action' => 'delete', $holder->participant_id], ['confirm' => __('Are you sure you want to delete # {0}?', $successfulSubtaskTaskWithCalculatedScoring->id)]) ?>
                </td>
                -->
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    
</div>
<?php echo $this->Html->css('emoji.css',['block'=>true]); ?>

<?php if (count($subtask->successful_subtask_task_with_calculated_scoring_participant)>1) : ?>

  <?php echo '<script class="code" type="text/javascript">'; ?>
$(document).ready(function () {
    $.jqplot._noToImageButton = true;
    var dream = [<?= $s1data ?>];
 
    var acc = [<?= $s2data ?>];
 
    var plot1 = $.jqplot("score_bar_line", [dream, acc], {
        seriesColors: ["rgba(78, 135, 194, 0.7)", "rgb(211, 235, 59)"],
        title: '<?= ('Value evolution for "'.($subtask->subtask_name).'"') ?>',
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
                label: 'Actual Value'
            },
            {
                label: 'Minimum Value'
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

