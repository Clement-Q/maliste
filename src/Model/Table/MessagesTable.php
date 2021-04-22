<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class MessagesTable extends Table
{
    public function initialize(array $c) :void{
        parent::initialize($c);
        $this->addBehavior('Timestamp');


        $this->hasMany('Todolists', [
            'foreignKey' => '',
            'joinType' => 'INNER'
        ]);

        $this->hasMany('Items', [
            'foreignKey' => 'id',
            'joinType' => 'INNER'
        ]);

        $this->hasMany('Users', [
            'foreignKey' => 'id',
            'joinType' => 'INNER'
        ]);
    }


}
