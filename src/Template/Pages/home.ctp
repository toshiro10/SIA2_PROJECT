<?php

?>

<!DOCTYPE html>
<html>
<html lang="en">
<head>

</head>
<body>
 <h1>Dauphine Research Home Page</h1>
 <h2>Kevin c'est à toi ici</h2>
 <h3>Passe pas trop de temps dessus quand même</h3>

 <ul>
 	<li><?= $this->Html->link(__('Connect'), ['action' => 'index']) ?></li>
 	<li><?= $this->Html->link(__('Register'), ['controller' => 'Users',
    'action' => 'register']) ?></li>	
 </ul>
</body>
</html>

</body>
</html>