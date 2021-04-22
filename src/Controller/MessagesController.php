<?php

namespace App\Controller;

class MessagesController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');

        $messages = $this->Paginator->paginate($this->Messages->find());

        $this->Set(compact('messages'));
    }
}
