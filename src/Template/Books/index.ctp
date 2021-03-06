<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Book[]|\Cake\Collection\CollectionInterface $books
*/
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
<li class="heading"><?= __('Actions') ?></li>
<li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?></li>
</ul>
</nav>
<h3 class="text-center"><?= __('Search Books') ?></h3>
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

<div class="books index large-9 medium-8 columns content">

<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped table-dark">
<thead >
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col"><?= $this->Paginator->sort('year') ?></th>
        <th scope="col"><?= $this->Paginator->sort('title') ?></th>
        <th scope="col"><?= $this->Paginator->sort('editor_id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('isbn') ?></th>
        <th scope="col"><?= $this->Paginator->sort('ee') ?></th>
        <th scope="col"><?= $this->Paginator->sort('series') ?></th>
        <th scope="col"><?= $this->Paginator->sort('url') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($books as $book): ?>
    <tr>
        <td><?= $this->Number->format($book->id) ?></td>
        <td><?= h($book->modified) ?></td>
        <td><?= h($book->created) ?></td>
        <td><?= $this->Number->format($book->year) ?></td>
        <td><?= h($book->title) ?></td>
        <td><?= $this->Number->format($book->editor_id) ?></td>
        <td><?= h($book->isbn) ?></td>
        <td><?= h($book->ee) ?></td>
        <td><?= h($book->series) ?></td>
        <td><?= h($book->url) ?></td>
        <td class="actions">
            <?= $this->Html->link(__('View'), ['action' => 'view', $book->id]) ?>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->id]) ?>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?>
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
