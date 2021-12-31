<?php ob_start();
?>

<table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th>Titre</th>
      <th>Adresse</th>
      <th>Ville</th>
      <th>Code postal</th>
      <th>Surface</th>
      <th>Prix</th>
      <th>Photo</th>
      <th>Type</th>
      <th>Description</th>
      <th colspan="9">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach( $houses as $house ) : ?>
        <tr>
            <td><?= $house->getTitre()?></td>
            <td><?= $house->getAdresse()?></td>
            <td><?= $house->getVille()?></td>
            <td><?= $house->getCp()?></td>
            <td><?= $house->getSurface()?></td>
            <td><?= $house->getPrix()?></td>
            <td><?= $house->getPhoto()?></td>
            <td><?= $house->getType()?></td>
            <td><?= $house->getDescription()?></td>
            <td><a href="<?= URL ?>house/edit/<?= $house->getIdLogement() ?>"><i class="fas fa-edit"></i></a></td>
            <td>
              <form action="<?= URL ?>house/delete/<?= $house->getIdLogement() ?>" method="post" 
                            onSubmit=" return confirm('Êtes-vous certain de vouloir supprimer cette annonce ?')">
                <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
            </form>
            </td>
        </tr>      
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?= URL ?>house/add"  class="btn btn-success w-25 d-block m-auto">Ajouter une annonce</a>

<?php
$content = ob_get_clean();
$title = "Liste d'annonces immobilières";
require_once "base.html.php";
?>