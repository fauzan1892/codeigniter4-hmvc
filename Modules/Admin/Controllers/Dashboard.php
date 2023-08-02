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
 * File : Controllers/Dashboard.php
 *
**/

namespace Modules\Admin\Controllers;

use Templates\Controllers\BaseController;
use Modules\Admin\Models\M_Dashboard;

class Dashboard extends BaseController
{
    // protected $myDb     = "mydb_name";
    // protected $myTable  = "mytbl_name";
    protected $viewPath = "Modules/Admin/Views/dashboard";

    public function __construct()
    {
        // $this->db = \Config\Database::connect();
    }

    /* Display a listing of the resource. */
    public function index()
    {
        $vData = [
            'title_web'     => 'Dashboard',
            'view_template' => $this->viewPath.'/index',
        ];

        return modulesView("Templates/layouts/admin", $vData);
    }
}
