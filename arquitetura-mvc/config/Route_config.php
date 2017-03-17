<?php

class Route_config {

    /**
     * @return array
     */
    public static function rotas(){

        return array(

            'ACCESS_OBJECT_DIR'         =>  'dao/AccessObject/',
            'URL_INI'                   =>  'http://localhost:8080/',//Mudar para url de produção
            'ACCESS_CONTROLLER'         =>  'controller/',
            'ACCESS_LIBRARIES'          =>  'libraries/',
            'CONNECTION_FACTORY_DIR'    =>  'dao/ConnectionFactory/',
            'CONFIG_DIR'                =>  'config/',
            'MODEL_DIR'                 =>  'model/',
            'VIEW_DIR'                  =>  'view/pages/',
            'ACCESS_DAO'                =>  'dao/access_object/',
            'HOME_PAGE_DIR'             =>  'home/home.php'
        );
    }
}

