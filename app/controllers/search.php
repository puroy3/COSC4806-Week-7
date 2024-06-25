<?php

class Search extends Controller {

    public function index() {
      $this->view('search/index');
    }
  
    public function movie($param = '') {
      if ($_REQUEST['search']) {
         $searchTerm = $_REQUEST['search'];
         header ( 'Location: /search/movie/' .$searchTerm);
         die;
      }
      
      $this->view('search/movie', ['movieTitle' => $param]);
}
}