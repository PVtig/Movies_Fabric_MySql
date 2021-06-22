<?
// require_once './conect.php';
	class PageFactory{
		public function getPage($type){
			
			switch($type){
				case "movie": return new Movie;
				case "star": return new Star;
				default: throw new Exception("Error type");
			}
		}
	}