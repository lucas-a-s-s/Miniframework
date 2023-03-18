<?php
namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends action
{
  public function index(){
    $this->view->dados = array('sofá','cadeira','cama');
    $this->render('index','layout1');
  }

  public function sobreNos(){
    $this->view->dados = array('notebook','smartphone');
    $this->render('sobreNos','layout2');
  }
  
}
