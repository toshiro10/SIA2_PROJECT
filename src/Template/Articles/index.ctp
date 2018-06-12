<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<h3 class="text-center"><?= __('Search Articles') ?></h3>
<div>
<?php
echo $this->Form->create(null, ['valueSources' => 'query', 'class' => 'col-md-8']);
// You'll need to populate $authors in the template from your controller
// echo $this->Form->control('authorid');
// Match the search param in your table configuration

echo $this->Form->control('title',['class' =>'form-control']);
?>

<?php

echo $this->Form->button('Filter', ['type' => 'submit', 'class' =>'btn btn-danger']);
echo $this->Html->link('Reset', ['action' => 'index', 'class' => 'btn btn-success']);
echo $this->Form->end();
?>
</div>
</br>
</br>
<div class="articles index large-9 medium-8 columns content">
    <table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-dark">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_book') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lkey') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('volume') ?></th>
                <th scope="col"><?= $this->Paginator->sort('journal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pages') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Number->format($article->id) ?></td>
                <td><?= $this->Number->format($article->id_book) ?></td>
                <td><?= $this->Number->format($article->id_state) ?></td>
                <td><?= h($article->mdate) ?></td>
                <td><?= h($article->lkey) ?></td>
                <td><?= h($article->title) ?></td>
                <td><?= h($article->year) ?></td>
                <td><?= $this->Number->format($article->volume) ?></td>
                <td><?= h($article->journal) ?></td>
                <td><?= $this->Number->format($article->number) ?></td>
                <td><?= h($article->url) ?></td>
                <td><?= h($article->ee) ?></td>
                <td><?= h($article->pages) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?>
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
