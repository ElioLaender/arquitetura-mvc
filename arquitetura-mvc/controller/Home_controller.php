<?php


require_once 'config/Auto_load_config.php';


class Home_controller extends Controller_config {

    protected $view;
    private $route,
    		$objBase;

    /*renderiza a página home */
    public function index(){

        $this->route = Route_config::rotas();
        $this->objBase = new Base_dao();

        $this->view->set('select_base_data', $this->objBase->selectBase());
        $this->view->render($this->route['HOME_PAGE_DIR']);
    }

    public function insertBase(){

        $this->objBase = new Base_dao();
        $this->objBase->InsertBase(Request_config::getRequest('name'));

    }

    public function updateBase(){

    	$this->objBase = new Base_dao();
        $this->objBase->updateBase(Request_config::getRequest('name'),Request_config::getRequest('ref'));
    }

   public function deleteBase(){

	    $this->objBase = new Base_dao();
        $this->objBase->deleteBase(Request_config::getRequest('ref'));
    }

    

}


