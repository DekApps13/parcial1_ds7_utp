<?php
    require_once("models/estudiante_models.php");

    #class 

    #estudiante_controllers
    
    class estudiante_controllers{
        public static function verData(){
            $data_est[] = new estudiante_models(1, "Meldrix", "Villarreal", rand(0, 100));
            $data_est[] = new estudiante_models(2, "Paola", "Hermosín", rand(0, 100));
            $data_est[] = new estudiante_models(3, "Agustín", "Laje", rand(0, 100));
            $data_est[] = new estudiante_models(4, "Doris", "Peña", rand(0, 100));
            $data_est[] = new estudiante_models(5, "Basilia", "Peña", rand(0, 100));
            $data_est[] = new estudiante_models(6, "Abel", "Bravo", rand(0, 100));
            $data_est[] = new estudiante_models(7, "Julieta", "Venegas", rand(0, 100));
            $data_est[] = new estudiante_models(8, "Gerald", "Peña", rand(0, 100));
            $data_est[] = new estudiante_models(9, "Samuel", "Gfeller", rand(0, 100));
            $data_est[] = new estudiante_models(10, "Jahir", "Montalvo", rand(0, 100));
            $data_est[] = new estudiante_models(11, "Adrian", "Escobar", rand(0, 100));
            return $data_est;
        }

    }

?>