<?php

class MainController {

  public function home() {
    $this->show('home');
  }

  public function about(){
    $this->show('about',['title'=>'About']);
  }

  public function aboutMe(){
    $this->show('autor', ['title'=> 'Who am I ?','day'=>date('l \t\h\e jS')]);
  }

  public function err404(){
    $this->show('404');
  }


  private function show($viewName, $viewVars=[]){

    $baseUrl = dirname($_SERVER['SCRIPT_NAME']);
    require __DIR__."/../views/header.part.php";
    require __DIR__."/../views/$viewName.tpl.php";
    require __DIR__."/../views/footer.part.php";
  }
}