<?php require 'application/views/header.php' ?>
<h1>Boodschappenlijsten</h1>
<a href="boodschappenlijsten/add">Boodschappenlijst toevoegen</a><br />
<br />
<?php if (count($this->boodschappenlijsten) > 0) { ?>
<table>
  <tr>
    <td><strong>ID</strong></td>
    <td><strong>Naam</strong></td>
  </tr>
  <? foreach($this->boodschappenlijsten as $boodschappenlijst) { ?>
  <tr>
    <td style="width: 50px;"><?php echo $boodschappenlijst->getId(); ?></td>
    <td style="width: 300px;"><?php echo $boodschappenlijst->getTitle(); ?></td>
    <td><a href="boodschappenlijsten_items/index/<?php echo $boodschappenlijst->getId() ;?>">wijzigen</a>
    <td><a href="boodschappenlijsten/delete/<?php echo $boodschappenlijst->getId() ;?>">verwijderen</a>
  </tr>
  <?php } ?>
</table>
<?php } else { ?>
  Geen boodschappenlijsten
<?php } ?>
<?php require 'application/views/footer.php' ?>