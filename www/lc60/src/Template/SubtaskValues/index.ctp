<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubtaskValue[]|\Cake\Collection\CollectionInterface $subtaskValues
  */
?><!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subtask Value'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtasks'), ['controller' => 'Subtasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask'), ['controller' => 'Subtasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subtask Categories'), ['controller' => 'SubtaskCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subtask Category'), ['controller' => 'SubtaskCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>-->
<div class="subtaskValues index large-9 medium-8 columns content">
    <h3><?= __('Subtask Values') ?></h3>
    <nav class="large-3">
    <ul class="top-nav">
    <li><?= $this->Html->link('Show all Visible Subtasks',['action'=>'index']) ?></li>
    <li><?= $this->Html->link('List only Open Subtasks',['action'=>'index','filter:open']) ?></li>
    <li><?= $this->Html->link('List only Unlocked Subtasks',['action'=>'index','filter:unlocked']) ?></li>
    <li><?= $this->Html->link('List only Locked Subtasks',['action'=>'index','filter:locked']) ?></li>
    <li><?= $this->Html->link('List only Task 1 Subtasks',['action'=>'index','filter:task:1']) ?></li>
    <li><?= $this->Html->link('List only Task 2 Subtasks',['action'=>'index','filter:task:2']) ?></li>
    <li><?= $this->Html->link('List only Task 3 Subtasks',['action'=>'index','filter:task:3']) ?></li>
    <li><?= $this->Html->link('List only Task 4 Subtasks',['action'=>'index','filter:task:4']) ?></li>
    <li><?= $this->Html->link('List only Task 5 Subtasks',['action'=>'index','filter:task:5']) ?></li>
    <li><?= $this->Html->link('List only Gray Subtasks',['action'=>'index','filter:subtask_category:null']) ?></li>
    <li><?= $this->Html->link('List only Red Subtasks',['action'=>'index','filter:subtask_category:1']) ?></li>
    <li><?= $this->Html->link('List only Orange Subtasks',['action'=>'index','filter:subtask_category:2']) ?></li>
    <li><?= $this->Html->link('List only Yellow Subtasks',['action'=>'index','filter:subtask_category:3']) ?></li>
    <li><?= $this->Html->link('List only Green Subtasks',['action'=>'index','filter:subtask_category:4']) ?></li>
    <li><?= $this->Html->link('List only Blue Subtasks',['action'=>'index','filter:subtask_category:5']) ?></li>
    <li><?= $this->Html->link('List only Indigo Subtasks',['action'=>'index','filter:subtask_category:6']) ?></li>
    <li><?= $this->Html->link('List only Violet Subtasks',['action'=>'index','filter:subtask_category:7']) ?></li>
    </ul>
    </nav>
    <div>
    <p>&nbsp;</p>

	    <?php 
	      $showImage = false;
	    ?>
            <?php foreach ($subtaskValues as $subtaskValue): ?>
            <div class="subtask_value_box_float <?= 'box_'.($subtaskValue->subtask_category_class) ?>">
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
		<tr class="subtask_color">
		  <td colspan="3" class="<?= ($subtaskValue->subtask_category_class) ?>"></td>
		</tr>
		<tr>
		  <th scope="row" colspan="2">
		    <?= $this->Html->link($subtaskValue->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskValue->subtask_id]) ?>
		  </th>
		  <td>
		    <?= $this->Html->link(( ($subtaskValue->subtask_symbol != null) ? ('<span class="emoji">&#'.$subtaskValue->subtask_symbol.';</span>') : ((($subtaskValue->subtask_image != null) && $showImage) ? ($this->Html->image($subtaskValue->subtask_image,['alt' => ($subtaskValue->subtask_name)])) : ('')) ), ['controller' => 'Subtasks', 'action' => 'view', $subtaskValue->subtask_id],['escape' => false]) ?>
		  </td>
		</tr>
		<tr>
		  <th scope="row">Bonus:</th>
		  <td><span class="digital"><?= $this->Number->format($subtaskValue->contemporary_demand_cur) ?></span></td><td>this week</td>
		</tr>
		<tr>
		  <th scope="row">Current:</th>
		  <td><span class="digital"><?= $this->Number->precision((intval(100*$subtaskValue->final_value_cur)/100),0) ?></span></td><td>points</td>
		</tr>
		<tr>
		  <th scope="row">Change:</th>
		  <td><span class="digital"><?= (is_null($variation))? ('NO DATA') : ($this->Number->precision($variation,3).'%') ?>&nbsp;</span></td>
		  <td><span class="emoji"><?= ($variation != null)? ((($variation) > 0) ? '&#9652;' : ((($variation) == 0) ? '&#9656;' : '&#9662;')) : ('-') ?></span></td>
		</tr>
		<tr>
		  <th scope="row">Status:</th>
		  <td colspan="2"><span class="digital"><?= (($subtaskValue->subtask_type_ownable == 1) && ($subtaskValue->subtask_share_holder_count == 0) && ($subtaskValue->subtask_type_unlockable == 1)) ? 'LOCKED' : 'OPEN' ?></span></td>
		</tr>	   
	    </table>
            </div>
	    <?php endforeach;
		if (count($subtaskValues) == 0):
			echo $this->Html->image('http://4.bp.blogspot.com/-W62AQFK0nsc/Ud4oQBu0xDI/AAAAAAAAFWk/H5JzZoNmwt4/s1600/Yao_ming_meme_by_lecatinga-d4kpe13.png',['alt'=>'Nothing Here']);
			echo h('Nothing to see here!');
		endif;

	    ?>
    <p>&nbsp;</p></div>
    <div class="paginator clear">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
    <p>&nbsp;</p>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('subtask_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_category_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtask_share_holder_count','Owner Count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contemporary_demand_pre', 'Previous Bonus') ?></th>
		<th scope="col"><?= $this->Paginator->sort('contemporary_demand_cur', 'Current Bonus') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('final_value_pre','Previous Value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_value_cur','Current Value') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subtaskValues as $subtaskValue): ?>
            <tr>
                <td><?= $this->Html->link($subtaskValue->subtask_name, ['controller' => 'Subtasks', 'action' => 'view', $subtaskValue->subtask_id]) ?></td>
                <td><?= $this->Html->link($subtaskValue->subtask_category_name, ['controller' => 'SubtaskCategories', 'action' => 'view', $subtaskValue->subtask_category_id]) ?></td>
                 <td><?= $this->Number->format($subtaskValue->subtask_share_holder_count) ?></td>
                <td><?= $this->Number->format($subtaskValue->contemporary_demand_pre) ?></td>
                <td><?= $this->Number->format($subtaskValue->contemporary_demand_cur) ?></td>
                <td><?= $this->Number->format($subtaskValue->final_value_pre) ?></td>
                <td><?= $this->Number->format($subtaskValue->final_value_cur) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <div class="paginator clear">
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

<?php echo $this->Html->css('emoji.css',['block'=>true]); ?>
<?php echo $this->Html->css('crystal.css',['block'=>true]); ?>
<?php echo $this->Html->css('subtask_color.css',['block'=>true]); ?>
