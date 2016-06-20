<?php 

class ReviewModel
{
	public static function getAllReviews($game_id)
	{
		$db = DatabaseFactory::getFactory()->getConnection();

		$sql = "SELECT * FROM games WHERE id = $game_id";
		$query = $db->prepare($sql);
		$query->execute();
		
		return $query->fetch();
    }
}
