<?php

	class Pages extends Controller{
		public function __construct(){
			$this->postModel = $this->model('Post');
		}

		public function index(){
			$posts = $this->postModel->getPosts();
			$data = [
				'posts' => $posts,
				'welcome'=> 'Hey hi, let\'s have fun,' ,
				'title'=> 'Addy360 Mini framework'
			];
			$this->view('pages/welcome', $data);
		}
	}