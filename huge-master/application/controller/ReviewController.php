<?php 

class ReviewController extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
    {
        $this->View->render('review/index', array(
            'games' => ReviewModel::getAllReviews())
        );
    }
}