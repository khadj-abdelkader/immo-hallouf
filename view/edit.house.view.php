<?php ob_start() ?>

<form method="POST" action="<?= URL ?>houses/editvalid">
  <div class="form-group">
    <label for="title">Titre du logement</label>
    <input type="text" class="form-control" value="<?= $house->getTitre()()?>" name="title" id="title">
  </div>
  <div class="form-group">
    <label for="address">Adresse</label>
    <input type="text" class="form-control" value="<?= $house->getAdresse()?>" name="address" id="address">
  </div>
  <div class="form-group">
    <label for="town">Ville</label>
    <input type="text" class="form-control" value="<?= $house->getVille()?>" name="town" id="town">
  </div>
  <div class="form-group">
    <label for="zipCode">Code Postal</label>
    <input type="text" class="form-control" value="<?= $house->getCp()?>" name="zipCode" id="zipCode">
  </div>
  <div class="form-group">
    <label for="surface">Surface</label>
    <input type="number" class="form-control" value="<?= $house->getSurface()?>" name="surface" id="surface">
  </div>
  <div class="form-group">
    <label for="price">Prix</label>
    <input type="number" class="form-control" value="<?= $house->getPrix()?>" name="price" id="price">
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="text" class="form-control" value="<?= $house->getPhoto()?>" name="photo" id="photo">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" value="<?= $house->getDescription()?>" name="description" id="description">
  </div>
  <input type="hidden" name="id-house" value="<?= $house->getIdLogement()?>">
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>

<?php
$content =  ob_get_clean();
$title = "Édition de: " . $house->getTitre();
require_once "base.html.php";
?>