<?php

    class estudiante_models{
        private $id;
        private $nombre;
        private $apellido;
        private $calificacion;
        private $nota;
        private $color;

        public function __construct($id, $nombre, $apellido, $calificacion){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->calificacion = $calificacion;
            $this->setNota($calificacion);
        }
        
        public function getColor(){
            if ($this->calificacion < 61){
                $this->color = "danger";
            }elseif ($this->calificacion < 71){
                $this->color = "warning";
            }elseif ($this->calificacion < 81){
                $this->color = "secondary";
            }elseif ($this->calificacion < 91){
                $this->color = "info";
            }elseif ($this->calificacion <= 100) {
                $this->color = "success";
            }
            return $this->color;
        }

        public function setNota($c){
            if ($c < 61){
                $this->nota = "F";
            }elseif ($c < 71){
                $this->nota = "D";
            }elseif ($c < 81){
                $this->nota = "C";
            }elseif ($c < 91){
                $this->nota = "B";
            }elseif ($c <= 100) {
                $this->nota = "A";
            }
        }
        
        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function setCalificacion($calificacion){
            $this->calificacion = $calificacion;
        }

        public function getCalificacion(){
            return $this->calificacion;
        }

        public function getNota(){
            return $this->nota;
        }

    }

?>