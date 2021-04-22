<?php

namespace App\Controller;

class ItemsController extends AppController{


	public function new(){

		$new = $this->Comments->newEmptyEntity();
		if($this->request->is('post')){
			$new = $this->Comments->patchEntity($new, $this->request->getData());
			$new->user_id = $this->request->getAttribute('id')->id;
			if($this->Comments->save($new)){
				$this->Flash->success('Saved');
			}else{
				$this->Flash->error('Try again');
			}
		}
		return $this->redirect(['controller' => 'Todolists', 'action' => 'index', '#' => 'index'.$new->picture_id]);
	}
}
