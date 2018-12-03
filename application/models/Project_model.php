<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Project_model extends CI_Model{

		public function state_details()
		{
			return $this->db->select('state')->order_by('state')->group_by('state')->get('projectdetails')->result_array();
		}

		public function division_details($state)
		{
			return $this->db->select('division')->where('state',$state)->group_by('division')->order_by('division')->get('projectdetails')->result_array();
		}

		public function district_details($division)
		{
			return $this->db->select('district')->where('division',$division)->group_by('district')->order_by('district')->get('projectdetails')->result_array();
		}

		public function taluka_details($district)
		{
			return $this->db->select('taluka')->where('district',$district)->group_by('taluka')->order_by('taluka')->get('projectdetails')->result_array();
		}

		public function village_details($taluka)
		{
			return $this->db->select('village')->where('taluka',$taluka)->group_by('village')->order_by('village')->get('projectdetails')->result_array();
		}

		public function project_details($where)
		{
			return $this->db->select('name,status,promoter,projectdetails.*')->from('projectdetails')->join('projects','projects.id=project_id')->where($where)->get()->result_array();
		}

		public function new_project($data)
		{
			return $this->db->insert('projects',$data);
		}

		public function category_details()
		{
			return $this->db->get('material_category')->result_array();
		}

		public function subcategory_details($cat_id)
		{
			return $this->db->from('material_subcategory')->join('material_category','material_subcategory.category_id=material_category.category_id')->where('material_subcategory.category_id',$cat_id)->get()->result_array();
		}
	}
?>
