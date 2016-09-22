<?php

class Boodschappenlijsten extends Controller {

  function __construct() {
    parent::__construct();
  }


  public function index() {
    $this->view->boodschappenlijsten = $this->model->getAll();
    $this->view->render('boodschappenlijsten/index');
  }


  public function add() {

    $submit = $this->request->post('submit');

    if (!empty($submit)) {

      $title = $this->request->post('title');

      if (!empty($title)) {
        $new_item = new Boodschappenlijsten_Model();
        $new_item->setColumnValue('title', $title);
        $new_item->save();
        $this->view->render('boodschappenlijsten/added');
      }
      else {
        $this->view->error->message = 'Titel is leeg';
        $this->view->render('boodschappenlijsten/add');
      }
    }
    else {
      $this->view->render('boodschappenlijsten/add');
    }
  }


  public function delete($id = 0) {

    if (!$id) {
      $error = new Error;
    }
    else {
     $this->model->deleteBoodschappenlijst($id);
     $this->view->render('boodschappenlijsten/deleted');
    }

  }

}