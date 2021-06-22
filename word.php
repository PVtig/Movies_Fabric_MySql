<?
	class Movie implements CRUD
	{		
		public function getPosts($pdo)
	{
		
	}
	public function getPost($pdo, $id)
	{
		
	}
	public function addPost($pdo, $data )
	{
		$title = $data['title'];
    	$release_year = $data['release_year'];
    	$format = $data['format'];

	$stmt = $pdo->prepare(SQL_INSERT_MOVIE);
        $res = $stmt->execute(array(
            ':title' => $title, 
            ':release_year' => $release_year, 
            ':format' => $format, 
    
		));
		var_dump($res);

	}
	public function deletePost($pdo, $id)
	{
		// var_dump($id);
		$statement = $pdo->prepare(SQL_DELETE_MOVIE);
		$statement->execute(array($id));
	}
	}
	