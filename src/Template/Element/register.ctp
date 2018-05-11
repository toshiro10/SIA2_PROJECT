<?php
   echo $this->Form->create("Users",array('url'=>'/users/register'));
   echo $this->Form->input('email');
   echo $this->Form->input('role');
   echo $this->Form->input('firstname');
   echo $this->Form->input('lastname');
   echo $this->Form->input('username');
   echo $this->Form->input('password');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>