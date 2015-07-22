<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Adress
 * @property \Cake\ORM\Association\BelongsTo $Userstype
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('name');
        $this->primaryKey(['id', 'userstype_id']);
        $this->addBehavior('Timestamp');
        $this->belongsTo('Adress', [
            'foreignKey' => 'adress_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Userstype', [
            'foreignKey' => 'userstype_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->allowEmpty('photo');
            
        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
            
        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');
            
        $validator
            ->allowEmpty('name');
            
        $validator
            ->allowEmpty('lastname');
            
        $validator
            ->allowEmpty('bio');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email');
            
        $validator
            ->add('phone', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('phone');
            
        $validator
            ->allowEmpty('recomendation');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['adress_id'], 'Adress'));
        $rules->add($rules->existsIn(['userstype_id'], 'Userstype'));
        return $rules;
    }
}
