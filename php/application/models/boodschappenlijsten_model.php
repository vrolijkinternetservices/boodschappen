<?php

class Boodschappenlijsten_Model extends Model {

  protected static $tableName = 'boodschappen_boodschappenlijsten';
  protected static $primaryKey = 'id';

  function getId() {
    return $this->columns['id'];
  }

  function getTitle() {
    return $this->columns['title'];
  }

  function deleteBoodschappenlijst($id = 0) {
    if ($id = (int) $id) {  // security, must be number
      $db = Database::getInstance();
      $db->exec("DELETE FROM " . self::$tableName . " WHERE id = '$id'");
    }
  }

}