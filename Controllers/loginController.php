<?php
    class loginController extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            if($this->getTexto('ingresar') == 1){
                if($this->getTexto('usuario') == 'hector' && $this->gettexto('clave') == '123'){
                    Accesos::setDatos('validados',true);
                    Accesos::setDatos('nombre','hector');
                    Accesos::setDatos('rol','admin');
                    $this->redireccionar('index');
                }
            }           

            $this->_view->renderizar("index");
        }

        public function salir(){
            Accesos::salir();
            $this->redireccionar('login');
        }
    }
  