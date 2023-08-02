<?php
/**
 * ------------------------------------------------------------------------
 * Created by Codekop - HMVC v1.0
 * @link https://www.codekop.com/
 * @author Fauzan Falah
 * @github https://github.com/fauzan1892
 * 
 * This is sample code custom for HMVC with CodeIgniter 4.x
 * ------------------------------------------------------------------------
 *
 * File : Controllers/Home.php
 *
**/

namespace Modules\Web\Controllers;

use Templates\Controllers\BaseController;
// use Modules\Admin\Models\M_Home;

class Home extends BaseController
{
    // protected $myDb     = "mydb_name";
    // protected $myTable  = "mytbl_name";
    protected $viewPath = "Modules/Web/Views/home";

    public function __construct()
    {
        // $this->db = \Config\Database::connect();
    }

    /* Display web index */
    public function index()
    {
        $vData = [
            'title_web'     => 'CodeIgniter 4 HMVC',
            'view_template' => $this->viewPath.'/index',
        ];

        return modulesView("Templates/layouts/web", $vData);
    }

    /* Display web index/testpage */
    public function testPage()
    {
        $vData = [
            'title_web'     => 'Test Page',
            'view_template' => $this->viewPath.'/test_page',
        ];

        return modulesView("Templates/layouts/web", $vData);
    }
}
