<?php

class Boodschappenlijsten_items_Model extends Model {

  protected static $tableName = 'boodschappen_boodschappenlijsten_items';
  protected static $primaryKey = 'id';

  function getId() {
    return $this->columns['id'];
  }

  function getDescription() {
    return $this->columns['description'];
  }

  function getBoodschappenlijst() {
    return Boodschappenlijsten_Model::getByPrimaryKey(self::getId());
  }

  function getByBoodschappenlijstId($list_id = 0) {
    if (!$list_id) {
      $error = new Error;
    }
    elseif ($list_id = (int) $list_id) {  // security, must be number
      return self::getAll(array("boodschappenlijst_id = '$list_id'"));
    }
  }

  function deleteBoodschappenlijst_item($id = 0) {

    if ($list_id = (int) $list_id) {  // security, must be number
      $db = Database::getInstance();
      $db->exec("DELETE FROM " . self::$tableName . " WHERE id = '$id'");
    }

  }

}