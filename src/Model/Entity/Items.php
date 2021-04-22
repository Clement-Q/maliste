<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;


class Items extends Entity{

	protected $_accessible = [
		'*' => true,
		'id' => false
	];

}
