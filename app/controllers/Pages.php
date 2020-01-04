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
				'title'=> 'The mini framework'
			];
			$this->view('pages/welcome', $data);
		}
	}