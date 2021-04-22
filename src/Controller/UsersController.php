<?php

namespace App\Controller;

class UsersController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        //autorise l'action login et add de ce controller seulement
        $this->Authentication->addUnauthenticatedActions(['login', 'new', 'profil']);

    }

    public function index()
    {
        $users = $this->Users->find('all');
        $this->set(compact('users'));

    }


    public function profil($username = null)
    {

        $profil = $this->Users->findByUsername($username);

        if($profil->isEmpty()){

        }

        $profil = $profil->first();



        if ($this->request->is(['post', 'put'])) {

            $profil->username = $this->request->getData('username');
           // $profil->newpassword = $this->request->getData('newpassword');

            if (empty($this->request->getData('avatar')->getClientFilename()) ||
                !in_array($this->request->getData('avatar')->getClientMediaType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'])) {

                $this->Flash->error('L\'image est obligatoire et doit être au format png, jpg ou gif.');

            } else {

                $ext = pathinfo($this->request->getData('avatar')->getClientFilename(), PATHINFO_EXTENSION);

                $newName = 'avatar-' . time() . '-' . rand(0, 9999999) . '.' . $ext;

                $profil->avatar = $newName;

                if ($this->Users->save($profil)) {
                    $this->request->getData('avatar')->moveTo(WWW_ROOT . 'img/data/pictures/' . $newName);

                    $this->Flash->success('Compte crée');

                    return $this->redirect(['action' => 'login']);
                } else {
                    $this->Flash->error('Création impossible impossible');
                }
            }
        }

        $this->set(compact('profil'));
    }




	public function new(){

        $n = $this->Users->newEmptyEntity();

        if($this->request->is(['post', 'put'])){
            $n->username = $this->request->getData('username');
            $n->password = $this->request->getData('password');

            if( empty($this->request->getData('avatar')->getClientFilename()) || !in_array($this->request->getData('avatar')->getClientMediaType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/gif']) ){

                $this->Flash->error('L\'image est obligatoire et doit être au format png, jpg ou gif.');

            } else
                {

                $ext = pathinfo($this->request->getData('avatar')->getClientFilename(), PATHINFO_EXTENSION);
                $newName = 'pict-'.time().'-'.rand(0,9999999).'.'.$ext;
                $n->avatar = $newName;

                if ( $this->Users->save($n) )
                {
                    $this->request->getData('avatar')->moveTo(WWW_ROOT.'img/data/pictures/'.$newName);

                    $this->Flash->success('Compte crée');

                    return $this->redirect(['action' => 'login']);
                }
                else
                    {
                        $this->Flash->error('Création impossible impossible');
                    }
            }
        }

        $this->set(compact('n'));
	}





	public function login(){
		if($this->request->is(['post'])){

			$res = $this->Authentication->getResult();

			if($res->isValid()){
				$this->Flash->success('Welcome back');
				return $this->redirect(['controller' => 'Todolists', 'action' => 'index']);
			}else{
				$this->Flash->error('Identifiants incorrects');
			}
		}
	}


	public function logout(){
		$result = $this->Authentication->getResult();
		$this->Authentication->logout();
		$this->Flash->success('À plus tard 😊');
		return $this->redirect(['action' => 'login']);
	}

}
