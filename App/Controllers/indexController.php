<?php
namespace App\Controllers;

class IndexController
{
  private $view;

  public function __construct(){
    $this->view = new \stdClass();
  }

  public function index(){
    $this->view->dados = array('sofá','cadeira','cama');
    $this->render('index');
  }

  public function sobreNos(){
    $this->view->dados = array('notebook','smartphone');
    $this->render('sobreNos');
  }
  
  public function render($view) {
    $classeAtual = get_class($this);
    
    $classeAtual = str_replace('App\\Controllers\\', '', $classeAtual);
    
    $classeAtual = strtolower(str_replace('Controller', '', $classeAtual));

    require_once "../App/views/".$classeAtual."/".$view.".phtml";
  }
}
