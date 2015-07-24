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
         
     }

     /**
     * Busca por Nome
     *
     * @param $filtro
     * @return usuarios
     */
     public function buscaPorNome()
     {
         $filtro = $this->request->data['nome'];
         $client = new \Github\Client();
         $users = $client->api('user')->find($filtro);
 
         $this->set('usuarios', $users);
         $this->set('filtro', $filtro);
     }

}
