<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controller com as ações da tela Buscar Desenvolvedores do Github
 *
 * @author Lucas Andrey
 */
class BuscarDesenvolvedoresGithubController extends AppController
{
     /**
     * Carrega as informações iniciais da página
     *
     * @return void
     */
     public function index()
     {
        //informações iniciais
     }

     /**
     * Busca usuários do GitHub por nome
     *
     * @param $filtro
     * @return void
     */
    public function buscaPorNome()
    {
        $filtro = $this->request->data['nome'];
        $client = new \Github\Client();
        $usuarios = $client->api('user')->find($filtro);

        $this->set('usuarios', $usuarios);
        $this->set('quantidadeUsuarios', count($usuarios['users']));
    }
}
