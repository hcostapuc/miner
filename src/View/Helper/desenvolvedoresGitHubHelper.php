<?php 
namespace App\View\Helper;

use Cake\View\Helper;

/**
 * Helper para manipular usuários do GitHub
 *
 * @author Lucas Andrey
 */
class desenvolvedoresGitHubHelper extends Helper
{
    
	/**
     * Retorna um array com os detalhes de um usuário
     *
     * @param $usuarioLogin
     * @return $usuarioDetalhes
     */
    public function exibeDetalhesPerfil($usuarioLogin)
    {
        $client = new \Github\Client();
        $usuarioDetalhes = $client->api('user')->show($usuarioLogin);
        
        return $usuarioDetalhes;
    }
}