<?php

class Reminders extends Controller {

    public function index() {
      $this->view('reminders/index');
      die;
    }

    public function test() {
      echo "test"; die;
      $this->view('reminders/index');
      die;
    }
}
?>