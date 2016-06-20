<?php 

//dit is de dev branch

class ReviewController extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function ShowGameInfo($game_id)
	    {
	        if (1 == 1) {
	            $this->View->render('review/index', array(
	                'games' => ReviewModel::getAllReviews($game_id))
	            );
	        } else {
	            Redirect::home();
	        }
	    }
	  }