<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Incollection $incollection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $incollection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $incollection->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Incollections'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="incollections form large-9 medium-8 columns content">
    <?= $this->Form->create($incollection) ?>
    <fieldset>
        <legend><?= __('Edit Incollection') ?></legend>
        <?php
            echo $this->Form->control('mdate', ['empty' => true]);
            echo $this->Form->control('year');
            echo $this->Form->control('publication_key');
            echo $this->Form->control('title');
            echo $this->Form->control('pages');
            echo $this->Form->control('crossref');
            echo $this->Form->control('title_book');
            echo $this->Form->control('ee');
            echo $this->Form->control('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
