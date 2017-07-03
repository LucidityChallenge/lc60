<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskValue[]|\Cake\Collection\CollectionInterface $subtaskValues
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subtask Value'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subtaskValues index large-9 medium-8 columns content">
    <h3><?= __('Subtask Values') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_task_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_task_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_starting_demand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_success_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_success_count_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_task_period_demand') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_task_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_super_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_base_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_max_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_inflation_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_demand_cutoff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_accumulative') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_owner_participant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_class') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_demand_cur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_demand_positive_cur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_demand_pre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_demand_positive_pre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_value_pre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_value_cur') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subtaskValues as $subtaskValue): ?>
            <tr>
                <td><?= $this->Number->format($subtaskValue->id) ?></td>
                <td><?= $this->Number->format($subtaskValue->current_task_id) ?></td>
                <td><?= $this->Number->format($subtaskValue->contemporary_task_id) ?></td>
                <td><?= $subtaskValue->has('subtask') ? $this->Html->link($subtaskValue->subtask->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskValue->subtask->id]) : '' ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_starting_demand) ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_success_count) ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_success_count_total) ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_task_period_demand) ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_task_id) ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_super_id) ?></td>
                <td><?= h($subtaskValue->subtask_name) ?></td>
                <td><?= $subtaskValue->has('subtask_category') ? $this->Html->link($subtaskValue->subtask_category->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $subtaskValue->subtask_category->id]) : '' ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_base_value) ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_max_value) ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_inflation_rate) ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_demand_cutoff) ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_accumulative) ?></td>
                <td><?= $this->Number->format($subtaskValue->subtask_owner_participant_id) ?></td>
                <td><?= h($subtaskValue->subtask_category_name) ?></td>
                <td><?= h($subtaskValue->subtask_category_class) ?></td>
                <td><?= $this->Number->format($subtaskValue->contemporary_demand_cur) ?></td>
                <td><?= $this->Number->format($subtaskValue->contemporary_demand_positive_cur) ?></td>
                <td><?= $this->Number->format($subtaskValue->contemporary_demand_pre) ?></td>
                <td><?= $this->Number->format($subtaskValue->contemporary_demand_positive_pre) ?></td>
                <td><?= $this->Number->format($subtaskValue->final_value_pre) ?></td>
                <td><?= $this->Number->format($subtaskValue->final_value_cur) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subtaskValue->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subtaskValue->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subtaskValue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subtaskValue->id)]) ?>
                </td>
            </tr>
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

	    <?php 
	      $showImage = false;
	    ?>
            <?php foreach ($subtaskValues as $subtaskValue): ?>
            <div class="subtask_value_box <?= 'box_'.($subtaskValue->subtask_category_class) ?>">
	    <table>
		<?php 
		  $variation = ($subtaskValue->final_value_pre != null)
		  ?
		  (
		    100
		    *
		    ($subtaskValue->final_value_cur - $subtaskValue->final_value_pre)
		    /
		    max(1,$subtaskValue->final_value_pre)
		  )
		  :
		  null;
		?>
		<tr>
		  <th scope="row" colspan="2">
		    <?= $this->Html->link($subtaskValue->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskValue->subtask_id]) ?>
		  </th>
		  <td>
		    <?= $this->Html->link(( ($subtaskValue->subtask_symbol != null) ? ('<span class="emoji">&#'.$subtaskValue->subtask_symbol.';</span>') : ((($subtaskValue->subtask_image != null) && $showImage) ? ($this->Html->image($subtaskValue->subtask_image,['alt' => ($subtaskValue->subtask_name)])) : ('')) ), ['controller' => 'Subtasks', 'action' => 'view', $subtaskValue->subtask_id],['escape' => false]) ?>
		  </td>
		</tr>
		<tr>
		  <th scope="row">Demand:</th>
		  <td><span class="digital"><?= $this->Number->format($subtaskValue->contemporary_demand_cur) ?></span></td><td>this week</td>
		</tr>
		<tr>
		  <th scope="row">Current:</th>
		  <td><span class="digital"><?= $this->Number->precision((intval(100*$subtaskValue->final_value_cur)/100),0) ?></span></td><td>points</td>
		</tr>
		<tr>
		  <th scope="row">Change:</th>
		  <td><span class="digital"><?= ($variation != null)? $this->Number->precision($variation,3).'%' : ('NO DATA') ?>&nbsp;</span></td>
		  <td><span class="emoji"><?= ($variation != null)? ((($variation) > 0) ? '&#9652;' : ((($variation) == 0) ? '&#9656;' : '&#9662;')) : ('-') ?></span></td>
		</tr>
	    </table>
            </div>
            <?php endforeach; ?>
</div>

<?php echo $this->Html->css('emoji.css',['block'=>true]); ?>
<?php echo $this->Html->css('crystal.css',['block'=>true]); ?>
