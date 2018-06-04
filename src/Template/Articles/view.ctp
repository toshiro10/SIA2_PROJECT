<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articles view large-9 medium-8 columns content">
    <h3><?= h($article->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lkey') ?></th>
            <td><?= h($article->lkey) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($article->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($article->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Journal') ?></th>
            <td><?= h($article->journal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($article->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ee') ?></th>
            <td><?= h($article->ee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pages') ?></th>
            <td><?= h($article->pages) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($article->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Book') ?></th>
            <td><?= $this->Number->format($article->id_book) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id State') ?></th>
            <td><?= $this->Number->format($article->id_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Volume') ?></th>
            <td><?= $this->Number->format($article->volume) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($article->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mdate') ?></th>
            <td><?= h($article->mdate) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Authors') ?></h4>
        <?php if (!empty($article->authors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Id User') ?></th>
                <th scope="col"><?= __('Authorname') ?></th>
                <th scope="col"><?= __('Authorfirstname') ?></th>
                <th scope="col"><?= __('Authorfullname') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($article->authors as $authors): ?>
            <tr>
                <td><?= h($authors->id) ?></td>
                <td><?= h($authors->id_user) ?></td>
                <td><?= h($authors->authorname) ?></td>
                <td><?= h($authors->authorfirstname) ?></td>
                <td><?= h($authors->authorfullname) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Authors', 'action' => 'view', $authors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Authors', 'action' => 'edit', $authors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Authors', 'action' => 'delete', $authors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
