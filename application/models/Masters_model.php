<?php date_default_timezone_set('Asia/Kolkata');
class Masters_model extends CI_model{

    //department
		public function get_all_department(){
			$this->db->select('*');
			$this->db->where('type',"department");
		  	$this->db->order_by('name');
		  	$res = $this->db->get('master_department')->result();
		  	return $res;
		}
		public function get_a_department($edid){
			$this->db->select('*');
			$this->db->where('type',"department");
			$this->db->where('id',$edid);
		  	$res = $this->db->get('master_department')->result();
		  	return $res;
		}
  	public function insert_department(){
    	$data = array();
      	$s_data = array(
	        "name" => $this->input->post('name'),
	        "type" => "department",
	        "code" => $this->input->post('code'),
	        "header" => $this->input->post('header'),
	        "footer" => $this->input->post('footer'),
	        "collection" => $this->input->post('collection'),
	        "sign" => $this->input->post('sign'),
	        "status" => $this->input->post('status'),
	        "created_at" => date('Y-m-d H:i'),
	      );
      $set = $this->db->insert('master_department',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Inserted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }
    public function update_department(){
    $data = array();
      $s_data = array(
        	"name" => $this->input->post('name'),
	        "type" => "department",
	        "code" => $this->input->post('code'),
	        "header" => $this->input->post('header'),
	        "footer" => $this->input->post('footer'),
	        "collection" => $this->input->post('collection'),
	        "sign" => $this->input->post('sign'),
	        "status" => $this->input->post('status'),
	        "updated_at" => date('Y-m-d H:i'),
      );
      $this->db->where('id',$this->input->post('hidden_id'));
      $set = $this->db->update('master_department',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Update Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }
    public function delete_department(){
      $this->db->where('id', $this->input->post('delete_id'));
      $set = $this->db->delete('master_department');
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Deleted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }


  	//test_category
  	public function get_all_test_category(){
			$this->db->select('*');
		  	$this->db->order_by('name');
		  	$res = $this->db->get('master_test_category')->result();
		  	return $res;
		}

		public function insert_test_category(){
    	$data = array();
      	$s_data = array(
	        "name" => $this->input->post('name'),
	        "status" => $this->input->post('status'),
	        "created_at" => date('Y-m-d H:i'),
	      );
      $set = $this->db->insert('master_test_category',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Inserted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function get_a_test_category($edid){
			$this->db->select('*');
			$this->db->where('id',$edid);
		  	$res = $this->db->get('master_test_category')->result();
		  	return $res;
		}

    public function update_test_category(){
    $data = array();
      $s_data = array(
        	"name" => $this->input->post('name'),
	        "status" => $this->input->post('status'),
	        "updated_at" => date('Y-m-d H:i'),
      );
      $this->db->where('id',$this->input->post('hidden_id'));
      $set = $this->db->update('master_test_category',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Update Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function delete_test_category(){
      $this->db->where('id', $this->input->post('delete_id'));
      $set = $this->db->delete('master_test_category');
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Deleted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }


    //consultant_category
  	public function get_all_consultant_category(){
			$this->db->select('*');
		  	$this->db->order_by('name');
		  	$res = $this->db->get('master_consultant_category')->result();
		  	return $res;
		}

		public function insert_consultant_category(){
    	$data = array();
      	$s_data = array(
	        "name" => $this->input->post('name'),
	        "status" => $this->input->post('status'),
	        "created_at" => date('Y-m-d H:i'),
	      );
      $set = $this->db->insert('master_consultant_category',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Inserted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function get_a_consultant_category($edid){
			$this->db->select('*');
			$this->db->where('id',$edid);
		  	$res = $this->db->get('master_consultant_category')->result();
		  	return $res;
		}

    public function update_consultant_category(){
    $data = array();
      $s_data = array(
        	"name" => $this->input->post('name'),
	        "status" => $this->input->post('status'),
	        "updated_at" => date('Y-m-d H:i'),
      );
      $this->db->where('id',$this->input->post('hidden_id'));
      $set = $this->db->update('master_consultant_category',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Update Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function delete_consultant_category(){
      $this->db->where('id', $this->input->post('delete_id'));
      $set = $this->db->delete('master_consultant_category');
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Deleted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    //consultant
    public function get_all_consultant(){
			$this->db->select('*');
		  	$this->db->order_by('name');
		  	$res = $this->db->get('master_consultant')->result();
		  	return $res;
		}

		public function insert_consultant(){
    	$data = array();
      	$s_data = array(
	        "name" => $this->input->post('name'),
	        "degree" => $this->input->post('degree'),
	        "address" => $this->input->post('address'),
	        "area" => $this->input->post('area'),
	        "email" => $this->input->post('email'),
	        "mobile" => $this->input->post('mobile'),
	        "reg_no" => $this->input->post('reg_no'),
	        "consultant_category" => $this->input->post('consultant_category'),
	        "center" => $this->input->post('center'),
	        "status" => $this->input->post('status'),
	        "created_at" => date('Y-m-d H:i'),
	      );
      $set = $this->db->insert('master_consultant',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Inserted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function get_a_consultant($edid){
			$this->db->select('*');
			$this->db->where('id',$edid);
		  	$res = $this->db->get('master_consultant')->result();
		  	return $res;
		}

    public function update_consultant(){
    $data = array();
      $s_data = array(
        	"name" => $this->input->post('name'),
	        "status" => $this->input->post('status'),
	        "updated_at" => date('Y-m-d H:i'),
      );
      $this->db->where('id',$this->input->post('hidden_id'));
      $set = $this->db->update('master_consultant',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Update Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function delete_consultant(){
      $this->db->where('id', $this->input->post('delete_id'));
      $set = $this->db->delete('master_consultant');
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Deleted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    //collection_center
    public function get_all_collection_center(){
			$this->db->select('master_collection_center.*,master_city_tbl.m_city_name as city_name,master_processing_center.name as center_name');
      $this->db->join('master_city_tbl','master_city_tbl.m_city_id=master_collection_center.area','left');
       $this->db->join('master_processing_center','master_processing_center.id=master_collection_center.pro_center','left');
		  	$this->db->order_by('master_collection_center.name');
		  	$res = $this->db->get('master_collection_center')->result();
         // echo '<pre>';print_r($res);die();
		  	 return $res;
		}

		public function insert_collection_center(){
    	$data = array();
      	$s_data = array(
	        "name" => $this->input->post('name'),
	        "address" => $this->input->post('address'),
	        "area" => $this->input->post('area'),
	        "email" => $this->input->post('email'),
	        "alias" => $this->input->post('alias'),
	        "pro_center" => $this->input->post('pro_center'),
	        "mobile" => $this->input->post('mobile'),
	        "pro_center" => $this->input->post('pro_center'),
	        "lab_no" => $this->input->post('lab_no'),
	        "status" => $this->input->post('status'),
	        "created_at" => date('Y-m-d H:i'),
	      );
      $set = $this->db->insert('master_collection_center',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Inserted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function get_a_collection_center($edid){
			$this->db->select('*');
			$this->db->where('id',$edid);
		  	$res = $this->db->get('master_collection_center')->result();
		  	return $res;
		}

    public function update_collection_center(){
    $data = array();
      $s_data = array(
        	"name" => $this->input->post('name'),
          "address" => $this->input->post('address'),
          "area" => $this->input->post('area'),
          "email" => $this->input->post('email'),
          "alias" => $this->input->post('alias'),
          "pro_center" => $this->input->post('pro_center'),
          "mobile" => $this->input->post('mobile'),
          "pro_center" => $this->input->post('pro_center'),
          "lab_no" => $this->input->post('lab_no'),
          "status" => $this->input->post('status'),
	        "updated_at" => date('Y-m-d H:i'),
      );
      $this->db->where('id',$this->input->post('hidden_id'));
      $set = $this->db->update('master_collection_center',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Update Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function delete_collection_center(){
      $this->db->where('id', $this->input->post('delete_id'));
      $set = $this->db->delete('master_collection_center');
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Deleted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }


    //processing_center
    public function get_all_processing_center(){
      $this->db->select('master_processing_center.*,master_city_tbl.m_city_name as city_name,master_processing_center.name as center_name');
      $this->db->join('master_city_tbl','master_city_tbl.m_city_id=master_processing_center.area','left');
        $this->db->order_by('master_processing_center.name');
        $res = $this->db->get('master_processing_center')->result();
        return $res;
    }

    public function insert_processing_center(){
      $data = array();
        $s_data = array(
          "name" => $this->input->post('name'),
          "address" => $this->input->post('address'),
          "area" => $this->input->post('area'),
          "email" => $this->input->post('email'),
          "alias" => $this->input->post('alias'),
          "mobile" => $this->input->post('mobile'),
          "lab_no" => $this->input->post('lab_no'),
          "status" => $this->input->post('status'),
          "created_at" => date('Y-m-d H:i'),
        );
      $set = $this->db->insert('master_processing_center',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Inserted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function get_a_processing_center($edid){
      $this->db->select('*');
      $this->db->where('id',$edid);
        $res = $this->db->get('master_processing_center')->result();
        return $res;
    }

    public function update_processing_center(){
    $data = array();
      $s_data = array(
          "name" => $this->input->post('name'),
          "address" => $this->input->post('address'),
          "area" => $this->input->post('area'),
          "email" => $this->input->post('email'),
          "alias" => $this->input->post('alias'),
          "mobile" => $this->input->post('mobile'),
          "lab_no" => $this->input->post('lab_no'),
          "status" => $this->input->post('status'),
          "updated_at" => date('Y-m-d H:i'),
      );
      $this->db->where('id',$this->input->post('hidden_id'));
      $set = $this->db->update('master_processing_center',$s_data);
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Update Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

    public function delete_processing_center(){
      $this->db->where('id', $this->input->post('delete_id'));
      $set = $this->db->delete('master_processing_center');
      if(!empty($set)){
        $data['status'] = 'success';
        $data['message'] = 'Deleted Successfully!';
      }
      else{
        $data['status'] = 'fail';
        $data['message'] = 'Somthing went wrong!';
      }
      return json_encode($data);
    }

}
?>