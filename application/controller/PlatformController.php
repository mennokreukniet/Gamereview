<?php

/**
 * The platform controller: Just an example of simple create, read, update and delete (CRUD) actions.
 */
class PlatformController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // VERY IMPORTANT: All controllers/areas that should only be usable by logged-in users
        // need this line! Otherwise not-logged in users could do actions. If all of your pages should only
        // be usable by logged-in users: Put this line into libs/Controller->__construct
        Auth::checkAuthentication();
    }

    /**
     * This method controls what happens when you move to /platform/index in your app.
     * Gets all platforms (of the user).
     */
    public function index()
    {
        $this->View->render('platform/index', array(
            'platform' => PlatformModel::getAllPlatforms()
        ));
    }

    /**
     * This method controls what happens when you move to /dashboard/create in your app.
     * Creates a new platform. This is usually the target of form submit actions.
     * POST request.
     */
    public function create()
    {
        PlatformModel::createPlatform(Request::post('platform'));
        Redirect::to('platform');
    }

    /**
     * This method controls what happens when you move to /platform/edit(/XX) in your app.
     * Shows the current content of the platform and an editing form.
     * @param $platform_id int id of the platform
     */
    public function edit($id)
    {
        $this->View->render('platform/edit', array(
            'platform' => PlatformModel::getPlatform($id)
        ));
    }

    /**
     * This method controls what happens when you move to /platform/editSave in your app.
     * Edits a platform (performs the editing after form submit).
     * POST request.
     */
    public function editSave()
    {
        PlatformModel::updatePlatform(Request::post('platform'), Request::post('id'));
        Redirect::to('platform');
    }

    /**
     * This method controls what happens when you move to /platform/delete(/XX) in your app.
     * Deletes a platform. In a real application a deletion via GET/URL is not recommended, but for demo purposes it's
     * totally okay.
     * @param int $platform_id id of the platform
     */
    public function delete($id)
    {
        PlatformModel::deletePlatform($id);
        Redirect::to('platform');
    }
}
