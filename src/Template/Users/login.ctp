<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="container">
<img src ="http://oregoncenterfornursing.org/wp-content/uploads/2016/07/research-4.png" width="150" height="150" class="img-responsive center-block" ></img>
<div class="login-container">
<div id="output"></div>
<div class="form-box">
<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
<fieldset>
    <?= $this->Form->control('username') ?>
    <?= $this->Form->control('password') ?>
</fieldset>
<?= $this->Form->button(__('Se Connecter')); ?>
<?= $this->Form->end() ?>
</div>
</div>

</div>

<div class="login-container">
<p class="lead"> New to Dauphine Research? <a><?= $this->Html->link(__('Create an account.'), ['controller' => 'Users',
'action' => 'register']) ?></a> 
</p>
</div>


</body>
</html>

</body>
</html>
