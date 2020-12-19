<?php
    class errorController extends Controller{
        function __construct(){
            parent::__construct();
        }
        
        public function index(){}

        public function error($error){
            if($error == 504) $this->_view->error = 'La ruta no se ha encontrado';
            if($error == 503) $this->_view->error = 'No tienes los permisos suficientes';
            $this->_view->renderizar('error');
        }
    }