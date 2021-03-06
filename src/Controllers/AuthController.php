<?php
/**
 * File name: AuthController.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Controllers;
use Common\Authentication\PersistenceFactory;


/**
 * Class AuthController
 */
class AuthController extends Controller
{
    /**
     * Function execute
     *
     * @access public
     */
    public function action()
    {
        $postData = $this->request->getPost();

        $persistence = new PersistenceFactory();

        if ($postData->auth == 'in-memory')
        {
            $authenticate = $persistence->createInMemoryPersistence();
        }

        if ($postData->auth == 'file-based')
        {
            $authenticate = $persistence->createFileBasedPersistence($this->config);
        }

        $view = $authenticate->authenticate($postData->username, $postData->password);
        $view->show();

    }
}
