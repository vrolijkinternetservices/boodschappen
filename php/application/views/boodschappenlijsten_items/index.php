<?php require 'application/views/header.php' ?>
<h1>Boodschappenlijst: <?php echo $this->boodschappenlijst->getTitle(); ?></h1>
<a href="../../boodschappenlijsten_items/add/<?php echo $this->boodschappenlijst->getId(); ?>">Item toevoegen</a>&nbsp;&nbsp;
<a href="../../boodschappenlijsten">Terug naar overzicht</a><br />
<br />
<?php if (count($this->boodschappenlijst_items) > 0) { ?>
<table>
  <tr>
    <td><strong>ID</strong></td>
    <td><strong>Beschrijving</strong></td>
  </tr>
  <? foreach($this->boodschappenlijst_items as $item) { ?>
  <tr>
    <td style="width: 50px;"><?php echo $item->getId(); ?></td>
    <td style="width: 300px;"><?php echo $item->getDescription(); ?></td>
    <td><a href="../../boodschappenlijsten_items/delete/<?php echo $this->boodschappenlijst->getId(); ?>/<?php echo $item->getId() ;?>">verwijderen</a>
  </tr>
  <?php } ?>
</table>
<?php } else { ?>
  Geen items
<?php } ?>
<?php require 'application/views/footer.php' ?>