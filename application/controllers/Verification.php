<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Verification extends EduAppGT 
{
    /*
        Software: EduAppGT PRO - School Management System
        Author: GuateApps - Software, Web and Mobile developer.
        Author URI: https://guateapps.app.
        PHP: 5.6+
        Created: 27 September 16.
    */
    
    function __construct() 
    {
        parent::__construct();
        $this->load->model('crud');
        $this->load->database();
        $this->load->library('session');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');    
    }

    public function index() 
    {
        redirect(base_url(), 'refresh');
    }

    public function qr()
    {
        parse_str(substr(strrchr($_SERVER['REQUEST_URI'], "?"), 1), $_GET);
        $student_id = base64_decode($_GET['data']);
        $page_data['student_id'] = $student_id;
        $this->load->view('backend/qr',$page_data);
    }

}