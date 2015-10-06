<?php

// src/Model/Table/UsersTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{


    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('username')
            ->requirePresence('username')
            ->notEmpty('email')
            ->requirePresence('email')
            ->notEmpty('role')
            ->requirePresence('role')
            ->notEmpty('password')
            ->requirePresence('password');

        return $validator;
    }
}
