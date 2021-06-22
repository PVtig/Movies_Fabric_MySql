<?
	class Movie implements CRUD
	{		
		public function getPosts($pdo)
	{
		$statement = $pdo->query(SQL_GET_MOVIES);
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		$json = json_encode($result);
		print_r($json);
	}
	public function getPost($pdo, $id)
	{
		
		$statement = $pdo->prepare(SQL_GET_MOVIE_NAME);
		$statement->execute(array($id));
		$result = $statement->fetch(PDO::FETCH_ASSOC);
		print_r(json_encode($result));
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
	