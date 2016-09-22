<?php require 'application/views/header.php' ?>
<h1>Boodschappenlijst: <?php echo $this->boodschappenlijst->getTitle(); ?></h1>
Het item is verwijderd!<br />
<br />
<a href="../../../boodschappenlijsten_items/index/<?php echo $this->boodschappenlijst->getId(); ?>">Terug</a>
<?php require 'application/views/footer.php' ?>