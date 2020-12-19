<?php
    class productosModel extends Model{
        public function __construct(){
            parent::__construct();
        }

        public function getProductos($clave = null, $valor = null){
            $fila = $this->_db->query("SELECT * FROM productos")->fetchAll();
            return $fila;
        }

        public function addProducto($codigo,$nombre,$precio,$descripcion,$existencia){
            $this->_db->prepare("INSERT INTO productos(codigo,nombre,precio,descripcion,existencia) VALUES(:codigo,:nombre,:precio,:descripcion,:existencia)")->execute(array(
                "codigo" => $codigo,
                "nombre" => $nombre,
                "precio" => $precio,
                "descripcion" => $descripcion,
                "existencia" => $existencia,

            ));
        }

        public function upd($id,$precio,$existencia){
            $this->_db->prepare("UPDATE productos SET existencia = :exi, precio = :pre WHERE codigo = :cod")->execute(array(
                "cod" => $id,
                "pre" => $precio,
                "exi" => $existencia,
            ));
        }

        public function eliminar($id){
            $this->_db->prepare("DELETE FROM productos WHERE codigo = :cod")->execute(['cod'=>$id]);
        }
    }
    ?>

