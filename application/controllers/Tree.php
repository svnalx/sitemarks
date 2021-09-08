<?php
/*=======================================
    TREE CONTROLLER
=======================================*/
class Tree extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Tree_model');
        $this->load->helper('url_helper');
        $this->load->library('session');      
    }

    public function index()
    {        
    }

    public function view($gid = '1')
    {
        $data['gid'] = $gid;
        
        $data['get_group_result'] = $this->Browse_model->get_group($gid);
        $data['get_group_left_right_values_result'] = $this->Browse_model->get_group_left_right_values($gid);
        $data['get_subgroup_ids_result'] = $this->Browse_model->get_subgroup_ids
            ($data['get_group_left_right_values_result']);
        $data['get_webmarks_result'] = $this->Browse_model->get_webmarks
            ($data['get_subgroup_ids_result']);
        $data['title'] = $data['get_group_result']['g_name'];
        
        if (isset($_POST['add-group']))
        {
            $this->Browse_model->add_new_group
                (
                $_POST['new-group-name'],
                $gid
                );
        }
        
        $data['group_tree_array'] = $this->CI_Model->get_group_tree(); 
        
        $this->load->view('templates/header', $data);
            //$this->load->view('templates/diagnostics', $data);
        $this->load->view('templates/left-panel-1', $data); // quick list
            $this->load->view('browse/group-tree', $data);
        $this->load->view('templates/left-panel-2', $data); // group tree
            $this->load->view('browse/quicklist', $data);
        $this->load->view('templates/right-panel-1', $data); // breadcrumb
        $this->load->view('templates/right-panel-2', $data); // suggest link
        $this->load->view('templates/right-panel-3', $data); // easy entry form
            $this->load->view('browse/breadcrumb', $data);
            $this->load->view('browse/easy-entry-forms', $data);
            $this->load->view('browse/search-box', $data);
        $this->load->view('templates/right-panel-4', $data); // results table
            if ( ! empty($data['get_webmarks_result']))
            {
                $this->load->view('browse/results-table', $data);
            } else {
                //
            }
        $this->load->view('templates/footer');  
    }
}
?>