<?php
    class productosController extends Controller{
        private $productos;

        public function __construct(){
            parent::__construct();
            $this->productos = $this->loadModel("productos");
        }

        public function generarTabla(){
            $elementos = $this->productos->getProductos();

            $table = '';
            foreach($elementos AS $f){

                $datos = json_encode($f);
                $table .= '
                <tr>
                    <td>'.$f['codigo'].'</td>
                    <td>'.$f['nombre'].'</td>
                    <td>'.$f['precio'].'</td>
                    <td>'.$f['descripcion'].'</td>
                    <td>'.$f['existencia'].'</td>
                    <td><button class="btn btn-primary editBoton"  data-p=\''.$datos.'\' data-target="#modalEditar" data-toggle="modal">Update</button></td>
                    <td><button class="btn btn-danger elimBoton"  data-elim="'.$f['codigo'].'">Delete</button></td>
                </tr>
                ';
            }

            return $table;
        }

        public function verproductos(){
            $this->_view->renderizar("ver");

        }

        public function verrecargas(){
            $this->_view->renderizar("recarga");
        }
    


        public function index(){
            Accesos::acceso('invitado');

            $this->_view->titulo = '
                <h6 class="m-0 font-weight-bold text-primary"><span class="fas fa-table"></span> Información General de los productos</h6>
            ';
            
            $this->_view->contenido = $this->generarTabla();

            $this->_view->renderizar("index");
        }

        public function add(){

            Accesos::acceso('registrador');
            
            if($this->getTexto("add") == "1"){
                $codigo = $this->getTexto("codigo");
                $nombre = $this->getTexto("nombre");
                $precio = $this->getTexto("precio");
                $descripcion = $this->getTexto("descripcion");
                $existencia = $this->getTexto("existencia");
                $this->productos->addProducto($codigo,$nombre,$precio,$descripcion,$existencia);
                $this->redireccionar("productos/index");
            }

            $this->_view->renderizar("agregarProducto");
        }

        public function update(){
                Accesos::acceso('admin');
                $id = $this->getTexto('id');
                $precio = $this->getTexto('precio');
                $existencia = $this->getTexto('existencia');
                $this->productos->upd($id,$precio,$existencia);

            echo $this->generarTabla();
        }

        public function delete(){
            Accesos::acceso('admin');
            $this->productos->eliminar($this->getTexto('id'));
            echo $this->generarTabla();
        }
    }