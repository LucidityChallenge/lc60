<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Score[]|\Cake\Collection\CollectionInterface $scores
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Score'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participants'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participant'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="scores index large-9 medium-8 columns content">
    <h3><?= __('Scores') ?></h3>
    <div class="chart_view jqplot-cursor-legend-swatch" id="score_bars" style="margin-top:20px; margin-left:20px; width:95%; height:400px;">
    </div>
    <h3><span class="chart_info" id="score_bar_info">Click on a bar for more precision.</span></h3>
    <br/>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('successful_subtasks') ?></th>
                <th scope="col"><?= $this->Paginator->sort('average_subtask_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_subtask_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dividend_successes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('average_dividend_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_dividends') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_score') ?></th>
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
        </thead>
        <tbody>
            <?php 
	      $sdata = '';
	      $tickdata = '';
	      foreach ($scores as $score): 
	    ?>
            <tr>
                <td><?=$this->Number->format($score->position) ?><span class="ordinal"><?php 
		  $mod = $score->position % 10;
		  
		  
		  if (($mod >= 4) || (($score->position >= 11) && ($score->position <= 13)))
		  {
		    echo 'th';
		  }
		  else
		  {
		    switch ($mod)
		    {
		    case 1:
		    {
		      echo 'st';
		      break;
		    }
		    case 2:
		    {
		      echo 'nd';
		      break;
		    }
		    case 3:
		    {
		      echo 'rd';
		      break;
		    }
		    default:
		    {
		    }
		    }
		  }       
                ?></span></td>
                <td><?= $score->has('participant') ? $this->Html->link($score->participant, ['controller' => 'Participants', 'action' => 'view', $score->participant_id]) : '' ?></td>
                <td><?= $this->Number->format($score->successful_subtasks) ?></td>
                <td><?= $this->Number->format($score->average_subtask_value) ?></td>
                <td><?= $this->Number->precision($score->total_subtask_value,2) ?></td>
                <td><?= $this->Number->format($score->dividend_successes) ?></td>
                <td><?= $this->Number->format($score->average_dividend_value) ?></td>
                <td><?= $this->Number->precision($score->total_dividends,2) ?></td>
                <td><?= $this->Number->precision($score->total_score,2) ?></td>
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $score->participant_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $score->participant_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $score->participant_id], ['confirm' => __('Are you sure you want to delete # {0}?', $score->participant_id)]) ?>
                </td>-->
            </tr>
	    <?php 
		if ($sdata != ''): $sdata = ','.$sdata; endif;
		$sdata = ($score->total_score).$sdata;
		
		if ($tickdata != ''): $tickdata = ','.$tickdata; endif;
		$tickdata = "'".($score->participant)."'".$tickdata;
		
	    ?>            
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
                $('#score_bar_info').html('score '+ (intVal/100).toFixed(2));
            }
        );
    });
   </script>

<?php echo $this->Html->css('jqplot/jquery_jqplot.css',['block'=>true]); ?>
<?php echo $this->Html->script('jqplot/excanvas.js',['block'=>'notie', 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/jquery_min.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/jquery_jqplot.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_barRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_pieRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_categoryAxisRenderer.js', ['block'=>true, 'type' => 'text/javascript']); ?>
<?php echo $this->Html->script('jqplot/plugins/jqplot_pointLabels.js', ['block'=>true, 'type' => 'text/javascript']); ?>
