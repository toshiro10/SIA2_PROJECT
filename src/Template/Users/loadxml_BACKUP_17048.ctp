<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Collect the nav  links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav nav-pills">
            <li><a href="#">My Profile</a></li>
            <li><a href="#">My Drafts</a></li>
            <li><a href="#">My Articles</a></li>
            <li><a href="#">My Favorites</a></li>
            <li><?= $this->Html->link(__('Load XML'), ['controller' => 'Users' ,
'action' => 'loadxml']) ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="users form large-9 medium-8 columns content">
<<<<<<< HEAD
      <legend><?= __('Load XML') ?></legend> 
    <fieldset>
        <?php
          echo $this->Form->create($this, ['type' => 'file']);
          echo $this->Form->file('submittedfile');
>>>>>>> ab3f91ce8a9f8088ee9e3d5e7265d12a0f15cf9d
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>