<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controller com as ações da tela Buscar Desenvolvedores do Github
 */
class BuscarDesenvolvedoresGithubController extends AppController
{
    /**
    * Carrega as informações iniciais da página
    */
    public function index() 
    {
        $this->set('color', 'pink');
    }

    /**
    * Busca por local
    *
    * @param filtro da busca 
    */
    public function buscarPorLocal($filtro)
    {
        $this->set('color', 'blue');
    }
}
