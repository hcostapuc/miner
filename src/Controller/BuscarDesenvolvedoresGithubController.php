<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controller com as ações da buscar de desenvolvedores do Github
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
       // TODO: autenticação de usuário
     }

    /**
    * Busca usuários do GitHub por local
    *
    * @return void
    */
   public function buscaPorLocal()
   {
       // TODO: usar usuário autenticado
       $filtro = $this->request->data['local'];

       $client = new \Github\Client(new \Github\HttpClient\CachedHttpClient(
           array('cache_dir' => '/tmp/github-api-cache')));
       $usuarios = $client->api('user')->find($filtro);

       $this->set('usuarios', $usuarios);
       $this->set('quantidadeUsuarios', count($usuarios['users']));
   }

   /**
   * Busca usuários do GitHub por linguagem
   *
   * @return void
   */
  public function buscaPorLinguagem()
  {
       // TODO: autenticação de usuário
      $filtro = $this->request->data['linguagem'];

      $client = new \Github\Client(new \Github\HttpClient\CachedHttpClient(
          array('cache_dir' => '/tmp/github-api-cache')));
      $usuarios = $client->api('user')->find($filtro);

      $this->set('usuarios', $usuarios);
      $this->set('quantidadeUsuarios', count($usuarios['users']));
  }
}
