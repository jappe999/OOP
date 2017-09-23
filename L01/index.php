<?php
    /**
     * @author Stephan Hoeksema
     * @author Jasper van der Linden
     *
     * P01L01
     */

     require 'classes/Person.php';
     $person = new Person($_GET);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Page</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <img src="L01/public/images/wf-logo.png" >
        <h1 class="display-3">ADSD 2017-2018</h1>
        <p class="lead">Les 1</p>
    </div>
</div>
<div class="container-fluid row">
    <!-- Left colon -->
    <div class="col-md-2"></div>

    <!-- Main colon -->
    <div class="col-md-8 row">
      <div class="col-md-6">
        <ul>
          <li><b>Naam:</b> <?= $person->getName(); ?></li>
          <li><b>Adres:</b> <?= $person->getAddress(); ?></li>
          <li><b>Email:</b> <?= $person->getEmail(); ?></li>
          <li><b>Mobiel:</b> <?= $person->getMobile(); ?></li>
          <li><b>Land:</b> <?= $person->getCountry(); ?></li>
        </ul>
      </div>
      <div class="col-md-6">
        <form action="index.php" method="get">
          <div class="form-group">
            <label for="name">Naam:</label>
            <input id="name" class="form-control" type="text" name="name" placeholder="Naam">
          </div>
          <div class="form-group">
            <label for="address">Adres:</label>
            <input id="address" class="form-control" type="text" name="address" placeholder="Adres">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input id="email" class="form-control" type="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="mobile">Mobiel:</label>
            <input id="mobile" class="form-control" type="tel" name="mobile" placeholder="Mobiel">
          </div>
          <div class="form-group">
            <label for="country">Land:</label>
            <input id="country" class="form-control" type="text" name="country" placeholder="Land">
          </div>
          <input type="submit" value="Verzenden" class="pull-right">
        </form>
      </div>
    </div>

    <!-- Right colon -->
    <div class="col-md-2"></div>
</div>

<!-- BOOTSTRAP JS/jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
