<?php defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Masters extends CI_Controller
{
	
	public function department()
	{
		$data = $this->login_details();
		$data['pagename'] = "Department";
		$data['all_value'] = $this->Masters_model->get_all_department();
		$this->load->view('department', $data);
	}
	public function add_department()
	{
		$data = $this->login_details();
		$data['pagename'] = "Add Department";
		$this->load->view('add_department', $data);
	}
	public function edit_department()
	{
		$data = $this->login_details();
		$data['pagename'] = "Edit Department";
		$data['edid'] = $this->input->get('edid');
		$data['a_value'] = $this->Masters_model->get_a_department($data['edid']);
		$this->load->view('edit_department', $data);
	}
	public function insert_department(){
		echo $this->Masters_model->insert_department();
	}
	public function update_department(){
		echo $this->Masters_model->update_department();
	}
	public function delete_department(){
		echo $this->Masters_model->delete_department();;
	}

	//test_category
	public function test_category()
	{
		$data = $this->login_details();
		$data['pagename'] = "Test Category";
		$data['all_value'] = $this->Masters_model->get_all_test_category();
		$this->load->view('test_category', $data);
	}

	public function add_test_category()
	{
		$data = $this->login_details();
		$data['pagename'] = "Add Test Category";
		$this->load->view('add_test_category', $data);
	}

	public function insert_test_category(){
		echo $this->Masters_model->insert_test_category();
	}
	public function edit_test_category()
	{
		$data = $this->login_details();
		$data['pagename'] = "Edit Test Category";
		$data['edid'] = $this->input->get('edid');
		$data['a_value'] = $this->Masters_model->get_a_test_category($data['edid']);
		$this->load->view('edit_test_category', $data);
	}
	public function update_test_category(){
		echo $this->Masters_model->update_test_category();
	}
	public function delete_test_category(){
		echo $this->Masters_model->delete_test_category();;
	}

	//consultant_category
	public function consultant_category()
	{
		$data = $this->login_details();
		$data['pagename'] = "Consultant Category";
		$data['all_value'] = $this->Masters_model->get_all_consultant_category();
		$this->load->view('consultant_category', $data);
	}

	public function add_consultant_category()
	{
		$data = $this->login_details();
		$data['pagename'] = "Add Consultant Category";
		$this->load->view('add_consultant_category', $data);
	}

	public function insert_consultant_category(){
		echo $this->Masters_model->insert_consultant_category();
	}
	public function edit_consultant_category()
	{
		$data = $this->login_details();
		$data['pagename'] = "Edit Consultant Category";
		$data['edid'] = $this->input->get('edid');
		$data['a_value'] = $this->Masters_model->get_a_consultant_category($data['edid']);
		$this->load->view('edit_consultant_category', $data);
	}
	public function update_consultant_category(){
		echo $this->Masters_model->update_consultant_category();
	}
	public function delete_consultant_category(){
		echo $this->Masters_model->delete_consultant_category();;
	}

	//consultant
	public function consultant()
	{
		$data = $this->login_details();
		$data['pagename'] = "Consultant";
		$data['all_value'] = $this->Masters_model->get_all_consultant();
		$this->load->view('consultant', $data);
	}

	public function add_consultant()
	{
		$data = $this->login_details();
		$data['pagename'] = "Add Consultant";
		$this->load->view('add_consultant', $data);
	}

	public function insert_consultant(){
		echo $this->Masters_model->insert_consultant();
	}
	public function edit_consultant()
	{
		$data = $this->login_details();
		$data['pagename'] = "Edit Consultant";
		$data['edid'] = $this->input->get('edid');
		$data['a_value'] = $this->Masters_model->get_a_consultant($data['edid']);
		$this->load->view('edit_consultant', $data);
	}
	public function update_consultant(){
		echo $this->Masters_model->update_consultant();
	}
	public function delete_consultant(){
		echo $this->Masters_model->delete_consultant();;
	}

	//collection_center
	public function collection_center()
	{
		$data = $this->login_details();
		$data['pagename'] = "Collection Center";
		$data['all_value'] = $this->Masters_model->get_all_collection_center();
		$this->load->view('collection_center', $data);
	}

	public function add_collection_center()
	{
		$data = $this->login_details();
		$data['pagename'] = "Add Collection Center";
		$this->load->view('add_collection_center', $data);
	}

	public function insert_collection_center(){
		echo $this->Masters_model->insert_collection_center();
	}
	public function edit_collection_center()
	{
		$data = $this->login_details();
		$data['pagename'] = "Edit Collection Center";
		$data['edid'] = $this->input->get('edid');
		$data['a_value'] = $this->Masters_model->get_a_collection_center($data['edid']);
		$this->load->view('edit_collection_center', $data);
	}
	public function update_collection_center(){
		echo $this->Masters_model->update_collection_center();
	}
	public function delete_collection_center(){
		echo $this->Masters_model->delete_collection_center();;
	}









	//Login Deatils
	protected function login_details(){
		$this->require_login();
		$data['log_user_dtl'] = $this->Login_model->user_details();
		return $data;
	}
	protected function require_login(){
		$is_user_in = $this->session->userdata('is_user_in');
		if (isset($is_user_in) || $is_user_in == true) {
			return;
		} else {
			redirect('Login');
		}
	}
	protected function ajax_login() {
		$is_user_in = $this->session->userdata('is_user_in');
		if (isset($is_user_in) || $is_user_in == true) {
			return true;
		} else {
			echo json_encode(array('status' => 'error', 'message' => 'You are not Logged in Now!! Please login again.'));
			return false;
		}
	}
}
?>