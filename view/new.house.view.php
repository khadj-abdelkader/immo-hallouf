<?php ob_start() ?>

<form method="POST" action="<?= URL ?>houses/hvalid">
  <div class="form-group">
    <label for="title">Titre du logement</label>
    <input type="text" class="form-control" name="title" id="title">
  </div>
  <div class="form-group">
    <label for="address">Adresse</label>
    <input type="text" class="form-control" name="address" id="address">
  </div>
  <div class="form-group">
    <label for="town">Ville</label>
    <input type="text" class="form-control" name="town" id="town">
  </div>
  <div class="form-group">
    <label for="zipCode">Code Postal</label>
    <input type="text" class="form-control" name="zipCode" id="zipCode">
  </div>
  <div class="form-group">
    <label for="surface">Surface</label>
    <input type="number" class="form-control" name="surface" id="surface">
  </div>
  <div class="form-group">
    <label for="price">Prix</label>
    <input type="number" class="form-control" name="price" id="price">
  </div>
  <div class="form-group">
    <label for="address">Adresse</label>
    <input type="number" class="form-control" name="address" id="address">
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="text" class="form-control" name="photo" id="photo">
  </div>
  <div class="form-group">
    <label for="type">Type</label>
    <input type="number" class="form-control" name="type" id="type">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="number" class="form-control" name="description" id="description">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<?php
$content =  ob_get_clean();
$title = "Ajouter une annonce";
require_once "base.html.php";
?>