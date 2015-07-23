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
     *
     * @return
     */
     public function index()
     {
         $client = new \Github\Client();

         $users = $client->api('user')->find('Thiago Silva');
         $this->set('usuarios', $users);
     }

     /**
     * Busca por Nome
     *
     * @param $filtro
     * @return usuarios
     */
     public function buscarPorNome($filtro)
     {
         $this->set('color', 'blue');
     }


}
