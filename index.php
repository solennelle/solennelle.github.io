<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="bootstrap.css" rel="stylesheet" media="all" type="text/css">

  <title>My Precious</title>
  <link href="https://fonts.googleapis.com/css?family=Merienda+One|Permanent+Marker|Roboto|Source+Sans+Pro" rel="stylesheet"> 
</head>

<body>
  <!-- <h1>Hello, world!</h1> -->

<?php require 'header.html' ?>

    <!-- Carrousel -->
  <main class="container ">
      <div class="carousel">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Images/dark_vador.jpg" class="d-block img-carousel w-100" alt="fellowship try to destroy the ring">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Sauron is a very good bro,</h5>
                  <p class="text-carousel">Please help him find his ring ! </p>
                  <p class=" col-sm-3 offset-7">- d. v. </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Images/gandalf2.jpg" class="d-block img-carousel w-100" alt="Who is Sauron">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Who is really our master Sauron?</h5>
                  <p class="text-carousel">10 surprising facts about our master Sauron!</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="Images/fellowship.jpg" class="d-block img-carousel w-100" alt="Hobbit meat">
                <div class="carousel-caption d-none d-md-block">
                  <h5>3 easy recipes made from Hobbit meat. </h5>
                  <p class="text-carousel">Cook a delicious, healthy and nutritious meal.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
          </div>
        </div>
      </div>

    <section id="fellows">
      <h2><span class="chara-spe">Ij </span>Fellows wanted dead <span class="under-title">(or alive if you want to eat them later) </span><span class="chara-spe"> Ij</span></h2>
      <!-- Pills-->
      
      <div class="row justify-content-center">
        <div class="pills ">
          <a href="#" class="badge badge-most"><span class="deco">w </span>Most wanted<span class="deco"> w</span></a>
          <a href="#" class="badge badge-most "><span class="deco">w </span>Most dangerous<span class="deco"> w</span></a>
          <a href="#" class="badge badge-most "><span class="deco">w </span>Already captured<span class="deco"> w</span></a>
        </div>
      </div>

      <!-- Cards-->
      <div class="row justify-content-center">

        <div class="col-md-3">
          <div class="card card_fellow" >
            <img src="Images/gandalf.png" class="card-img-top " alt="The Wizard">
            <div class="card-img-overlay">
              <p class="contenu_worth ">Reward <span class="red">1000</span> gold coins</p>
              <p class="contenu_titre justify-content-center">Gandalf</p>
            </div>
              
              <p class="card-text">A very dangerous wizard, Balrog killer...</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card card_fellow" >
            <img src="Images/aragorn.png" class="card-img-top" alt="Aragorn">
            <div class="card-img-overlay">
              <p class="contenu_worth">Reward <span class="red">800</span> gold coins</p>
              <p class="contenu_titre justify-content-center">Äragorn</p>
            </div>
              
            <p class="card-text">Sauron's finger says him his sword is dangerous...</p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card card_fellow" >
            <img src="Images/gimli.png" class="card-img-top" alt="Gimli">
            <div class="card-img-overlay">
              <p class="contenu_dead">dead</p>*
              <div class ="align-items-center">
                <p class="contenu_titre line_through">Gimli</p>
              </div>
            </div>
              
            <p class="card-text">A dwarf, with a beard and an axe...</p>
          </div>
        </div>
    	</div>

    </section>

    <section id="reward">
      <h2><span class="chara-spe">Ij </span>I've captured one of them, how to get my reward?<span class="chara-spe"> Ij</span> </h2>
      <div class="row">
        <p class="col-md-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit error, officia quae facere ad nulla quidem incidunt exercitationem sed excepturi culpa commodi debitis consequatur aperiam accusantium quaerat, laboriosam blanditiis assumenda.</p>
        <img class="justify-content-end rounded-circle" src="Images/coin_sauron.png" alt="Get Your Reward">
        <button type="button" class="btn btn-light col-md-3 offset-4">Contact us</button>
      </div>

    </section>

    <section id="hunters">
      <h2><span class="chara-spe">Ij </span>Best Hunters<span class="chara-spe"> Ij</span></h2>
      <!-- Media object -->
      <div class="row">
        <div class="media col-sm-6">
          <img src="Images/hunter1.png" class="align-self-center mr-3 img_hunter" alt="ElvesKiller22">
          <div class="media-body">
            <h5 class="mt-0">ElvesKiller22</h5>
            <p>2 captures - <a href="https://www.facebook.com/ElvesKiller22"> Profile </a></p>
            <a href="https://www.facebook.com/like/ElvesKiller22"><img src ="https://via.placeholder.com/30" alt="Like on Facebook"></a>
          </div>
        </div>
        <div class="media col-sm-6">
          <img src="Images/hunter2.png" class="align-self-center mr-3 img_hunter" alt="Goblin45">
          <div class="media-body">
            <h5 class="mt-0">Goblin45</h5>
            <p>1 capture - <a href="https://www.facebook.com/ElvesKiller22"> Profile </a></p>
            <a href="https://www.facebook.com/like/ElvesKiller22"><img src ="https://via.placeholder.com/30" alt="Like on Facebook"></a>
          </div>
        </div>
      </div>
    </section>

    <section id="ring">
      <h2><span class="chara-spe">Ij </span>About the ring<span class="chara-spe"> Ij</span></h2>
      <!-- Cards -->
      <div class="card">
        <h5 class="card-header card-header-ring">Ring Capabilities</h5>
        <div class="card-body">
          <h5 class="card-title">What can our master Sauron do with the Ring?</h5>
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th>Feature</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Main</td>
                <td>One ring to rule them all</td>
              </tr>
              <tr>
                <td>Invisibility</td>
                <td>You can't see me</td>
              </tr>
              <tr>
                <td>Power</td>
                <td>Destroy the world</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- Cards -->
      <div class="card">
        <h5 class="card-header card-header-ring">
          Why is the ring awesome?
        </h5>
        <div class="card-body">
          <blockquote class=" blockquote mb-0 row">
            <p class="col-sm-10">My preciooooooousssssss ! Hrk Hrk, we want our preecioooooouuusssss !!</p>
            <img class="justify-content-end rounded-circle" src="Images/gollum.png" alt="Comment">
            <footer class="blockquote-footer col-sm-2 offset-8">Gollum</footer>
          </blockquote>
        </div>
      </div>

    </section>

    <section id="army">
      <h2> <span class="chara-spe">Ij </span>Join Mordor Army, we need you ! <span class="chara-spe"> Ij </span></h2>
      <div class="row">
        <p class="col-sm-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit error, officia quae facere ad nulla quidem incidunt exercitationem sed excepturi culpa commodi debitis consequatur aperiam accusantium quaerat, laboriosam blanditiis assumenda.</p>
        <img class="justify-content-end col-sm-5" src="Images/army.png" alt="Mordor Army">
        <img class="col-sm-4" src="Images/weneedyou-1.png" alt="We need you">
          <div class="col-sm-5 offset-1 special-text-army">
            <p>More info on</p>
            <button type="button" class="btn btn-dark">sauronrulesthemall.com</button>
          </div>
      </div>
    </section>

    <section id="contact">

      <h2><span class="chara-spe">Ij </span>Contact us<span class="chara-spe"> Ij </span></h2>
            <div class="row">
      <form class="col-sm-5"> 
        <div class="form-group email">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">@</div>
            </div>
            <input type="email" class="form-control" id="enterEmail" placeholder="name@example.com">
          </div>
        </div>
        <div class="form-group adress">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">🏠</div>
            </div>
            <input type="text" class="form-control" id="enterAddress" placeholder="Enter Your Address">
          </div>
        </div>
        <div>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
          <option selected>Your reason for contacting us</option>
          <option value="1">I have seen one of them</option>
          <option value="2">I have captured one of them</option>
          <option value="3">I have killed one of them</option>
        </select>
        </div>
        <div>
          <!-- message form -->
          <textarea rows="4" cols="30" id="message" placeholder="Write your message here"></textarea>
        </div>
        <div>
          <button type="submit" class="btn btn-light">Submit</button>
        </div>
      </form>
      <img class="justify-content-start col-sm-5 offset-2" src="Images/map.png" alt="Map">
  </div>
    </section>
  </main>
  <?php require 'footer.html' ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>