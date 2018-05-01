<?php
/**
* CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
* @link          https://cakephp.org CakePHP(tm) Project
* @since         0.10.0
* @license       https://opensource.org/licenses/mit-license.php MIT License
*/

$cakeDescription = 'Dauphine Research';
?>
<!DOCTYPE html>
<html>
<head>
<?= $this->Html->charset() ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>
<?= $cakeDescription ?>:
<?= $this->fetch('title') ?>
</title>
<?= $this->Html->meta('icon') ?>

<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('accueil.css') ?>
<?= $this->Html->css('home.css') ?>



<?= $this->Html->script('accueil.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>
<body>
<nav class="navbar navbar-inverse" data-topbar role="navigation">

<div class="navbar-header">
    <h1 class="h2"><?= $this->Html->link(__('Dauphine Research'), ['controller' => 'Pages',
'action' => 'display']) ?></h1>
</div>
  

<div class="navbar-form navbar-right"> 
<button class="btn btn-primary text-white btn btn-outline-success my-2 my-sm-0"><?= $this->Html->link(__('Connect'), ['action' => 'index']) ?></button>

<?php if ($this->request->params['controller'] !== 'Users' && $this->request->params['action'] !== 'register'): ?>
    <button class="btn btn-success"><?= $this->Html->link(__('Register'), ['controller' => 'Users',
'action' => 'register']) ?></button> 
<?php endif; ?>
</div>


</nav>
<?= $this->Flash->render() ?>
<div class="container clearfix">
<?= $this->fetch('content') ?>
</div>
<footer>
</footer>
</body>
</html>
