<?php

#habilita mensagens de erro.
ini_set('display_errors','On');
error_reporting(E_ALL | E_STRICT);

/**
 * Instancia a classe e faz chamada ao método que inicia a aplicação.
 */
require_once 'config/Auto_load_config.php';

session_start();

$controller = Request_config::getRequest('controller');
$action = Request_config::getRequest('action');
$route = Route_config::rotas();

    #Define um controle padrão caso nenhum seja especificado na url.
    if($controller == ''){
        #caso for vazio, vamos definir o controle padrão.
        $controller = "Home";

    }

    /*File_exists verifica se um determinado arquivo existe em um diretório*/
    if (file_exists($route['ACCESS_CONTROLLER'].$controller."_controller.php")) {

        # inclui o controle na página
        include_once $route['ACCESS_CONTROLLER'].$controller."_controller.php";

    } else {

        die("O controle <strong>{$controller}</strong> não existe na pasta controle do MVC");
    }

    #adiciona posfixo da nomeclatura das classes.
    $controller .= '_controller';

    # instancia o controle
    $controller = new $controller();

    #vamos definir um método padrão, caso nenhum seja passado.
    if( $action == ''){

        #caso não seja passada nenhuma action via url, vamos chamar a index, que será a padrao.
        $action = "index";

    }

    #method_exists verifica se um método existe
    if(method_exists($controller,  $action)){

        #caso exista executa o mesmo.
        $controller->$action();

    } else {

        die("Página não encontrada. ");

    }


