<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ItemsTable extends Table{


	public function initialize(array $c) :void{
		parent::initialize($c);
		$this->addBehavior('Timestamp');
        $this->addBehavior('Image');

		$this->belongsTo('Users', [
			'foreignKey' => 'id',
			'joinType' => 'INNER'
		]);

		$this->belongsTo('Todolists', [
			'foreignKey' => 'user_id',
			'joinType' => 'INNER'
		]);
	}


	public function validationDefault(Validator $v) : Validator{

		$v->notEmptyString('username');

		return $v;
	}

}
