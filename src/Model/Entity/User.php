<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'photo' => true,
        'username' => true,
        'password' => true,
        'name' => true,
        'lastname' => true,
        'bio' => true,
        'email' => true,
        'phone' => true,
        'recomendation' => true,
        'adress_id' => true,
        'adres' => true,
        'userstype' => true,
    ];
}
