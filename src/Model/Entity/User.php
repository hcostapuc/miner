<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity.
 * @author Fellipe de Oliveira Couto
 */
class User extends Entity
{

    /**
     * Criptografa a senha(password) usando hash
     *
     * @author Fellipe de Oliveira Couto
     * @param $value|senha a ser criptografada
     */
    protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'email' => true,
        'name' => true,
        'lastname' => true,
        'usertype' => true,
        'city' => true,
        'state' => true,
        'coutry' => true,
    ];
}
