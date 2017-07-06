<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="news index large-9 medium-8 columns content">
    <h3><?= __('News') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Linked Address') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('Published On') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Author') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $news): ?>
            <tr>
                <!--<td><?= $this->Html->link($this->Number->format($news->id), ['action' => 'view', $news->id]) ?></td>-->
                <td><?= $this->Html->link($news->title, ['action' => 'view', $news->id]) ?></td>
                <td><?= $this->Html->link($news->url,$news->url) ?></td>
                <td><?= h($news->publish) ?></td>
                <td><?= $news->has('user') ? $this->Html->link($news->user->username, ['controller' => 'Users', 'action' => 'view', $news->user->id]) : '' ?></td>
                <td class="actions">
                   <!--<?= $this->Html->link(__('View'), ['action' => 'view', $news->id]) ?>-->
                   <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $news->id]) ?>-->
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
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
</div>
<?= $this->Html->meta(
    'News',
    ['action' => 'rss'],
    ['type' => 'rss', 'block' => true]
);
?>