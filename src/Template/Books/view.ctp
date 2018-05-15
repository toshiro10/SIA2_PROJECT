<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $book->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Book'), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="books view large-9 medium-8 columns content">
    <h3><?= h($book->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($book->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isbn') ?></th>
            <td><?= h($book->isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ee') ?></th>
            <td><?= h($book->ee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Series') ?></th>
            <td><?= h($book->series) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($book->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($book->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($book->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Editor Id') ?></th>
            <td><?= $this->Number->format($book->editor_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($book->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($book->created) ?></td>
        </tr>
    </table>
</div>
