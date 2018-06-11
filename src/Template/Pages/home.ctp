<?php
/*<li><?= $this->Html->link(__('Connect'), ['action' => 'index']) ?></li>*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


</head>
<body>

<!-- Carousel Slider -->
<!-- <div id="carouselLogo" class="carousel slide" data-ride="carousel">
<h1 class="text-center">Dauphine Research</h1>
</div> -->
<!-- Caro1usel Slider -->

<!-- Card -->
<div class="container container mt-4 mb-5">
<h3 class="display-4 text-center"> Les top 3 thèses </h3>
<hr class="bg-dark mb-4 w-25">
<br>

<div class="row">
<div class="col-md-4">
<div class="card">

    <img class="card-img-top" src="https://www.freeiconspng.com/uploads/-png-keywords-books-icons-icons-icons-psd-files-size-5-54mb-zip-license-14.png" alt="Card image cap", width="500px", height="250px">
    <div class="card-block p-3">
        <h4 class="card-title">Livres</h4>
        <p class="card-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <a><?= $this->Html->link(__(' Search Books'), ['controller' => 'Books']) ?></a> 
    </div>
</div>
</div>
<div class="col-md-4">
<div class="card">
    <img class="card-img-top" src="http://www.housingeurope.eu/image/163/sectionheaderpng/resourcesdef.png" alt="Card image cap", width="500px", height="250px">
    <div class="card-block p-3">
        <h4 class="card-title">Articles</h4>
        <p class="card-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <a><?= $this->Html->link(__(' Search Articles'), ['controller' => 'Articles']) ?></a>
    </div>
</div>
</div>
<div class="col-md-4">
<div class="card">
    <img class="card-img-top" src="https://cdn.icon-icons.com/icons2/609/PNG/512/professor_icon-icons.com_56337.png" alt="Card image cap", width="500px", height="250px">
    <div class="card-block p-3">
        <h4 class="card-title">Chercheur</h4>
        <p class="card-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <a><?= $this->Html->link(__(' Search Articles'), ['controller' => 'Articles']) ?></a>
    </div>
</div>
</div>
</div>

</div>
<!-- Card -->
<?php if ($this->request->session()->read('Auth.User.id') == null): ?>
<div class="container mb-5">
<div class="row">
<div class="col-md-8">
<h3 class="display-4">Avis des chercheurs</h3>
<hr class="bg-dark w-25 ml-0">
<p class="lead">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
</p>
<p>
    When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
<ul class="list-unstyled pl-4">
    <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
    <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
    <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
</ul>
<a href="#" class="btn btn-outline-primary rounded-0"> Read More</a>
</div>
<div class="col-md-4 mt-5">
<img class="card-img-top" src="https://business.critizr.com/hubfs/Webinar%20les%20avis%20clients%20nouveau%20graal.png" alt="Card image cap", width="500px", height="300px">
</div>
</div>
</div>

<div class="container pb-4">
<h3 class="display-4 text-center">Les créateurs du site</h3>
<hr class="bg-dark w-25">
<div id="carouselLogo" class="carousel slide pt-3" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
    <ul class="list-inline row  mx-auto text-center">
        <li class="col-md-4"><img class="d-block img-fluid" src="https://vignette.wikia.nocookie.net/worldofcarsdrivein/images/5/5f/Yoda.png" alt="First slide", width="100px", height="150px"></li>
        <li class="col-md-4"><img class="d-block img-fluid" src="https://vignette.wikia.nocookie.net/fusionfallfanonsite/images/8/8e/Anakin_Skywalker.png" alt="First slide" , width="100px", height="150px"></li>
        <li class="col-md-4"><img class="d-block img-fluid" src="http://i.neoseeker.com/mgv/179845/845/55/nihilusprincipal_display.png" alt="First slide" , width="100px", height="150px"></li>
       <li class="col-md-4"><img class="d-block img-fluid" src="https://vignette.wikia.nocookie.net/starwars/images/6/6c/SithWarrior-TOR.png" alt="First slide" , width="100px", height="150px"></li>

    </ul>
</div>
<div class="carousel-item">
    <ul class="list-inline row  mx-auto">
        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
    </ul>
</div>
<div class="carousel-item">
    <ul class="list-inline row  mx-auto">
        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
        <li class="col-md-4"><img class="d-block img-fluid" src="http://brix.io/assets/img/logo-bootstrap.png" alt="First slide"></li>
    </ul>
</div>
</div>
</div>
</div>
<?php endif; ?>
<!-- Footer -->
<footer class="footer bg-dark text-white">

<!-- Social Icons -->
<div class="bg-primary">
<div class="container">
<div class="row py-4">
    <div class="col-md-6 col-lg-7">
        <h4 class="mb-0 white-text">Get connected with us on social networks!</h4>
    </div>
    <div class="col-md-6 col-lg-5 text-right">
        <a><i class="fa fa-facebook white-text mr-lg-4 fa-2x"> </i></a>
        <a><i class="fa fa-twitter white-text mr-lg-4 fa-2x"> </i></a>
        <a><i class="fa fa-google-plus white-text mr-lg-4 fa-2x"> </i></a>
        <a><i class="fa fa-linkedin white-text mr-lg-4 fa-2x"> </i></a>
        <a><i class="fa fa-instagram white-text mr-lg-4 fa-2x"> </i></a>
    </div>
</div>
</div>
</div>
<!-- Social Icons -->

<!-- Footer Links -->
<div class="container pt-5 pb-2">
<div class="row">

<div class="col-md-3 col-lg-4 col-xl-3">
    <h4>Company name</h4>
    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
    <p>
        When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
    </p>
</div>

<div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
    <h4>Products</h4>
    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
    <p><a href="#" class="text-white">Product-1</a></p>
    <p><a href="#" class="text-white">Product-2</a></p>
    <p><a href="#" class="text-white">Product-3</a></p>
    <p><a href="#" class="text-white">Product-4</a></p>
</div>

<div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
    <h4>Useful links</h4>
    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
    <p><a href="#" class="text-white">Home</a></p>
    <p><a href="#" class="text-white">About Us</a></p>
    <p><a href="#" class="text-white">Services</a></p>
    <p><a href="#" class="text-white">Contact</a></p>
</div>

<div class="col-md-4 col-lg-3 col-xl-3">
    <h4>Contact</h4>
    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
    <p><i class="fa fa-home mr-3"></i> Company Location</p>
    <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
    <p><i class="fa fa-phone mr-3"></i> + 98 765 432 11</p>
    <p><i class="fa fa-print mr-3"></i> + 98 765 432 10</p>
</div>

</div>
</div>
<!-- Footer Links-->

<hr class="bg-white mx-4 mt-2 mb-1">

<!-- Copyright-->
<div class="container-fluid">
<p class="text-center m-0 py-1">
© 2017 Copyright <a href="https://getbootstrap.com/" class="text-white">Bootstrap 4</a>
</p>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>