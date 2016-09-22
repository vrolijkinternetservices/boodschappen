<?php require 'application/views/header.php' ?>
<h1>Boodschappenlijsten</h1>
<?php if (!empty($this->error_message)) { ?>
  <p color="red"><?php echo $this->error_message; ?></p>
<?php } ?>
<form method="post">
    <p><label for="title">Naam</label></p>
    <p><input type="text" name="title" /></p>
    <p><input type="submit" name="submit" value="Opslaan" /></p>
</form>
<?php require 'application/views/footer.php' ?>