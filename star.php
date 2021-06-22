<?
require_once './conect.php';
class Star implements CRUD 
{	
	public function getPosts($pdo)
	{
		$statement = $pdo->query(SQL_GET_STARS);
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		$json = json_encode($result);
		print_r($json);
	}
	public function getPost( $pdo, $id)
	{
		$statement = $pdo->prepare(SQL_GET_MOVIE_WHERE_STAR);
		$statement->execute(array($id));
		$result = $statement->fetch(PDO::FETCH_ASSOC);
		print_r(json_encode($result));
	}
	public function addPost($pdo, $data )
	{
	// 	$name = $data['name'];
    // 	$surname = $data['surname'];
    // 	$description = $data['description'];

	// $stmt = $pdo->prepare(SQL_INSERT_STAR);
    //     $res = $stmt->execute(array(
    //         ':name' => $name, 
    //         ':surname' => $surname, 
    //         ':description' => $description, 
            
	// 	));
	// 	var_dump($res);

	}
	public function deletePost($pdo, $id)
	{
		// $statement = $pdo->prepare(SQL_DELETE_STAR);
		// $statement->execute(array($id));
	}
}
