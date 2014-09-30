<?php
class Users extends MX_Controller 
{

function __construct() {
parent::__construct();
}



function _in_you_go($username) {
    //give them a session variable and sent them to the admin panel
    
    $query = $this->get_where_custom('username', $username);
    foreach($query->result() as $row) {
        $user_id = $row->id;
    }
    
    
    $this->session->set_userdata('user_id', $user_id);
    
    redirect('dashboard/home');
}


function signout() {
   $this->session->set_userdata('user_id', '');
   redirect('home');
}



function submit() {
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required|max_length[30]|xss_clean');
		$this->form_validation->set_rules('pword', 'Password', 'required|max_length[30]|xss_clean|callback_pword_check');

		if ($this->form_validation->run($this) == FALSE)
		{
			$this->login();
		}
		else
		{
                        $username = $this->input->post('username', TRUE);
			$this->_in_you_go($username);
		}
}

function pword_check($pword) {
    
$username = $this->input->post('username', TRUE);

$pword = Modules::run('site_security/make_hash', $pword);


$this->load->model('mdl_users');
$result = $this->mdl_users->pword_check($username, $pword);
    
    
		if ($result == FALSE)
		{
			$this->form_validation->set_message('pword_check', 'Either the username and/or password is incorrect');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
}





function login() {
    $data['view_file'] = "loginform";
    $this->load->module('templates');
    $this->templates->public_one_col($data);
}




function get($order_by){
$this->load->model('mdl_users');
$query = $this->mdl_users->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_users');
$query = $this->mdl_users->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id){
$this->load->model('mdl_users');
$query = $this->mdl_users->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_users');
$query = $this->mdl_users->get_where_custom($col, $value);
return $query;
}

function _insert($data){
$this->load->model('mdl_users');
$this->mdl_users->_insert($data);
}

function _update($id, $data){
$this->load->model('mdl_users');
$this->mdl_users->_update($id, $data);
}

function _delete($id){
$this->load->model('mdl_users');
$this->mdl_users->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_users');
$count = $this->mdl_users->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_users');
$max_id = $this->mdl_users->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_users');
$query = $this->mdl_users->_custom_query($mysql_query);
return $query;
}








}