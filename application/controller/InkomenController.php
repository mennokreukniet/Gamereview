<?php 

class InkomenController extends Controller
{
	 public function __construct()
    {
        parent::__construct();

        // VERY IMPORTANT: All controllers/areas that should only be usable by logged-in users
        // need this line! Otherwise not-logged in users could do actions. If all of your pages should only
        // be usable by logged-in users: Put this line into libs/Controller->__construct
        Auth::checkAuthentication();
    }

    public function index()
    {
        $this->View->render('inkomen/index', array(
            'inkomen' => InkomenModel::getAllInkomen()
        ));
    }

    public function create()
    {
        InkomenModel::createInkomen(Request::post('inkomen'));
        Redirect::to('inkomen');
    }

    public function edit($id)
    {
        $this->View->render('inkomen/edit', array(
            'inkomen' => InkomenModel::getInkomen($id)
        ));
    }

    public function editSave()
    {
        InkomenModel::updateInkomen(Request::post('inkomen'), Request::post('id'));
        Redirect::to('inkomen');
    }

    public function delete($id)
    {
        InkomenModel::deleteInkomen($id);
        Redirect::to('inkomen');
    }
}