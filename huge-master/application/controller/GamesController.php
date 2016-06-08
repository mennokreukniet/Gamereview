<?php 

class GamesController extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->View->render('games/index', array('games' => GamesModel::getAllGames())
		);
	}
}