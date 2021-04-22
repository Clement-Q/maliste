<?php

namespace App\Controller;

class TodolistsController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event) {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['index']);
    }

    public function index()
    {
        //$this->loadModel('Users');

        $todolists = $this->paginate($this->Todolists,['contain'=>['Users']]);


        $this->set(compact('todolists'));

    }



    public function new(){


        $this->loadModel('Todolists');
        $todo = $this->Todolists->newEmptyEntity();


        if($this->request->is(['post', 'put'])){
            $todo->title = $this->request->getData('title');
            $todo->visibility = $this->request->getData('visibility');
            $todo->user_id = $this->request->getAttribute('identity')->id;


            if( empty($this->request->getData('picture')->getClientFilename()) || !in_array($this->request->getData('picture')->getClientMediaType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/gif']) ){

                $this->Flash->error('L\'image est obligatoire et doit être au format png, jpg ou gif.');
            } else

                $ext = pathinfo($this->request->getData('picture')->getClientFilename(), PATHINFO_EXTENSION);

                $newName = 'pict-'.time().'-'.rand(0,9999999).'.'.$ext;

                $todo->picture = $newName;

                if( $this->Todolists->save($todo) ){

                    $this->request->getData('picture')->moveTo(WWW_ROOT.'img/data/pictures/'.$newName);

                    $this->Flash->success('Image sauvegardée');

                    return $this->redirect(['action' => 'index']);
                }else {
                    $this->Flash->error('Sauvegarde impossible');
                }
            }

        $this->set(compact('todo'));
        }


    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $track = $this->Todolists->get($id);

        if ($this->Todolists->delete($track)) {
            $this->Flash->success('Image supprimée');
        } else {
            $this->Flash->error('Impossible de supprimer l\'image');
        }

        return $this->redirect(['action' => 'index']);
    }


    public function view($id = null)
    {
        $todolist = $this->Todolists->findById($id)->firstOrFail();
        $this->set(compact('todolist'));

    }

    }


