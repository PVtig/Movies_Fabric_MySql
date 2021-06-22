<?
	interface CRUD{
		public function getPosts($pdo);
		public function getPost($pdo, $id);
		public function addPost($pdo, $data);
		public function deletePost($pdo, $id);
	};