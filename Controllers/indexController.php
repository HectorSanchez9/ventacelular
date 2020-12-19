<?php
    class indexController extends Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            if(Accesos::getDatos('validados')) $this->_view->renderizar("index");
            else $this->redireccionar('login');
        }
    }