<?php

class InkomenModel
{
    public static function getAllInkomen()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM inkomen";
        $query = $database->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }

    //Create a new game (add a new game to the database)
    public static function createInkomen($game)
    {
        if (!$game || strlen($game) == 0) {
            Session::add('feedback_negative', Text::get('FEEDBACK_PLATFORM_CREATION_FAILED'));
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "INSERT INTO inkomen (`game`) VALUES ('$game')";
        $query = $database->prepare($sql);
        $query->execute();
       
        return $query->fetch();

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_PLATFORM_CREATION_FAILED'));
        return false;
    }

    //Get a single game (in order to edit)
    public static function getInkomen($id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM inkomen WHERE id = $id";
        $query = $database->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

   	//Update an existing game.
     public static function updateInkomen($game, $id)
    {
        if (!$id || strlen($game) == 0) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "UPDATE inkomen SET game='$game' WHERE id=$id";
        $query = $database->prepare($sql);
        $query->execute();
        
        return $query->fetch();

        if ($query->rowCount() == 1) {
            return true;
        }

        Session::add('feedback_negative', Text::get('FEEDBACK_PLATFORM_EDITING_FAILED'));
        return false;
    }

    //delete a game
    public static function deleteInkomen($id)
    {
        if (!$id) {
            return false;
        }

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "DELETE FROM inkomen WHERE id = $id LIMIT 1";
        $query = $database->prepare($sql);
        $query->execute();

        if ($query->rowCount() == 1) {
            return true;
        }

        // default return
        Session::add('feedback_negative', Text::get('FEEDBACK_PLATFORM_DELETION_FAILED'));
        return false;
    }
}