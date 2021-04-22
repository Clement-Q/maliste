<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table{


    public function initialize(array $c) :void{
        parent::initialize($c);
        $this->addBehavior('Timestamp');
        $this->addBehavior('Image');


        $this->hasMany('Todolists', [
            'foreignKey' => '',
            'joinType' => 'INNER'
        ]);

        $this->hasMany('Items', [
            'foreignKey' => 'id',
            'joinType' => 'INNER'
        ]);
    }


    public function validationDefault(Validator $v) : Validator{

        $v->maxLength('username', 30)
            ->notEmptyString('username');

        return $v;
    }

}
