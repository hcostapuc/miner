<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity.
 * @author Fellipe de Oliveira Couto
 */
class User extends Entity
{

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
