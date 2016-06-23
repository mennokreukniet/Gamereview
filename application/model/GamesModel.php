<?php 

class GamesModel
{
	public static function getAllGames()
	{
		$db = DatabaseFactory::getFactory()->getConnection();

		$sql = "SELECT * FROM games";
		$query = $db->prepare($sql);
		$query->execute();
		
		return $query->fetchAll();
    }

    public static function filterGames($platform_id)
    {
    	$db = DatabaseFactory::getFactory()->getConnection();

		$sql = "SELECT * FROM games WHERE platform_id";
		$query = $db->prepare($sql);
		$query->execute();
		
		return $query->fetchAll();
    }
}
