<?php
namespace App\View\Helper;

use Cake\View\Helper;

define('ESTILO', 'style="font-size: 20px"');

/**
 * Helper para transformar conteúdo em icones
 *
 * @author Lucas Andrey
 */
class IconeHelper extends Helper
{

	  /**
    * Retorna um icone de acordo com a linguagem
    *
    * @param string $linguagem  nome da linguagem a ser convertida
    * @return string $icone  tag correspondente à linguagem
    */
    public function transformaLiguagemEmIcone($linguagem)
    {

        switch ($linguagem) {
            case 'Java':
                $icone = '<i class="icon-java" '.ESTILO.'></i> Java';
                break;
            case 'PHP':
                $icone = '<i class="icon-php" '.ESTILO.'></i> PHP';
                break;
            case 'Clojure':
                $icone = '<i class="icon-clojure" '.ESTILO.'></i> Clojure';
                break;
            case 'CSS':
                $icone = '<i class="icon-css" '.ESTILO.'></i> CSS';
                break;
            case 'HTML':
                $icone = '<i class="icon-html" '.ESTILO.'></i> HTML';
                break;
            case 'Ruby':
                $icone = '<i class="icon-ruby" '.ESTILO.'></i> Ruby';
                break;
            case 'JavaScript':
                $icone = '<i class="icon-javascript" '.ESTILO.'></i> JavaScript';
                break;
            case 'Python':
                $icone = '<i class="icon-python" '.ESTILO.'></i> Python';
                break;
            case 'Perl':
                $icone = '<i class="icon-perl" '.ESTILO.'></i> Perl';
                break;
            case 'C':
                $icone = '<i class="icon-c" '.ESTILO.'></i>';
                break;
            case 'C++':
                $icone = '<i class="icon-cplusplus" '.ESTILO.'></i>';
                break;
            case 'Objective-C':
                $icone = '<i class="icon-objc" '.ESTILO.'></i> Objective-C';
                break;
            case 'C#':
                $icone = '<i class="icon-csharp" '.ESTILO.'></i>';
                break;
            case 'Scala':
                $icone = '<i class="icon-scala" '.ESTILO.'></i> Scala';
                break;
            case 'Haskell':
                $icone = '<i class="icon-haskell" '.ESTILO.'></i> Haskell';
                break;
            case 'Shell':
                $icone = '<i class="icon-shell" '.ESTILO.'></i> Shell';
                break;
            case null:
                $icone = '<i class="fa fa-code" '.ESTILO.'></i> Desconhecido';
            default:
                $icone = '<i class="fa fa-code" '.ESTILO.'></i> '. $linguagem;
                break;
        }
        return $icone;
    }
}
