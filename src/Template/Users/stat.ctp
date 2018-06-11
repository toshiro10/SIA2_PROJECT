<?php
?>
<h1>Some statistics on articles</h1>

 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Collect the nav  links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav nav-pills">
            <li><?= $this->Html->link(__('My Profile'), ['controller' => 'Users',
'action' => 'edit/'.$this->request->session()->read('Auth.User.id')]) ?></li>
            <li><a href="#">My Drafts</a></li>
            <li><?= $this->Html->link(__('My Articles'), ['controller' => 'Articles' ,
'action' => 'index']) ?></li>
            <li><a href="#">My Favorites</a></li>
            <li><?= $this->Html->link(__('Load XML'), ['controller' => 'Users' ,
'action' => 'loadxml']) ?></li>
<li><?= $this->Html->link(__('My Stats'), ['controller' => 'Users' ,
'action' => 'stat']) ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<h2>stats</h2>
<table>
	<tr><th>Name</th><th>Stats</th></tr>
	<tr><td>Average author number per article</td><td><?php echo $mean_author;?></td></tr>
</table>