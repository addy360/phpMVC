<?php
	class Posts {
		public function __construct(){
			echo "Posts class loaded and instantiated";
		}


		public function about($id){
			echo "heloo,,, from about method of Posts : ".$id;
		}
	}