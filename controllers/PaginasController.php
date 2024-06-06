<?php

namespace Controllers;

use MVC\Router;

class PaginasController {

   public static function inicio(Router $router) {

      $router->renderizar('paginas/inicio', [
         'titulo' => 'Inicio'
      ]);
   }

}