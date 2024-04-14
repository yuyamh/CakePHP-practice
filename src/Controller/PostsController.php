<?php
namespace App\Controller;

class PostsController extends AppController
{
    // public $autoRender = false;

    public $paginate = [
        'limit' => 10,
        'order' => [
            'Posts.created' => 'desc'
        ],
        'contain' => ['Users', 'Tags']
    ];

    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('test');
    }

    public function index()
    {
        $posts = $this->paginate($this->Posts->find());
        $this->set(compact('posts'));
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Users', 'Tags'],
        ]);
        $this->set(compact('post'));
    }

}
