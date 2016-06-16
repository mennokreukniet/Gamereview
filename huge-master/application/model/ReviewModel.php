<?php 

class ReviewModel
{
	public static function getAllReviews()
	{
		$db = DatabaseFactory::getFactory()->getConnection();

		$sql = "SELECT * FROM games";
		$query = $db->prepare($sql);
		$query->execute();
		
		$query->fetch();
		return $query;
    }
}
