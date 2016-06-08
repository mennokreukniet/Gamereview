<?php 

class GamesModel
{
	public static function getAllGames()
	{
		$db = DatabaseFactory::getFactory()->getConnection();

		$sql = "SELECT * FROM games";
		$query = $db->prepare($sql);
		$query->execute();
		
		$query->fetch();
		return $query;
    }
}