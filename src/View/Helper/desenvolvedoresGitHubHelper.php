<?php
namespace App\View\Helper;

use Cake\View\Helper;

define('MENSAGEM_CARACTERISTICA_INDISPONIVEL', "Não disponível.");

/**
 * Helper para manipular usuários do GitHub
 *
 * @author Lucas Andrey
 */
class DesenvolvedoresGitHubHelper extends Helper
{

	  /**
    * Retorna um array com os detalhes de um usuário do GitHub de acordo com o Login
    *
    * @param string $usuarioLogin  login do usuário no GitHub
    * @return array $usuarioDetalhes  detalhes do perfil do usuário no GitHub
    */
    public function exibeDetalhesPerfil($usuarioLogin)
    {
        $client = new \Github\Client();
        $usuarioDetalhes = $client->api('user')->show($usuarioLogin);

        return $usuarioDetalhes;
    }

    /**
    * Exibe a localização do usuário do GitHub de acordo com a disponibilidade
    * da característica
    *
    * @param string $localizacao  localização do usuário do GitHub
    * @return string $localizacao|MENSAGEM_CARACTERISTICA_INDISPONIVEL  localização
    * do usuário ou MENSAGEM_CARACTERISTICA_INDISPONIVEL caso a localização esteja
    * indisponível
    */
    public function exibeLocalizacao($localizacao)
    {
      if (is_null($localizacao) || empty($localizacao)) {
        return MENSAGEM_CARACTERISTICA_INDISPONIVEL;
      }

      return $localizacao;
    }

    /**
    * Exibe a empresa do usuário do GitHub de acordo com a disponibilidade
    * da característica
    *
    * @param string $empresa  empresa do usuário do GitHub
    * @return string $empresa  empresa do usuário ou
    *  MENSAGEM_CARACTERISTICA_INDISPONIVEL caso a empresa esteja indisponível
    */
    public function exibeEmpresa($empresa)
    {
      if (is_null($empresa) || empty($empresa)) {
        return MENSAGEM_CARACTERISTICA_INDISPONIVEL;
      }

      return $empresa;
    }

    /**
    * Exibe o email do usuário do GitHub de acordo com a disponibilidade
    * da característica
    *
    * @param string $email  email do usuário do GitHub
    * @return string $email  email do usuário ou
    *  MENSAGEM_CARACTERISTICA_INDISPONIVEL caso a email esteja indisponível
    */
    public function exibeEmail($email)
    {
      if (is_null($email) || empty($email)) {
        return MENSAGEM_CARACTERISTICA_INDISPONIVEL;
      }

      return $email;
    }
}
