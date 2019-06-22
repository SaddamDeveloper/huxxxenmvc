<?php
  class Pages extends Controller{
    public function __construct(){
      
    }

    public function index(){
      $data = [
        'title' => 'Welcome to HuxxxenMVC'
      ];
      echo $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About us'
      ];
      echo $this->view('pages/about', $data);
    }
  }
