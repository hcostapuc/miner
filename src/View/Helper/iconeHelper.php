<?php 
namespace App\View\Helper;

use Cake\View\Helper;

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
     * @param $linguagem
     * @return $icone
     */
    public function transformaLiguagemEmIcone($linguagem)
    {
    	$estilo = 'style="font-size:20px"';

        switch ($linguagem) {
            case 'Java':
                $icone = '<i class="icon-java" ' . $estilo . '></i> Java';
                break;
            case 'PHP':
                $icone = '<i class="icon-php" ' . $estilo . '></i> PHP';
                break;
            case 'Clojure':
                $icone = '<i class="icon-clojure" ' . $estilo . '></i> Clojure';
                break;
            case 'CSS':
                $icone = '<i class="icon-css" ' . $estilo . '></i> CSS';
                break;
            case 'HTML':
                $icone = '<i class="icon-html" ' . $estilo . '></i> HTML';
                break;
            case 'Ruby':
                $icone = '<i class="icon-ruby" ' . $estilo . '></i> Ruby';
                break;
            case 'JavaScript':
                $icone = '<i class="icon-javascript" ' . $estilo . '></i> JavaScript';
                break;
            case 'Python':
                $icone = '<i class="icon-python" ' . $estilo . '></i> Python';
                break;
            case 'Perl':
                $icone = '<i class="icon-perl" ' . $estilo . '></i> Perl';
                break;
            case 'C':
                $icone = '<i class="icon-c" ' . $estilo . '></i> C';
                break;
            case 'C++':
                $icone = '<i class="icon-cplusplus" ' . $estilo . '></i> C++';
                break;
            case 'Objective-C':
                $icone = '<i class="icon-objc" ' . $estilo . '></i> Objective-C';
                break;
            case 'C#':
                $icone = '<i class="icon-csharp" ' . $estilo . '></i> C#';
                break;
            case 'Scala':
                $icone = '<i class="icon-scala" ' . $estilo . '></i> Scala';
                break;
            case 'Haskell':
                $icone = '<i class="icon-haskell" ' . $estilo . '></i> Haskell';
                break;
            case 'Shell':
                $icone = '<i class="icon-shell" ' . $estilo . '></i> Shell';
                break;
            
            default:
                $icone = '<i class="fa fa-code" ' . $estilo . '></i>';
                break;
        }
        return $icone;
    }
}