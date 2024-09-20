<?php

namespace App;
use MF\Init\Bootstrap;


class Route extends Bootstrap{

   
    protected function initRoutes(){        
		
		$routes['index'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		$routes['autenticar'] = array(
			'route' => '/autenticar',
			'controller' => 'AuthController',
			'action' => 'autenticar'
		);
		$routes['home'] = array(
			'route' => '/home',
			'controller' => 'indexController',
			'action' => 'home'
		);
		$routes['cadastrarClientes'] = array(
			'route' => '/cadastrarClientes',
			'controller' => 'indexController',
			'action' => 'cadastrarClientes'
		);
		
		$routes['sair'] = array(
			'route' => '/sair',
			'controller' => 'AuthController',
			'action' => 'sair'
		);
	
      
      
       $this->setRoutes($routes);
     
    }
   
}

?>