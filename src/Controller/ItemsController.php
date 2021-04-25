<?php

namespace App\Controller;

class ItemsController extends AppController{



public function view(){



    $this->loadModel('Items');

$new = $this->Items->newEmptyEntity();
		if($this->request->is('post')){

            $new = $this->Items->patchEntity($new, $this->request->getData());
            $new->user_id = $this->request->getAttribute('identity')->id;
            if($this->Items->save($new)){
                $this->Flash->success('Saved');
            }else{
                $this->Flash->error('Try again');
            }
        }
	//	return $this->redirect(['controller' => 'Pictures', 'action' => 'index', '#' => 'picture'.$new->picture_id]);
	}

}



