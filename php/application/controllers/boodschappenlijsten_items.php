<?php

class Boodschappenlijsten_items extends Controller {


  public function index($list_id = 0) {

    if (!$list_id) {
      $error = new Error;
    }
    else {

      $this->view->boodschappenlijst  = Boodschappenlijsten_Model::getByPrimaryKey($list_id);
      $this->view->boodschappenlijst_items = $this->model->getByBoodschappenlijstId($list_id);
      $this->view->render('boodschappenlijsten_items/index');
    }
  }


  public function add($list_id = 0) {

    $this->view->boodschappenlijst  = Boodschappenlijsten_Model::getByPrimaryKey($list_id);
    $submit = $this->request->post('submit');

    if (!empty($submit)) {
      $description = $this->request->post('description');

      if (!empty($description)) {
        $new_item = new Boodschappenlijsten_items_Model();
        $new_item->setColumnValue('description', $description);
        $new_item->setColumnValue('boodschappenlijst_id', $list_id);
        $new_item->save();
        $this->view->render('boodschappenlijsten_items/added');
      }
      else {
        $this->view->error->message = 'Beschrijving is leeg';
        $this->view->render('boodschappenlijsten_items/add');
      }
    }
    else {
      $this->view->boodschappenlijst  = Boodschappenlijsten_Model::getByPrimaryKey($list_id);
      $this->view->render('boodschappenlijsten_items/add');
    }
  }


  public function delete($list_id = 0, $id = 0) {

    if (!$list_id || !$id) {
      $error = new Error;
    }
    else {
      $this->view->boodschappenlijst  = Boodschappenlijsten_Model::getByPrimaryKey($list_id);
      $this->model->deleteBoodschappenlijst_item($id);
      $this->view->render('boodschappenlijsten_items/deleted');
    }

  }

}