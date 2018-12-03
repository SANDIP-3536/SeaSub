<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['flash']['active'] = $this->session->flashdata('active');
    	$data['flash']['title'] = $this->session->flashdata('title');
    	$data['flash']['text'] = $this->session->flashdata('text');
    	$data['flash']['type'] = $this->session->flashdata('type');
		$this->load->view('login_details',$data);
	}

	public function user_subsea_cv()
	{
		if(!(isset($this->session->userdata['subsea_user']))){
			redirect('/');
		}else{
			$user_id = $this->session->userdata['subsea_user'];
			$data['user_personal_details'] = $this->db->query("SELECT user_tbl.*,CASE when user_division = 1 then 'Diving' when user_division = 2 then 'Subsea Inst. Engg.' when user_division = 3 then 'Marine' else 'NA' end as user_division_details FROM `user_tbl` where user_id=".$user_id."")->result_array();
			$data['kin_details'] = $this->db->query("SELECT kin_tbl.* FROM `kin_tbl` where kin_user_id=".$user_id."")->result_array();
			$data['medical_details'] = $this->db->query("SELECT medical_tbl.* FROM `medical_tbl` where medical_user_id=".$user_id."")->result_array();
			$data['CSR_details'] = $this->db->query("SELECT csr_tbl.* FROM `csr_tbl` where CSR_user_id=".$user_id."")->result_array();
			$data['diving_details'] = $this->db->query("SELECT diving_tbl.* FROM `diving_tbl` where diving_user_id=".$user_id."")->result_array();
			$data['engg_details'] = $this->db->query("SELECT engg_tbl.* FROM `engg_tbl` where engg_user_id=".$user_id."")->result_array();
			$data['mgnt_details'] = $this->db->query("SELECT mgnt_tbl.* FROM `mgnt_tbl` where mgnt_user_id=".$user_id."")->result_array();
			$data['marine_details'] = $this->db->query("SELECT marine_tbl.* FROM `marine_tbl` where marine_user_id=".$user_id."")->result_array();
			$data['STCW_details'] = $this->db->query("SELECT stcw_tbl.* FROM `stcw_tbl` where STCW_user_id=".$user_id."")->result_array();
			$data['SME_details'] = $this->db->query("SELECT sme_tbl.* FROM `sme_tbl` where SME_user_id=".$user_id."")->result_array();
			$data['CSR_PRT_details'] = $this->db->query("SELECT csr_prt_tbl.* FROM `csr_prt_tbl` where CSR_user_id=".$user_id."")->result_array();
			$data['DPM_details'] = $this->db->query("SELECT dpm_tbl.* FROM `dpm_tbl` where DPM_user_id=".$user_id."")->result_array();
			$data['DOM_details'] = $this->db->query("SELECT dom_tbl.* FROM `dom_tbl` where DoM_user_id=".$user_id."")->result_array();
			$data['SDS_details'] = $this->db->query("SELECT sds_tbl.* FROM `sds_tbl` where SDS_user_id=".$user_id."")->result_array();
			$data['prj_engg_details'] = $this->db->query("SELECT prj_engg_tbl.* FROM `prj_engg_tbl` where Prj_Engg_user_id=".$user_id."")->result_array();
			$data['field_engg_details'] = $this->db->query("SELECT field_engg_tbl.* FROM `field_engg_tbl` where Field_Engg_user_id=".$user_id."")->result_array();
			$data['DSV_details'] = $this->db->query("SELECT dp_dsv_tbl.* FROM `dp_dsv_tbl` where DP_DSV_user_id=".$user_id."")->result_array();
			$data['MWS_details'] = $this->db->query("SELECT mws_tbl.* FROM `mws_tbl` where MWS_user_id=".$user_id."")->result_array();
			$data['ROV_details'] = $this->db->query("SELECT rov_tbl.* FROM `rov_tbl` where ROV_user_id=".$user_id."")->result_array();
			$data['LSS_details'] = $this->db->query("SELECT lss_tbl.* FROM `lss_tbl` where LSS_user_id=".$user_id."")->result_array();
			$data['SAT_DIV_details'] = $this->db->query("SELECT sat_div_tbl.* FROM `sat_div_tbl` where SAT_DIV_user_id=".$user_id."")->result_array();
			$data['SAT_DIV_SUP_details'] = $this->db->query("SELECT sat_div_sup_tbl.* FROM `sat_div_sup_tbl` where SAT_DIV_SUP_user_id=".$user_id."")->result_array();
			$this->load->view('form-wizards',$data);
		}
	}

	public function user_admin_details()
	{
		if(!isset($this->session->userdata['subsea_admin']))
		{
			redirect('/');
		}
		$data['flash']['active'] = $this->session->flashdata('active');
    	$data['flash']['title'] = $this->session->flashdata('title');
    	$data['flash']['text'] = $this->session->flashdata('text');
    	$data['flash']['type'] = $this->session->flashdata('type');
		$data['admin_details'] = $this->db->query("SELECT * from user_tbl where user_id = ".$this->session->userdata['subsea_admin']."")->result_array();
		$data['usr_data'] = $this->db->query("SELECT user_id,user_name,user_firstname,user_lastname,user_email,user_DOB,user_mobile_no,user_nationality,user_position_ref_1,user_position_ref_2,surve_user_id,surve_change_offshore_prjct,user_division,user_apply_position FROM `user_tbl` join csr_tbl on user_id = CSR_user_id left join subsea_surve on surve_user_id = user_id where user_type=2")->result_array(); 
		$data['total_user'] = $this->db->query("SELECT * FROM `user_tbl` WHERE user_type = 2")->num_rows();
		$data['total_indian'] = $this->db->query("SELECT * FROM `user_tbl` WHERE user_type = 2 and user_nationality='Indian'")->num_rows();
		$data['total_opted'] = $this->db->query("SELECT * FROM `subsea_surve` join user_tbl on surve_user_id = user_id where user_nationality = 'Indian' and user_type = 2 and surve_change_offshore_prjct = 'Agree'")->num_rows();
		$data['total_declined'] = $this->db->query("SELECT * FROM `user_tbl` left join subsea_surve on surve_user_id = user_id where user_nationality = 'Indian' and user_type = 2 and surve_change_offshore_prjct IS NULL or surve_change_offshore_prjct = 'Disagree'")->num_rows();
		$this->load->view('view_user_cv',$data);
	}

	public function user_history_details()
	{
		$user_id = $_POST['user_id'];
		$data = $this->db->query("SELECT * FROM `user_tbl` join kin_tbl on user_id = kin_tbl.kin_user_id WHERE user_id=".$user_id."")->result_array();
		echo json_encode($data);
	}

	public function add_subsea_cv()
	{
		$user_id = $this->input->post('user_id');
		$user['user_id'] = $user_id;
		if(isset($_FILES['user_passport_copy']) && !empty($_FILES['user_passport_copy']['name'])) { 
			$user['user_passport_copy'] = $this->upload_profile('user_passport_copy','user_profile');
		}
		if(isset($_FILES['user_latest_photograph']) && !empty($_FILES['user_latest_photograph']['name'])) { 
			$user['user_latest_photograph'] = $this->upload_profile('user_latest_photograph','user_profile');
		}
		$this->Authentication_model->update_records('user_id',$user['user_id'],$user,'user_tbl');

		if(isset($_FILES['offshore_topside_medical_file']) && !empty($_FILES['offshore_topside_medical_file']['name'])) { 
			$medical['offshore_topside_medical_file'] = $this->upload_document('offshore_topside_medical_file','Medical','offshore_topside_medical_file_'.$user_id.'');
		}
		if(isset($_FILES['offshore_diver_medical_file']) && !empty($_FILES['offshore_diver_medical_file']['name'])) { 
			$medical['offshore_diver_medical_file'] = $this->upload_document('offshore_diver_medical_file','Medical','off_shore_driver_medical_file_'.$user_id.'');
		}
		$medical['medical_user_id'] = $user_id;
		$this->Authentication_model->update_records('medical_user_id',$medical['medical_user_id'],$medical,'medical_tbl');

		if(isset($_FILES['CSR_file']) && !empty($_FILES['CSR_file']['name'])) { 
			$CSR['CSR_file'] = $this->upload_document('CSR_file','CSR','CSR_file_'.$user_id.'');
		}
		$CSR['CSR_user_id'] = $user_id;
		$this->Authentication_model->update_records('CSR_user_id',$CSR['CSR_user_id'],$CSR,'csr_tbl');


		if(isset($_FILES['diving_prt_I_file']) && !empty($_FILES['diving_prt_I_file']['name'])) { 
			$diving['diving_prt_I_file'] = $this->upload_document('diving_prt_I_file','Diving','diving_prt_I_file_'.$user_id.'');
		}
		if(isset($_FILES['diving_prt_II_file']) && !empty($_FILES['diving_prt_II_file']['name'])) { 
			$diving['diving_prt_II_file'] = $this->upload_document('diving_prt_II_file','Diving','diving_prt_II_file_'.$user_id.'');
		}
		if(isset($_FILES['diving_superviser_file']) && !empty($_FILES['diving_superviser_file']['name'])) { 
			$diving['diving_superviser_file'] = $this->upload_document('diving_superviser_file','Diving','diving_superviser_file_'.$user_id.'');
		}
		if(isset($_FILES['diving_ALST_file']) && !empty($_FILES['diving_ALST_file']['name'])) { 
			$diving['diving_ALST_file'] = $this->upload_document('diving_ALST_file','Diving','diving_ALSR_file_'.$user_id.'');
		}
		if(isset($_FILES['diving_LST_file']) && !empty($_FILES['diving_LST_file']['name'])) { 
			$diving['diving_LST_file'] = $this->upload_document('diving_LST_file','Diving','diving_LST_file_'.$user_id.'');
		}
		if(isset($_FILES['diving_subsea_NDT_levl_I_file']) && !empty($_FILES['diving_subsea_NDT_levl_I_file']['name'])) { 
			$diving['diving_subsea_NDT_levl_I_file'] = $this->upload_document('diving_subsea_NDT_levl_I_file','Diving','diving_subsea_NDT_levl_I_file_'.$user_id.'');
		}
		if(isset($_FILES['diving_subsea_NDT_levl_II_file']) && !empty($_FILES['diving_subsea_NDT_levl_II_file']['name'])) { 
			$diving['diving_subsea_NDT_levl_II_file'] = $this->upload_document('diving_subsea_NDT_levl_II_file','Diving','diving_subsea_NDT_levl_II_file_'.$user_id.'');
		}
		$diving['diving_user_id'] = $user_id;
		$this->Authentication_model->update_records('diving_user_id',$diving['diving_user_id'],$diving,'diving_tbl');

		if(isset($_FILES['engg_stram_file']) && !empty($_FILES['engg_stram_file']['name'])) { 
			$engg['engg_stram_file'] = $this->upload_document('engg_stram_file','Engg','engg_stram_file_'.$user_id.'');
		}
		$engg['engg_user_id'] = $user_id;
		$this->Authentication_model->update_records('engg_user_id',$engg['engg_user_id'],$engg,'engg_tbl');

		if(isset($_FILES['NEEBOSH_file']) && !empty($_FILES['NEEBOSH_file']['name'])) { 
			$mgnt['NEEBOSH_file'] = $this->upload_document('NEEBOSH_file','Mgnt','NEEBOSH_file_'.$user_id.'');
		}
		if(isset($_FILES['pro_mgnt_file']) && !empty($_FILES['pro_mgnt_file']['name'])) { 
			$mgnt['pro_mgnt_file'] = $this->upload_document('pro_mgnt_file','Mgnt','pro_mgnt_file_'.$user_id.'');
		}
		if(isset($_FILES['input_file']) && !empty($_FILES['input_file']['name'])) { 
			$mgnt['input_file'] = $this->upload_document('input_file','Mgnt','input_file_'.$user_id.'');
		}
		if(isset($_FILES['HAZID_file']) && !empty($_FILES['HAZID_file']['name'])) { 
			$mgnt['HAZID_file'] = $this->upload_document('HAZID_file','Mgnt','HAZID_file_'.$user_id.'');
		}
		if(isset($_FILES['offshore_file']) && !empty($_FILES['offshore_file']['name'])) { 
			$mgnt['offshore_file'] = $this->upload_document('offshore_file','Mgnt','offshore_file_'.$user_id.'');
		}
		if(isset($_FILES['IRCA_auditor_file']) && !empty($_FILES['IRCA_auditor_file']['name'])) { 
			$mgnt['IRCA_auditor_file'] = $this->upload_document('IRCA_auditor_file','Mgnt','IRCA_auditor_file_'.$user_id.'');
		}
		$mgnt['mgnt_user_id'] = $user_id;
		$this->Authentication_model->update_records('mgnt_user_id',$mgnt['mgnt_user_id'],$mgnt,'mgnt_tbl');

		
		if(isset($_FILES['compliance_mster_file']) && !empty($_FILES['compliance_mster_file']['name'])) { 
			$marine['compliance_mster_file'] = $this->upload_document('compliance_mster_file','Marine','compliance_mster_file_'.$user_id.'');
		}
		if(isset($_FILES['GMDSS_file']) && !empty($_FILES['GMDSS_file']['name'])) { 
			$marine['GMDSS_file'] = $this->upload_document('GMDSS_file','Marine','GMDSS_file_'.$user_id.'');
		}
		if(isset($_FILES['SOS_file']) && !empty($_FILES['SOS_file']['name'])) { 
			$marine['SOS_file'] = $this->upload_document('SOS_file','Marine','SOS_file_'.$user_id.'');
		}
		if(isset($_FILES['medicare_file']) && !empty($_FILES['medicare_file']['name'])) { 
			$marine['medicare_file'] = $this->upload_document('medicare_file','Marine','medicare_file_'.$user_id.'');
		}
		if(isset($_FILES['ECDIS_file']) && !empty($_FILES['ECDIS_file']['name'])) { 
			$marine['ECDIS_file'] = $this->upload_document('ECDIS_file','Marine','ECDIS_file_'.$user_id.'');
		}
		if(isset($_FILES['DP_file']) && !empty($_FILES['DP_file']['name'])) { 
			$marine['DP_file'] = $this->upload_document('DP_file','Marine','DP_file_'.$user_id.'');
		}
		$marine['marine_user_id'] = $user_id;
		$this->Authentication_model->update_records('marine_user_id',$marine['marine_user_id'],$marine,'marine_tbl');


		if(isset($_FILES['STCW_A_VII_11_file']) && !empty($_FILES['STCW_A_VII_11_file']['name'])) { 
			$STCW['STCW_A_VII_11_file'] = $this->upload_document('STCW_A_VII_11_file','STCW','STCW_A_VII_11_file_'.$user_id.'');
		}
		if(isset($_FILES['STCW_A_VII_12_file']) && !empty($_FILES['STCW_A_VII_12_file']['name'])) { 
			$STCW['STCW_A_VII_12_file'] = $this->upload_document('STCW_A_VII_12_file','STCW','STCW_A_VII_12_file_'.$user_id.'');
		}
		if(isset($_FILES['STCW_A_VII_13_file']) && !empty($_FILES['STCW_A_VII_13_file']['name'])) { 
			$STCW['STCW_A_VII_13_file'] = $this->upload_document('STCW_A_VII_13_file','STCW','STCW_A_VII_13_file_'.$user_id.'');
		}
		if(isset($_FILES['STCW_A_VII_14_file']) && !empty($_FILES['STCW_A_VII_14_file']['name'])) { 
			$STCW['STCW_A_VII_14_file'] = $this->upload_document('STCW_A_VII_14_file','STCW','STCW_A_VII_14_file_'.$user_id.'');
		}
		if(isset($_FILES['STCW_A_VII_61_file']) && !empty($_FILES['STCW_A_VII_61_file']['name'])) { 
			$STCW['STCW_A_VII_61_file'] = $this->upload_document('STCW_A_VII_61_file','STCW','STCW_A_VII_61_file_'.$user_id.'');
		}
		$STCW['STCW_user_id'] = $user_id;
		$this->Authentication_model->update_records('STCW_user_id',$STCW['STCW_user_id'],$STCW,'stcw_tbl');


		if(isset($_FILES['SME_LOA_I_file']) && !empty($_FILES['SME_LOA_I_file']['name'])) { 
			$SME['SME_LOA_I_file'] = $this->upload_document('SME_LOA_I_file','SME','SME_LOA_I_file_'.$user_id.'');
		}
		if(isset($_FILES['SME_LOA_II_file']) && !empty($_FILES['SME_LOA_II_file']['name'])) { 
			$SME['SME_LOA_II_file'] = $this->upload_document('SME_LOA_II_file','SME','SME_LOA_II_file_'.$user_id.'');
		}
		$SME['SME_user_id'] = $user_id;		
		$this->Authentication_model->update_records('SME_user_id',$SME['SME_user_id'],$SME,'sme_tbl');


		if(isset($_FILES['CSR_LOA_I_file']) && !empty($_FILES['CSR_LOA_I_file']['name'])) {
			$CSR_PART['CSR_LOA_I_file'] = $this->upload_document('CSR_LOA_I_file','CSR_PART','CSR_LOA_I_file_'.$user_id.'');
		}
		if(isset($_FILES['CSR_LOA_II_file']) && !empty($_FILES['CSR_LOA_II_file']['name'])) {
			$CSR_PART['CSR_LOA_II_file'] = $this->upload_document('CSR_LOA_II_file','CSR_PART','CSR_LOA_II_file_'.$user_id.'');
		}
		$CSR_PART['CSR_user_id'] = $user_id;
		$this->Authentication_model->update_records('CSR_user_id',$CSR_PART['CSR_user_id'],$CSR_PART,'csr_prt_tbl');


		if(isset($_FILES['DPM_LOA']) && !empty($_FILES['DPM_LOA']['name'])) {
			$DPM['DPM_LOA'] = $this->upload_document('DPM_LOA','DPM','DPM_LOA_file_'.$user_id.'');
		}
		if(isset($_FILES['DPM_LOA_1']) && !empty($_FILES['DPM_LOA_1']['name'])) {
			$DPM['DPM_LOA_1'] = $this->upload_document('DPM_LOA_1','DPM','DPM_LOA_file_1_'.$user_id.'');
		}
		$DPM['DPM_user_id'] = $user_id;
		$this->Authentication_model->update_records('DPM_user_id',$DPM['DPM_user_id'],$DPM,'dpm_tbl');
		
		if(isset($_FILES['DOM_LOA']) && !empty($_FILES['DOM_LOA']['name'])) {
			$DOM['DoM_LOA'] = $this->upload_document('DOM_LOA','DOM','DOM_LOA_file_'.$user_id.'');
		}
		if(isset($_FILES['DOM_LOA_1']) && !empty($_FILES['DOM_LOA_1']['name'])) {
			$DOM['DoM_LOA_1'] = $this->upload_document('DOM_LOA_1','DOM','DOM_LOA_file_1_'.$user_id.'');
		}
		$DOM['DoM_user_id'] = $user_id;
		$this->Authentication_model->update_records('DoM_user_id',$DOM['DoM_user_id'],$DOM,'dom_tbl');

		
		if(isset($_FILES['Prj_Engg_LOA1']) && !empty($_FILES['Prj_Engg_LOA1']['name'])) {
			$prj_info['Prj_Engg_LOA1'] = $this->upload_document('Prj_Engg_LOA1','Prj_Engg','Prj_Engg_LOA_file_'.$user_id.'');
		}
		if(isset($_FILES['Prj_Engg_LOA2']) && !empty($_FILES['Prj_Engg_LOA2']['name'])) {
			$prj_info['Prj_Engg_LOA2'] = $this->upload_document('Prj_Engg_LOA2','Prj_Engg','Prj_Engg_LOA_file_1_'.$user_id.'');
		}
		$prj_info['Prj_Engg_user_id'] = $user_id;
		$this->Authentication_model->update_records('Prj_Engg_user_id',$prj_info['Prj_Engg_user_id'],$prj_info,'prj_engg_tbl');


		if(isset($_FILES['Field_Engg_LOA_1']) && !empty($_FILES['Field_Engg_LOA_1']['name'])) {
			$field_info['Field_Engg_LOA_1'] = $this->upload_document('Field_Engg_LOA_1','Field_Engg','Field_Engg_LOA_file_'.$user_id.'');
		}
		if(isset($_FILES['Field_Engg_LOA_2']) && !empty($_FILES['Field_Engg_LOA_2']['name'])) {
			$field_info['Field_Engg_LOA_2'] = $this->upload_document('Field_Engg_LOA_2','Field_Engg','Field_Engg_LOA_file_1_'.$user_id.'');
		}
		$field_info['Field_Engg_user_id'] = $user_id;
		$this->Authentication_model->update_records('Field_Engg_user_id',$field_info['Field_Engg_user_id'],$field_info,'field_engg_tbl');


		if(isset($_FILES['MWS_LOA']) && !empty($_FILES['MWS_LOA']['name'])) {
			$MWS['MWS_LOA'] = $this->upload_document('MWS_LOA','MWS','MWS_LOA_file_'.$user_id.'');
		}
		if(isset($_FILES['MWS_LOA_1']) && !empty($_FILES['MWS_LOA_1']['name'])) {
			$MWS['MWS_LOA_1'] = $this->upload_document('MWS_LOA_1','MWS','MWS_LOA_file_1_'.$user_id.'');
		}
		if(isset($_FILES['MWS_LOA_2']) && !empty($_FILES['MWS_LOA_2']['name'])) {
			$MWS['MWS_LOA_2'] = $this->upload_document('MWS_LOA_2','MWS','MWS_LOA_file_2_'.$user_id.'');
		}
		$MWS['MWS_user_id'] = $user_id;
		$this->Authentication_model->update_records('MWS_user_id',$MWS['MWS_user_id'],$MWS,'mws_tbl');
		

		$SAT_DIV_SUP['SAT_DIV_SUP_user_id'] = $user_id;
		$SAT_DIV_SUP['SAT_DIV_SUP_oil_field_wrk_1'] = $this->input->post('SAT_DIV_SUP_oil_field_wrk_1');
		$SAT_DIV_SUP['SAT_DIV_SUP_oil_field_wrk_2'] = $this->input->post('SAT_DIV_SUP_oil_field_wrk_2');
		$SAT_DIV_SUP['SAT_DIV_SUP_oil_field_wrk_3'] = $this->input->post('SAT_DIV_SUP_oil_field_wrk_3');
		$SAT_DIV_SUP['SAT_DIV_SUP_oil_field_wrk_4'] = $this->input->post('SAT_DIV_SUP_oil_field_wrk_4');
		$SAT_DIV_SUP['SAT_DIV_SUP_oil_field_wrk_5'] = $this->input->post('SAT_DIV_SUP_oil_field_wrk_5');
		$SAT_DIV_SUP['SAT_DIV_SUP_type_wrk'] = $this->input->post('SAT_DIV_SUP_scope_details');
		$SAT_DIV_SUP['SAT_DIV_SUP_position_min_rate'] = $this->input->post('SAT_DIV_SUP_position_min_rate');
		$SAT_DIV_SUP['SAT_DIV_SUP_position_max_rate'] = $this->input->post('SAT_DIV_SUP_position_max_rate');

		$data = $this->Authentication_model->verify('SAT_DIV_SUP_user_id',$SAT_DIV_SUP['SAT_DIV_SUP_user_id'],'sat_div_sup_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($SAT_DIV_SUP,'sat_div_sup_tbl');
		}else{
			$records_details = $this->Authentication_model->update_records('SAT_DIV_SUP_user_id',$SAT_DIV_SUP['SAT_DIV_SUP_user_id'],$SAT_DIV_SUP,'sat_div_sup_tbl');
		}

		redirect('Welcome/user_subsea_cv');
	}

	public function personnel_info()
	{
		$user['user_id'] = $_POST['user_id'];
		$user['user_name'] = $_POST['user_name'];
		$user['user_DOB'] = $_POST['user_DOB'];
		$user['user_age'] = $_POST['user_age'];
		$user['user_passport_no'] = $_POST['user_passport_no'];
		$user['user_pp_issue_authority'] = $_POST['user_pp_issue_authority'];
		$user['user_passport_validaty'] = $_POST['user_passport_validaty'];
		$user['user_mobile_no'] = $_POST['user_mobile_no'];
		$user['user_whatsapp_no'] = $_POST['user_whatsapp_no'];
		$user['user_company_director'] = $_POST['user_company_director'];
		$user['user_company_name'] = $_POST['user_company_name'];
		$user['user_address'] = $_POST['user_address'];
		$user['user_address_country'] = $_POST['user_address_country'];
		$user['user_address_state'] = $_POST['user_address_state'];
		$user['user_address_pincode'] = $_POST['user_address_pincode'];
		$data = $this->Authentication_model->update_records('user_id',$user['user_id'],$user,'user_tbl');
		echo json_encode("User Record Updated Successfully.");
	}

	public function kin_info()
	{
		$kin['kin_user_id'] = $_POST['user_id'];
		$kin['kin_name'] = $_POST['kin_name'];
		$kin['kin_relationship'] = $_POST['relationship_kin'];
		$kin['kin_email'] = $_POST['kin_email'];
		$kin['kin_mobile_no'] = $_POST['kin_mobile_no'];
		$data = $this->Authentication_model->verify('kin_user_id',$kin['kin_user_id'],'kin_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($kin,'kin_tbl');
			echo json_encode('Kin Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('kin_user_id',$kin['kin_user_id'],$kin,'kin_tbl');
			echo json_encode('Kin Details Updated Successfully.');
		}
	}

	public function medical_info()
	{
		$medical['medical_issue_bye'] = $_POST['medical_issue_bye'];
		$medical['medical_expiry_date'] = $_POST['medical_expiry_date'];
		$medical['medical_user_id'] = $_POST['user_id'];
		$data = $this->Authentication_model->verify('medical_user_id',$medical['medical_user_id'],'medical_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($medical,'medical_tbl');
			echo json_encode('Medical Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('medical_user_id',$medical['medical_user_id'],$medical,'medical_tbl');
			echo json_encode('Medical Details Updated Successfully.');
		}
	}

	public function CSR_info()
	{
		$CSR['CSR_OGP_client_report_cert_no'] = $_POST['CSR_OGP_client_report_cert_no'];
		$CSR['CSR_training_center'] = $_POST['CSR_training_center'];
		$CSR['CSR_issue_date'] = $_POST['CSR_issue_date'];
		$CSR['CSR_user_id'] = $_POST['user_id'];
		$data = $this->Authentication_model->verify('CSR_user_id',$CSR['CSR_user_id'],'csr_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($CSR,'csr_tbl');
			echo json_encode('CSR Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('CSR_user_id',$CSR['CSR_user_id'],$CSR,'csr_tbl');
			echo json_encode('CSR Details Updated Successfully.');
		}
	}

	public function diving_info()
	{
		$diving['diving_user_id'] = $_POST['user_id'];
		$diving['diving_surface_prt_I_cert'] = $_POST['diving_surface_prt_I_cert'];
		$diving['diving_prt_I_training_center'] = $_POST['diving_prt_I_training_center'];
		$diving['diving_prt_I_issue_date'] = $_POST['diving_prt_I_issue_date'];
		$diving['diving_surface_prt_II_cert'] = $_POST['diving_surface_prt_II_cert'];
		$diving['diving_prt_II_training_center'] = $_POST['diving_prt_II_training_center'];
		$diving['diving_prt_II_issue_date'] = $_POST['diving_prt_II_issue_date'];
		$diving['diving_surface_superviser_cert'] = $_POST['diving_surface_superviser_cert'];
		$diving['diving_superviser_training_center'] = $_POST['diving_superviser_training_center'];
		$diving['diving_superviser_issue_date'] = $_POST['diving_superviser_issue_date'];
		$diving['diving_saturation_surface_superviser_cert'] = $_POST['diving_saturation_surface_superviser_cert'];
		$diving['diving_saturation_superviser_training_center'] = $_POST['diving_saturation_superviser_training_center'];
		$diving['diving_saturation_superviser_issue_date'] = $_POST['diving_saturation_superviser_issue_date'];
		$diving['diving_ALST_cert'] = $_POST['diving_ALST_cert'];
		$diving['diving_ALST_training_center'] = $_POST['diving_ALST_training_center'];
		$diving['diving_ALST_issue_date'] = $_POST['diving_ALST_issue_date'];
		$diving['diving_LST_cert'] = $_POST['diving_LST_cert'];
		$diving['diving_LST_training_center'] = $_POST['diving_LST_training_center'];
		$diving['diving_LST_issue_date'] = $_POST['diving_LST_issue_date'];
		$diving['diving_LSS_issue_date'] = $_POST['diving_LSS_issue_date'];
		$diving['diving_LSS_no_offshore_day'] = $_POST['diving_LSS_no_offshore_day'];
		$diving['diving_subsea_NDT_levl_I_cert'] = $_POST['diving_subsea_NDT_levl_I_cert'];
		$diving['diving_subsea_NDT_levl_I_training_center'] = $_POST['diving_subsea_NDT_levl_I_training_center'];
		$diving['diving_subsea_NDT_levl_I_issue_date'] = $_POST['diving_subsea_NDT_levl_I_issue_date'];
		$diving['diving_subsea_NDT_levl_I_expiry_date'] = $_POST['diving_subsea_NDT_levl_I_expiry_date'];
		$diving['diving_subsea_NDT_levl_II_cert'] = $_POST['diving_subsea_NDT_levl_II_cert'];
		$diving['diving_subsea_NDT_levl_II_training_center'] = $_POST['diving_subsea_NDT_levl_II_training_center'];
		$diving['diving_subsea_NDT_levl_II_issue_date'] = $_POST['diving_subsea_NDT_levl_II_issue_date'];
		$diving['diving_subsea_NDT_levl_II_expiry_date'] = $_POST['diving_subsea_NDT_levl_II_expiry_date'];
		$data = $this->Authentication_model->verify('diving_user_id',$diving['diving_user_id'],'diving_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($diving,'diving_tbl');
			echo json_encode('diving Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('diving_user_id',$diving['diving_user_id'],$diving,'diving_tbl');
			echo json_encode('diving Details Updated Successfully.');
		}
	}

	public function engg_info()
	{
		$engg['engg_user_id'] = $_POST['user_id'];
		$engg['engg_stram'] = $_POST['engg_stram'];
		$engg['engg_passing_year'] = $_POST['engg_passing_year'];
		$data = $this->Authentication_model->verify('engg_user_id',$engg['engg_user_id'],'engg_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($engg,'engg_tbl');
			echo json_encode('engg Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('engg_user_id',$engg['engg_user_id'],$engg,'engg_tbl');
			echo json_encode('engg Details Updated Successfully.');
		}
	}

	public function mgnt_info()
	{
		$mgnt['mgnt_user_id'] = $_POST['user_id'];
		$mgnt['NEEBOSH_cert_no'] = $_POST['NEEBOSH_cert_no'];
		$mgnt['NEEBOSH_expiry_date'] = $_POST['NEEBOSH_expiry_date'];
		$mgnt['pro_mgnt_cert_no'] = $_POST['pro_mgnt_cert_no'];
		$mgnt['pro_mgnt_issue_authority'] = $_POST['pro_mgnt_issue_authority'];
		$mgnt['input_cert_no'] = $_POST['input_cert_no'];
		$mgnt['input_issue_authority'] = $_POST['input_issue_authority'];
		$mgnt['input_issue_date'] = $_POST['input_issue_date'];
		$mgnt['input_validity_date'] = $_POST['input_validity_date'];
		$mgnt['HAZID_paticipate_mgnt'] = $_POST['HAZID_paticipate_mgnt'];
		$mgnt['offshore_risk_paticipate_assessement'] = $_POST['offshore_risk_paticipate_assessement'];
		$mgnt['IRCA_auditor_cert_no'] = $_POST['IRCA_auditor_cert_no'];
		$mgnt['IRCA_auditor_training_authority'] = $_POST['IRCA_auditor_training_authority'];
		$mgnt['IRCA_auditor_issue_date'] = $_POST['IRCA_auditor_issue_date'];
		
		$data = $this->Authentication_model->verify('mgnt_user_id',$mgnt['mgnt_user_id'],'mgnt_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($mgnt,'mgnt_tbl');
			echo json_encode('mgnt Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('mgnt_user_id',$mgnt['mgnt_user_id'],$mgnt,'mgnt_tbl');
			echo json_encode('mgnt Details Updated Successfully.');
		}
	}

	public function marine_info()
	{
		$marine['marine_user_id'] = $_POST['user_id'];
		$marine['compliance_mster_cert_no'] = $_POST['compliance_mster_cert_no'];
		$marine['compliance_mster_present_cert_no'] = $_POST['compliance_mster_present_cert_no'];
		$marine['compliance_mster_fst_issue_date'] = $_POST['compliance_mster_fst_issue_date'];
		$marine['compliance_mster_issue_date'] = $_POST['compliance_mster_issue_date'];
		$marine['compliance_mster_renewal_date'] = $_POST['compliance_mster_renewal_date'];
		$marine['GMDSS_cert_no'] = $_POST['GMDSS_cert_no'];
		$marine['GMDSS_training_equipment'] = $_POST['GMDSS_training_equipment'];
		$marine['GMDSS_training_center'] = $_POST['GMDSS_training_center'];
		$marine['GMDSS_restriction'] = $_POST['GMDSS_restriction'];
		$marine['GMDSS_expiry_date'] = $_POST['GMDSS_expiry_date'];
		$marine['SOS_cert_no'] = $_POST['SOS_cert_no'];
		$marine['SOS_training_equipment'] = $_POST['SOS_training_equipment'];
		$marine['SOS_training_center'] = $_POST['SOS_training_center'];
		$marine['SOS_restriction'] = $_POST['SOS_restriction'];
		$marine['SOS_expiry_date'] = $_POST['SOS_expiry_date'];
		$marine['medicare_cert_no'] = $_POST['medicare_cert_no'];
		$marine['medicare_training_equipment'] = $_POST['medicare_training_equipment'];
		$marine['medicare_training_center'] = $_POST['medicare_training_center'];
		$marine['medicare_restriction'] = $_POST['medicare_restriction'];
		$marine['medicare_expiry_date'] = $_POST['medicare_expiry_date'];
		$marine['ECDIS_cert_no'] = $_POST['ECDIS_cert_no'];
		$marine['ECDIS_training_equipment'] = $_POST['ECDIS_training_equipment'];
		$marine['ECDIS_training_center'] = $_POST['ECDIS_training_center'];
		$marine['ECDIS_restriction'] = $_POST['ECDIS_restriction'];
		$marine['ECDIS_expiry_date'] = $_POST['ECDIS_expiry_date'];
		$marine['DP_cert_no'] = $_POST['DP_cert_no'];
		$marine['DP_training_equipment'] = $_POST['DP_training_equipment'];
		$marine['DP_training_center'] = $_POST['DP_training_center'];
		$marine['DP_restriction'] = $_POST['DP_restriction'];
		$marine['DP_expiry_date'] = $_POST['DP_expiry_date'];

		$data = $this->Authentication_model->verify('marine_user_id',$marine['marine_user_id'],'marine_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($marine,'marine_tbl');
			echo json_encode('Marine Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('marine_user_id',$marine['marine_user_id'],$marine,'marine_tbl');
			echo json_encode('Marine Details Updated Successfully.');
		}
	}

	public function STCW_info()
	{
		$STCW['STCW_user_id'] = $_POST['user_id'];
		$STCW['STCW_A_VII_11_cert_no'] = $_POST['STCW_A_VII_11_cert_no'];
		$STCW['STCW_A_VII_12_cert_no'] = $_POST['STCW_A_VII_12_cert_no'];
		$STCW['STCW_A_VII_13_cert_no'] = $_POST['STCW_A_VII_13_cert_no'];
		$STCW['STCW_A_VII_14_cert_no'] = $_POST['STCW_A_VII_14_cert_no'];
		$STCW['STCW_A_VII_61_cert_no'] = $_POST['STCW_A_VII_61_cert_no'];
		$STCW['STCW_training_center'] = $_POST['STCW_training_center'];
		$STCW['STCW_issue_date'] = $_POST['STCW_issue_date'];
		$STCW['STCW_expiry_date'] = $_POST['STCW_expiry_date'];
		$data = $this->Authentication_model->verify('STCW_user_id',$STCW['STCW_user_id'],'stcw_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($STCW,'stcw_tbl');
			echo json_encode('STCW Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('STCW_user_id',$STCW['STCW_user_id'],$STCW,'stcw_tbl');
			echo json_encode('STCW Details Updated Successfully.');
		}
	}
	public function SME_info()
	{
		$SME['SME_user_id'] = $_POST['user_id'];
		$SME['SME_working_priod_start'] = $_POST['SME_working_priod_start'];
		$SME['SME_working_priod_end'] = $_POST['SME_working_priod_end'];
		$SME['SME_no_year'] = $_POST['SME_no_year'];
		$SME['SME_internation_gas_oil_client'] = $_POST['SME_internation_gas_oil_client'];
		$SME['SME_prj_name'] = $_POST['SME_prj_name'];
		$SME['SME_diving_safety_mgnt'] = $_POST['SME_diving_safety_mgnt'];
		$SME['SME_audit_approve_diving_constract_oil_gas'] = $_POST['SME_audit_approve_diving_constract_oil_gas'];
		$SME['SME_front_end_engg_design_subsea_str'] = $_POST['SME_front_end_engg_design_subsea_str'];
		$SME['SME_develope_scope_work_subsea_install'] = $_POST['SME_develope_scope_work_subsea_install'];
		$SME['SME_accept_criteria'] = $_POST['SME_accept_criteria'];
		$SME['SME_audit_cinstract_safety_mgnt'] = $_POST['SME_audit_cinstract_safety_mgnt'];
		$SME['SME_review_contract_prj_plan'] = $_POST['SME_review_contract_prj_plan'];
		$SME['SME_subsea_install_prj_HSE_review_HAZID'] = $_POST['SME_subsea_install_prj_HSE_review_HAZID'];
		$SME['SME_review_contract_procedure'] = $_POST['SME_review_contract_procedure'];
		$SME['SME_onshore_risk_ass_stage_I'] = $_POST['SME_onshore_risk_ass_stage_I'];
		$SME['SME_review_approval_diving_contract_personnel'] = $_POST['SME_review_approval_diving_contract_personnel'];
		$SME['SME_review_close_design_audit'] = $_POST['SME_review_close_design_audit'];
		$SME['SME_DP2_DSV'] = $_POST['SME_DP2_DSV'];
		$SME['SME_mobolisation_hyperbaric_reception'] = $_POST['SME_mobolisation_hyperbaric_reception'];
		$SME['SME_sys_integration_test_onshore'] = $_POST['SME_sys_integration_test_onshore'];
		$SME['SME_develope_engg_code'] = $_POST['SME_develope_engg_code'];
		$SME['SME_audited_subsea_contract'] = $_POST['SME_audited_subsea_contract'];
		$SME['SME_involve_front_end_engg_design'] = $_POST['SME_involve_front_end_engg_design'];
		$SME['SME_develope_criteria_acceptance'] = $_POST['SME_develope_criteria_acceptance'];
		$SME['SME_audit_criteria_process_control_approval'] = $_POST['SME_audit_criteria_process_control_approval'];
		$SME['SME_engg_prj_plan'] = $_POST['SME_engg_prj_plan'];
		$SME['SME_HSE_review_HAZID'] = $_POST['SME_HSE_review_HAZID'];
		$SME['SME_approve_install_procedure'] = $_POST['SME_approve_install_procedure'];
		$SME['SME_approve_risk_assessment'] = $_POST['SME_approve_risk_assessment'];
		$SME['SME_responsible_team_leadership'] = $_POST['SME_responsible_team_leadership'];
		$SME['SME_approve_SIT_FAT'] = $_POST['SME_approve_SIT_FAT'];
		$SME['SME_hyperbaric_evacuation_drills_trails'] = $_POST['SME_hyperbaric_evacuation_drills_trails'];
		$SME['SME_emergency_respone_plan_drills_tails'] = $_POST['SME_emergency_respone_plan_drills_tails'];
		$SME['SME_offshore_execution_phase'] = $_POST['SME_offshore_execution_phase'];
		$SME['SME_incident_report_investigation'] = $_POST['SME_incident_report_investigation'];
		$SME['SME_prj_close_out_report'] = $_POST['SME_prj_close_out_report'];
		$SME['SME_scope_work_execute_under_you'] = $_POST['SME_scope_work_execute_under_you'];
		$SME['other_SME_scope_work_execute_under_you'] = $_POST['other_SME_scope_work_execute_under_you'];
		$SME['SME_position_min_rate'] = $_POST['SME_position_min_rate'];
		$SME['SME_position_max_rate'] = $_POST['SME_position_max_rate'];
		$data = $this->Authentication_model->verify('SME_user_id',$SME['SME_user_id'],'sme_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($SME,'sme_tbl');
			echo json_encode('SME Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('SME_user_id',$SME['SME_user_id'],$SME,'sme_tbl');
			echo json_encode('SME Details Updated Successfully.');
		}
	}

	public function CSR_PART_info()
	{
		$CSR['CSR_user_id'] = $_POST['user_id'];
		$CSR['CSR_working_priod_start'] = $_POST['CSR_working_priod_start'];
		$CSR['CSR_working_priod_end'] = $_POST['CSR_working_priod_end'];
		$CSR['CSR_no_year'] = $_POST['CSR_no_year'];
		$CSR['CSR_internation_gas_oil_client'] = $_POST['CSR_internation_gas_oil_client'];
		$CSR['CSR_prj_name'] = $_POST['CSR_prj_name'];
		$CSR['CSR_front_end_engg_design_subsea_str'] = $_POST['CSR_front_end_engg_design_subsea_str'];
		$CSR['CSR_develope_scope_work_subsea_install'] = $_POST['CSR_develope_scope_work_subsea_install'];
		$CSR['CSR_accept_criteria'] = $_POST['CSR_accept_criteria'];
		$CSR['CSR_audit_cinstract_safety_mgnt'] = $_POST['CSR_audit_cinstract_safety_mgnt'];
		$CSR['CSR_review_contract_prj_plan'] = $_POST['CSR_review_contract_prj_plan'];
		$CSR['CSR_subsea_install_prj_HSE_review_HAZID'] = $_POST['CSR_subsea_install_prj_HSE_review_HAZID'];
		$CSR['CSR_review_approval_diving_contract_personnel'] = $_POST['CSR_review_approval_diving_contract_personnel'];
		$CSR['CSR_review_close_design_audit'] = $_POST['CSR_review_close_design_audit'];
		$CSR['CSR_DP2_DSV'] = $_POST['CSR_DP2_DSV'];
		$CSR['CSR_mobolisation_hyperbaric_reception'] = $_POST['CSR_mobolisation_hyperbaric_reception'];
		$CSR['CSR_sys_integration_test_onshore'] = $_POST['CSR_sys_integration_test_onshore'];
		$CSR['CSR_implement_engg_code'] = $_POST['CSR_implement_engg_code'];
		$CSR['CSR_involve_front_engg'] = $_POST['CSR_involve_front_engg'];
		$CSR['CSR_part_scope_work'] = $_POST['CSR_part_scope_work'];
		$CSR['CSR_team_mem_audit_process_approval'] = $_POST['CSR_team_mem_audit_process_approval'];
		$CSR['CSR_HSE_review_HAZID'] = $_POST['CSR_HSE_review_HAZID'];
		$CSR['CSR_review_install_procedure'] = $_POST['CSR_review_install_procedure'];
		$CSR['CSR_risk_assets_install'] = $_POST['CSR_risk_assets_install'];
		$CSR['CSR_sys_integration_test'] = $_POST['CSR_sys_integration_test'];
		$CSR['CSR_hyperbaric_evacuation_drills_trails'] = $_POST['CSR_hyperbaric_evacuation_drills_trails'];
		$CSR['CSR_emergency_respone_plan_drills_tails'] = $_POST['CSR_emergency_respone_plan_drills_tails'];
		$CSR['CSR_offshore_execution_phase'] = $_POST['CSR_offshore_execution_phase'];
		$CSR['CSR_incident_report_investigation'] = $_POST['CSR_incident_report_investigation'];
		$CSR['CSR_prj_close_out_report'] = $_POST['CSR_prj_close_out_report'];
		$CSR['CSR_scope_work_execute_under_you'] = $_POST['CSR_scope_work_execute_under_you'];
		$CSR['other_CSR_scope_work_execute_under_you'] = $_POST['other_CSR_scope_work_execute_under_you'];
		$CSR['CSR_position_min_rate'] = $_POST['CSR_position_min_rate'];
		$CSR['CSR_position_max_rate'] = $_POST['CSR_position_max_rate'];

		$data = $this->Authentication_model->verify('CSR_user_id',$CSR['CSR_user_id'],'csr_prt_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($CSR,'csr_prt_tbl');
			echo json_encode('CSR PART Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('CSR_user_id',$CSR['CSR_user_id'],$CSR,'csr_prt_tbl');
			echo json_encode('CSR PART Details Updated Successfully.');
		}
	}

	public function DPM_info()
	{
		$DPM['DPM_user_id'] = $_POST['user_id'];
		$DPM['DPM_working_priod_start'] = $_POST['DPM_working_priod_start'];
		$DPM['DPM_working_priod_end'] = $_POST['DPM_working_priod_end'];
		$DPM['DPM_no_year'] = $_POST['DPM_no_year'];
		$DPM['DPM_familier_IMCA_OGP_RP'] = $_POST['DPM_familier_IMCA_OGP_RP'];
		$DPM['DPM_prj_name'] = $_POST['DPM_prj_name'];
		$DPM['DPM_prj_location'] = $_POST['DPM_prj_location'];
		$DPM['DPM_prj_oil_company_name'] = $_POST['DPM_prj_oil_company_name'];
		$DPM['DPM_prj_oil_company_location'] = $_POST['DPM_prj_oil_company_location'];
		$DPM['DPM_diving_contractor_name'] = $_POST['DPM_diving_contractor_name'];
		$DPM['DPM_emp_oil_company_diving_contractor'] = $_POST['DPM_emp_oil_company_diving_contractor'];
		$DPM['DPM_value_contractor'] = $_POST['DPM_value_contractor'];
		$DPM['DPM_constitution_PM_team'] = $_POST['DPM_constitution_PM_team'];
		$DPM['DPM_work_scope'] = $_POST['DPM_work_scope'];
		$DPM['DPM_marine_assets'] = $_POST['DPM_marine_assets'];
		$DPM['DPM_salient_feature_achivement'] = $_POST['DPM_salient_feature_achivement'];
		$DPM['DPM_marine_assets_deploy'] = $_POST['DPM_marine_assets_deploy'];
		$DPM['DPM_depth_saturation_diving_invest'] = $_POST['DPM_depth_saturation_diving_invest'];
		$DPM['DPM_ROV_deploy'] = $_POST['DPM_ROV_deploy'];
		$DPM['DPM_client_ref'] = $_POST['DPM_client_ref'];
		$DPM['DPM_prj_name_1'] = $_POST['DPM_prj_name_1'];
		$DPM['DPM_prj_location_1'] = $_POST['DPM_prj_location_1'];
		$DPM['DPM_prj_oil_company_name_1'] = $_POST['DPM_prj_oil_company_name_1'];
		$DPM['DPM_prj_oil_company_location_1'] = $_POST['DPM_prj_oil_company_location_1'];
		$DPM['DPM_diving_contractor_name_1'] = $_POST['DPM_diving_contractor_name_1'];
		$DPM['DPM_emp_oil_company_diving_contractor_1'] = $_POST['DPM_emp_oil_company_diving_contractor_1'];
		$DPM['DPM_value_contractor_1'] = $_POST['DPM_value_contractor_1'];
		$DPM['DPM_constitution_PM_team_1'] = $_POST['DPM_constitution_PM_team_1'];
		$DPM['DPM_work_scope_1'] = $_POST['DPM_work_scope_1'];
		$DPM['DPM_marine_assets_1'] = $_POST['DPM_marine_assets_1'];
		$DPM['DPM_salient_feature_achivement_1'] = $_POST['DPM_salient_feature_achivement_1'];
		$DPM['DPM_marine_assets_deploy_1'] = $_POST['DPM_marine_assets_deploy_1'];
		$DPM['DPM_depth_saturation_diving_invest_1'] = $_POST['DPM_depth_saturation_diving_invest_1'];
		$DPM['DPM_ROV_deploy_1'] = $_POST['DPM_ROV_deploy_1'];
		$DPM['DPM_client_ref_1'] = $_POST['DPM_client_ref_1'];
		$DPM['DPM_position_min_rate'] = $_POST['DPM_position_min_rate'];
		$DPM['DPM_position_max_rate'] = $_POST['DPM_position_max_rate'];

		$data = $this->Authentication_model->verify('DPM_user_id',$DPM['DPM_user_id'],'dpm_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($DPM,'dpm_tbl');
			echo json_encode('DPM Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('DPM_user_id',$DPM['DPM_user_id'],$DPM,'dpm_tbl');
			echo json_encode('DPM Details Updated Successfully.');
		}
	}

	public function DOM_info()
	{
		$DOM['DoM_user_id'] = $_POST['user_id'];
		$DOM['DoM_working_priod_start'] = $_POST['DOM_working_priod_start'];
		$DOM['DoM_working_priod_end'] = $_POST['DOM_working_priod_end'];
		$DOM['DoM_no_year'] = $_POST['DOM_no_year'];
		$DOM['DoM_familier_IMCA_OGP_RP'] = $_POST['DOM_familier_IMCA_OGP_RP'];
		$DOM['DoM_prj_name'] = $_POST['DOM_prj_name'];
		$DOM['DoM_prj_location'] = $_POST['DOM_prj_location'];
		$DOM['DoM_prj_oil_company_name'] = $_POST['DOM_prj_oil_company_name'];
		$DOM['DoM_prj_oil_company_location'] = $_POST['DOM_prj_oil_company_location'];
		$DOM['DoM_diving_contractor_name'] = $_POST['DOM_diving_contractor_name'];
		$DOM['DoM_emp_oil_company_diving_contractor'] = $_POST['DOM_emp_oil_company_diving_contractor'];
		$DOM['DoM_value_contractor'] = $_POST['DOM_value_contractor'];
		$DOM['DoM_constitution_PM_team'] = $_POST['DOM_constitution_PM_team'];
		$DOM['DoM_work_scope'] = $_POST['DOM_work_scope'];
		$DOM['DoM_marine_assets'] = $_POST['DOM_marine_assets'];
		$DOM['DoM_salient_feature_achivement'] = $_POST['DOM_salient_feature_achivement'];
		$DOM['DoM_marine_assets_deploy'] = $_POST['DOM_marine_assets_deploy'];
		$DOM['DoM_depth_saturation_diving_invest'] = $_POST['DOM_depth_saturation_diving_invest'];
		$DOM['DoM_ROV_deploy'] = $_POST['DOM_ROV_deploy'];
		$DOM['DoM_client_ref'] = $_POST['DOM_client_ref'];
		$DOM['DoM_prj_name_1'] = $_POST['DOM_prj_name_1'];
		$DOM['DoM_prj_location_1'] = $_POST['DOM_prj_location_1'];
		$DOM['DoM_prj_oil_company_name_1'] = $_POST['DOM_prj_oil_company_name_1'];
		$DOM['DoM_prj_oil_company_location_1'] = $_POST['DOM_prj_oil_company_location_1'];
		$DOM['DoM_diving_contractor_name_1'] = $_POST['DOM_diving_contractor_name_1'];
		$DOM['DoM_emp_oil_company_diving_contractor_1'] = $_POST['DOM_emp_oil_company_diving_contractor_1'];
		$DOM['DoM_value_contractor_1'] = $_POST['DOM_value_contractor_1'];
		$DOM['DoM_constitution_PM_team_1'] = $_POST['DOM_constitution_PM_team_1'];
		$DOM['DoM_work_scope_1'] = $_POST['DOM_work_scope_1'];
		$DOM['DoM_marine_assets_1'] = $_POST['DOM_marine_assets_1'];
		$DOM['DoM_salient_feature_achivement_1'] = $_POST['DOM_salient_feature_achivement_1'];
		$DOM['DoM_marine_assets_deploy_1'] = $_POST['DOM_marine_assets_deploy_1'];
		$DOM['DoM_depth_saturation_diving_invest_1'] = $_POST['DOM_depth_saturation_diving_invest_1'];
		$DOM['DoM_ROV_deploy_1'] = $_POST['DOM_ROV_deploy_1'];
		$DOM['DoM_client_ref_1'] = $_POST['DOM_client_ref_1'];
		$DOM['DoM_position_min_rate'] = $_POST['DOM_position_min_rate'];
		$DOM['DoM_position_max_rate'] = $_POST['DOM_position_max_rate'];

		$data = $this->Authentication_model->verify('DoM_user_id',$DOM['DoM_user_id'],'dom_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($DOM,'dom_tbl');
			echo json_encode('DOM Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('DoM_user_id',$DOM['DoM_user_id'],$DOM,'dom_tbl');
			echo json_encode('DOM Details Updated Successfully.');
		}
	}

	public function SDS_info()
	{
		$SDS['SDS_user_id'] = $_POST['user_id'];
		$SDS['SDS_working_priod_start'] = $_POST['SDS_working_priod_start'];
		$SDS['SDS_working_priod_end'] = $_POST['SDS_working_priod_end'];
		$SDS['SDS_no_year'] = $_POST['SDS_no_year'];
		$SDS['SDS_no_SDS_offshare'] = $_POST['SDS_no_SDS_offshare'];
		$SDS['SDS_name_barges_exe_SDS_from'] = $_POST['SDS_name_barges_exe_SDS_from'];
		$SDS['SDS_name_DP2_DSV_exe_SDS_from'] = $_POST['SDS_name_DP2_DSV_exe_SDS_from'];
		$SDS['SDS_IMCA_div_cntr_wrk'] = $_POST['SDS_IMCA_div_cntr_wrk'];
		$SDS['SDS_oil_comp_wrk'] = $_POST['SDS_oil_comp_wrk'];
		$SDS['SDS_EPIC_prj_wrk_SDS'] = $_POST['SDS_EPIC_prj_wrk_SDS'];
		$SDS['SDS_prj_mgnt_exp'] = $_POST['SDS_prj_mgnt_exp'];
		$SDS['SDS_type_wrk'] = $_POST['SDS_type_wrk'];
		$SDS['SDS_position_min_rate'] = $_POST['SDS_position_min_rate'];
		$SDS['SDS_position_max_rate'] = $_POST['SDS_position_max_rate'];

		$data = $this->Authentication_model->verify('SDS_user_id',$SDS['SDS_user_id'],'sds_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($SDS,'sds_tbl');
			echo json_encode('SDS Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('SDS_user_id',$SDS['SDS_user_id'],$SDS,'sds_tbl');
			echo json_encode('SDS Details Updated Successfully.');
		}
	}

	public function prj_engg_info()
	{
		$prj_info['Prj_Engg_user_id'] = $_POST['user_id'];
		$prj_info['Prj_Engg_working_priod_start'] = $_POST['Prj_Engg_working_priod_start'];
		$prj_info['Prj_Engg_working_priod_end'] = $_POST['Prj_Engg_working_priod_end'];
		$prj_info['Prj_Engg_no_year'] = $_POST['Prj_Engg_no_year'];
		$prj_info['Prj_Engg_name_barges_exe_SDS_from'] = $_POST['Prj_Engg_name_barges_exe_SDS_from'];
		$prj_info['Prj_Engg_name_DP2_DSV_exe_SDS_from'] = $_POST['Prj_Engg_name_DP2_DSV_exe_SDS_from'];
		$prj_info['Prj_Engg_IMCA_div_cntr_wrk'] = $_POST['Prj_Engg_IMCA_div_cntr_wrk'];
		$prj_info['Prj_Engg_oil_comp_wrk'] = $_POST['Prj_Engg_oil_comp_wrk'];
		$prj_info['Prj_Engg_EPIC_prj_engg_susea'] = $_POST['Prj_Engg_EPIC_prj_engg_susea'];
		$prj_info['Prj_Engg_prj_mgnt_exp'] = $_POST['Prj_Engg_prj_mgnt_exp'];
		$prj_info['Prj_Engg_type_wrk'] = $_POST['Prj_Engg_type_wrk'];
		$prj_info['Prj_Engg_develop_install_method'] = $_POST['Prj_Engg_develop_install_method'];
		$prj_info['Prj_Engg_develop_mobolisation_plan'] = $_POST['Prj_Engg_develop_mobolisation_plan'];
		$prj_info['Prj_Engg_exp_rel_pipeline_analysis_sw'] = $_POST['Prj_Engg_exp_rel_pipeline_analysis_sw'];
		$prj_info['Prj_Engg_exp_other_pipeline_design_tool'] = $_POST['Prj_Engg_exp_other_pipeline_design_tool'];
		$prj_info['Prj_Engg_exp_structural_analysis_tool_tool'] = $_POST['Prj_Engg_exp_structural_analysis_tool_tool'];
		$prj_info['Prj_Engg_exp_design_details_veri_ack_industry'] = $_POST['Prj_Engg_exp_design_details_veri_ack_industry'];
		$prj_info['Prj_Engg_exp_production_check_design_doc'] = $_POST['Prj_Engg_exp_production_check_design_doc'];
		$prj_info['Prj_Engg_exp_liading_ass_interface'] = $_POST['Prj_Engg_exp_liading_ass_interface'];
		$prj_info['Prj_Engg_exp_engg_mobilisation_oxxasional_period'] = $_POST['Prj_Engg_exp_engg_mobilisation_oxxasional_period'];
		$prj_info['Prj_Engg_exp_engg_technical_support'] = $_POST['Prj_Engg_exp_engg_technical_support'];
		$prj_info['Prj_Engg_exp_participate_req_event'] = $_POST['Prj_Engg_exp_participate_req_event'];
		$prj_info['Prj_Engg_exp_develope_lift_plan'] = $_POST['Prj_Engg_exp_develope_lift_plan'];
		$prj_info['Prj_Engg_strength_plan'] = $_POST['Prj_Engg_strength_plan'];
		$prj_info['Prj_Engg_specification_area_plan'] = $_POST['Prj_Engg_specification_area_plan'];
		$prj_info['Prj_Engg_comfort_cycle_plan'] = $_POST['Prj_Engg_comfort_cycle_plan'];
		$prj_info['Prj_Engg_position_min_rate'] = $_POST['Prj_Engg_position_min_rate'];
		$prj_info['Prj_Engg_position_max_rate'] = $_POST['Prj_Engg_position_max_rate'];

		$data = $this->Authentication_model->verify('Prj_Engg_user_id',$prj_info['Prj_Engg_user_id'],'prj_engg_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($prj_info,'prj_engg_tbl');
			echo json_encode('Project Engg. Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('Prj_Engg_user_id',$prj_info['Prj_Engg_user_id'],$prj_info,'prj_engg_tbl');
			echo json_encode('Project Engg. Details Updated Successfully.');
		}
	}

	public function field_engg_info()
	{
		$field_info['Field_Engg_user_id'] = $_POST['user_id'];
		$field_info['Field_Engg_working_priod_start'] = $_POST['Field_Engg_working_priod_start'];
		$field_info['Field_Engg_working_priod_end'] = $_POST['Field_Engg_working_priod_end'];
		$field_info['Field_Engg_no_year'] = $_POST['Field_Engg_no_year'];
		$field_info['Field_Engg_name_barges_exe_SDS_from'] = $_POST['Field_Engg_name_barges_exe_SDS_from'];
		$field_info['Field_Engg_name_DP2_DSV_exe_SDS_from'] = $_POST['Field_Engg_name_DP2_DSV_exe_SDS_from'];
		$field_info['Field_Engg_IMCA_div_cntr_wrk'] = $_POST['Field_Engg_IMCA_div_cntr_wrk'];
		$field_info['Field_Engg_oil_comp_wrk'] = $_POST['Field_Engg_oil_comp_wrk'];
		$field_info['Field_Engg_EPIC_field_engg_susea'] = $_POST['Field_Engg_EPIC_field_engg_susea'];
		$field_info['Field_Engg_prj_mgnt_exp'] = $_POST['Field_Engg_prj_mgnt_exp'];
		$field_info['Field_Engg_type_wrk'] = $_POST['Field_Engg_type_wrk'];
		$field_info['Field_Engg_develop_install_method'] = $_POST['Field_Engg_develop_install_method'];
		$field_info['Field_Engg_develop_mobolisation_plan'] = $_POST['Field_Engg_develop_mobolisation_plan'];
		$field_info['Field_Engg_exp_rel_pipeline_analysis_sw'] = $_POST['Field_Engg_exp_rel_pipeline_analysis_sw'];
		$field_info['Field_Engg_exp_other_pipeline_design_tool'] = $_POST['Field_Engg_exp_other_pipeline_design_tool'];
		$field_info['Field_Engg_exp_structural_analysis_tool_tool'] = $_POST['Field_Engg_exp_structural_analysis_tool_tool'];
		$field_info['Field_Engg_exp_design_details_veri_ack_industry'] = $_POST['Field_Engg_exp_design_details_veri_ack_industry'];
		$field_info['Field_Engg_exp_production_check_design_doc'] = $_POST['Field_Engg_exp_production_check_design_doc'];
		$field_info['Field_Engg_exp_liading_ass_interface'] = $_POST['Field_Engg_exp_liading_ass_interface'];
		$field_info['Field_Engg_exp_engg_mobilisation_oxxasional_period'] = $_POST['Field_Engg_exp_engg_mobilisation_oxxasional_period'];
		$field_info['Field_Engg_exp_engg_technical_support'] = $_POST['Field_Engg_exp_engg_technical_support'];
		$field_info['Field_Engg_exp_participate_req_event'] = $_POST['Field_Engg_exp_participate_req_event'];
		$field_info['Field_Engg_exp_develope_lift_plan'] = $_POST['Field_Engg_exp_develope_lift_plan'];
		$field_info['Field_Engg_strength_plan'] = $_POST['Field_Engg_strength_plan'];
		$field_info['Field_Engg_specification_area_plan'] = $_POST['Field_Engg_specification_area_plan'];
		$field_info['Field_Engg_comfort_cycle_plan'] = $_POST['Field_Engg_comfort_cycle_plan'];
		$field_info['field_Engg_position_min_rate'] = $_POST['field_Engg_position_min_rate'];
		$field_info['field_Engg_position_max_rate'] = $_POST['field_Engg_position_max_rate'];

		$data = $this->Authentication_model->verify('Field_Engg_user_id',$field_info['Field_Engg_user_id'],'field_engg_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($field_info,'field_engg_tbl');
			echo json_encode('Field Engg. Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('Field_Engg_user_id',$field_info['Field_Engg_user_id'],$field_info,'field_engg_tbl');
			echo json_encode('Field Engg. Details Updated Successfully.');
		}
	}

	public function DSV_MWS_info()
	{
		$DSV['DP_DSV_user_id'] = $_POST['user_id'];
		$DSV['DP_DSV_name'] = $_POST['DP_DSV_name'];
		$DSV['DP_DSV_GRT'] = $_POST['DP_DSV_GRT'];
		$DSV['DP_DSV_subsea_crane_tonnage'] = $_POST['DP_DSV_subsea_crane_tonnage'];
		$DSV['DP_DSV_owner_operator'] = $_POST['DP_DSV_owner_operator'];
		$DSV['DP_DSV_month_serve'] = $_POST['DP_DSV_month_serve'];
		$DSV['DP_DSV_name_1'] = $_POST['DP_DSV_name_1'];
		$DSV['DP_DSV_GRT_1'] = $_POST['DP_DSV_GRT_1'];
		$DSV['DP_DSV_subsea_crane_tonnage_1'] = $_POST['DP_DSV_subsea_crane_tonnage_1'];
		$DSV['DP_DSV_owner_operator_1'] = $_POST['DP_DSV_owner_operator_1'];
		$DSV['DP_DSV_month_serve_1'] = $_POST['DP_DSV_month_serve_1'];
		$DSV['DP_DSV_name_2'] = $_POST['DP_DSV_name_2'];
		$DSV['DP_DSV_GRT_2'] = $_POST['DP_DSV_GRT_2'];
		$DSV['DP_DSV_subsea_crane_tonnage_2'] = $_POST['DP_DSV_subsea_crane_tonnage_2'];
		$DSV['DP_DSV_owner_operator_2'] = $_POST['DP_DSV_owner_operator_2'];
		$DSV['DP_DSV_month_serve_2'] = $_POST['DP_DSV_month_serve_2'];
		$DSV['DP_DSV_name_3'] = $_POST['DP_DSV_name_3'];
		$DSV['DP_DSV_GRT_3'] = $_POST['DP_DSV_GRT_3'];
		$DSV['DP_DSV_subsea_crane_tonnage_3'] = $_POST['DP_DSV_subsea_crane_tonnage_3'];
		$DSV['DP_DSV_owner_operator_3'] = $_POST['DP_DSV_owner_operator_3'];
		$DSV['DP_DSV_month_serve_3'] = $_POST['DP_DSV_month_serve_3'];
		$DSV['DP_DSV_name_4'] = $_POST['DP_DSV_name_4'];
		$DSV['DP_DSV_GRT_4'] = $_POST['DP_DSV_GRT_4'];
		$DSV['DP_DSV_subsea_crane_tonnage_4'] = $_POST['DP_DSV_subsea_crane_tonnage_4'];
		$DSV['DP_DSV_owner_operator_4'] = $_POST['DP_DSV_owner_operator_4'];
		$DSV['DP_DSV_month_serve_4'] = $_POST['DP_DSV_month_serve_4'];
		$DSV['DP_DSV_oil_gas_client_name'] = $_POST['DP_DSV_oil_gas_client_name'];
		$DSV['DP_DSV_oil_gas_client_name_1'] = $_POST['DP_DSV_oil_gas_client_name_1'];
		$DSV['DP_DSV_oil_gas_client_name_2'] = $_POST['DP_DSV_oil_gas_client_name_2'];
		$DSV['DP_DSV_oil_gas_client_name_3'] = $_POST['DP_DSV_oil_gas_client_name_3'];
		$DSV['DP_DSV_oil_gas_client_name_4'] = $_POST['DP_DSV_oil_gas_client_name_4'];
		$DSV['DP_DSV_position_min_rate'] = $_POST['DP_DSV_position_min_rate'];
		$DSV['DP_DSV_position_max_rate'] = $_POST['DP_DSV_position_max_rate'];
		$DSV['DP_DSP_type_wrk'] = $_POST['DP_DSP_type_wrk'];
		$MWS['MWS_user_id'] = $_POST['user_id'];
		$MWS['MWS_employer'] = $_POST['MWS_employer'];
		$MWS['MWS_from'] = $_POST['MWS_from'];
		$MWS['MWS_to'] = $_POST['MWS_to'];
		$MWS['MWS_region'] = $_POST['MWS_region'];
		$MWS['MWS_client'] = $_POST['MWS_client'];
		$MWS['MWS_employer_1'] = $_POST['MWS_employer_1'];
		$MWS['MWS_from_1'] = $_POST['MWS_from_1'];
		$MWS['MWS_to_1'] = $_POST['MWS_to_1'];
		$MWS['MWS_region_1'] = $_POST['MWS_region_1'];
		$MWS['MWS_client_1'] = $_POST['MWS_client_1'];
		$MWS['MWS_employer_2'] = $_POST['MWS_employer_2'];
		$MWS['MWS_from_2'] = $_POST['MWS_from_2'];
		$MWS['MWS_to_2'] = $_POST['MWS_to_2'];
		$MWS['MWS_region_2'] = $_POST['MWS_region_2'];
		$MWS['MWS_client_2'] = $_POST['MWS_client_2'];

		$data = $this->Authentication_model->verify('DP_DSV_user_id',$DSV['DP_DSV_user_id'],'dp_dsv_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($DSV,'dp_dsv_tbl');
			echo json_encode('DP DSV Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('DP_DSV_user_id',$DSV['DP_DSV_user_id'],$DSV,'dp_dsv_tbl');
			echo json_encode('DP DSV Details Updated Successfully.');
		}

		$data1 = $this->Authentication_model->verify('MWS_user_id',$MWS['MWS_user_id'],'mws_tbl');
		if($data1 == 0){
			$records_details = $this->Authentication_model->insert_records($MWS,'mws_tbl');
			echo json_encode('MWS Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('MWS_user_id',$MWS['MWS_user_id'],$MWS,'mws_tbl');
			echo json_encode('MWS Details Updated Successfully.');
		}
	}

	public function ROV_info()
	{
		$ROV['ROV_user_id'] = $_POST['user_id'];
		$ROV['ROV_working_priod_start'] = $_POST['ROV_working_priod_start'];
		$ROV['ROV_working_priod_end'] = $_POST['ROV_working_priod_end'];
		$ROV['ROV_no_year'] = $_POST['ROV_no_year'];
		$ROV['ROV_trench_burial_piloted'] = $_POST['ROV_trench_burial_piloted'];
		$ROV['ROV_heavy_wrlcls_piloted'] = $_POST['ROV_heavy_wrlcls_piloted'];
		$ROV['ROV_light_wrlcls_piloted'] = $_POST['ROV_light_wrlcls_piloted'];
		$ROV['ROV_obs_cls_piloted'] = $_POST['ROV_obs_cls_piloted'];
		$ROV['ROV_tool_skidd_deploy'] = $_POST['ROV_tool_skidd_deploy'];
		$ROV['ROV_manips_7_fun'] = $_POST['ROV_manips_7_fun'];
		$ROV['ROV_manips_5_fun'] = $_POST['ROV_manips_5_fun'];
		$ROV['ROV_manips_3_fun'] = $_POST['ROV_manips_3_fun'];
		$ROV['ROV_ROVSV_wrk_1'] = $_POST['ROV_ROVSV_wrk_1'];
		$ROV['ROV_ROVSV_wrk_2'] = $_POST['ROV_ROVSV_wrk_2'];
		$ROV['ROV_ROVSV_wrk_3'] = $_POST['ROV_ROVSV_wrk_3'];
		$ROV['ROV_rock_dump_vessel_wrk_1'] = $_POST['ROV_rock_dump_vessel_wrk_1'];
		$ROV['ROV_rock_dump_vessel_wrk_2'] = $_POST['ROV_rock_dump_vessel_wrk_2'];
		$ROV['ROV_rock_dump_vessel_wrk_3'] = $_POST['ROV_rock_dump_vessel_wrk_3'];
		$ROV['ROV_deepwater_exp'] = $_POST['ROV_deepwater_exp'];
		$ROV['ROV_SIMOPS_wrk_1'] = $_POST['ROV_SIMOPS_wrk_1'];
		$ROV['ROV_SIMOPS_wrk_2'] = $_POST['ROV_SIMOPS_wrk_2'];
		$ROV['ROV_SIMOPS_wrk_3'] = $_POST['ROV_SIMOPS_wrk_3'];
		$ROV['ROV_SIMOPS_wrk_4'] = $_POST['ROV_SIMOPS_wrk_4'];
		$ROV['ROV_SIMOPS_wrk_5'] = $_POST['ROV_SIMOPS_wrk_5'];
		$ROV['ROV_IMCA_cont_wrk_1'] = $_POST['ROV_IMCA_cont_wrk_1'];
		$ROV['ROV_IMCA_cont_wrk_2'] = $_POST['ROV_IMCA_cont_wrk_2'];
		$ROV['ROV_IMCA_cont_wrk_3'] = $_POST['ROV_IMCA_cont_wrk_3'];
		$ROV['ROV_IMCA_cont_wrk_4'] = $_POST['ROV_IMCA_cont_wrk_4'];
		$ROV['ROV_IMCA_cont_wrk_5'] = $_POST['ROV_IMCA_cont_wrk_5'];
		$ROV['ROV_maintain_IMCA_log_book'] = $_POST['ROV_maintain_IMCA_log_book'];
		$ROV['ROV_oil_comp_wrk_1'] = $_POST['ROV_oil_comp_wrk_1'];
		$ROV['ROV_oil_comp_wrk_2'] = $_POST['ROV_oil_comp_wrk_2'];
		$ROV['ROV_oil_comp_wrk_3'] = $_POST['ROV_oil_comp_wrk_3'];
		$ROV['ROV_oil_comp_wrk_4'] = $_POST['ROV_oil_comp_wrk_4'];
		$ROV['ROV_oil_comp_wrk_5'] = $_POST['ROV_oil_comp_wrk_5'];
		$ROV['ROV_type_wrk'] = $_POST['ROV_type_wrk'];
		$ROV['ROV_position_min_rate'] = $_POST['ROV_position_min_rate'];
		$ROV['ROV_position_max_rate'] = $_POST['ROV_position_max_rate'];

		$data = $this->Authentication_model->verify('ROV_user_id',$ROV['ROV_user_id'],'rov_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($ROV,'rov_tbl');
			echo json_encode('ROV Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('ROV_user_id',$ROV['ROV_user_id'],$ROV,'rov_tbl');
			echo json_encode('ROV Details Updated Successfully.');
		}
	}

	public function LSS_info()
	{
		$LSS['LSS_user_id'] = $_POST['user_id'];
		$LSS['LSS_working_priod_start'] = $_POST['LSS_working_priod_start'];
		$LSS['LSS_working_priod_end'] = $_POST['LSS_working_priod_end'];
		$LSS['LSS_no_year'] = $_POST['LSS_no_year'];
		$LSS['LSS_driver_SAT'] = $_POST['LSS_driver_SAT'];
		$LSS['LSS_maintain_IMCA_log_book'] = $_POST['LSS_maintain_IMCA_log_book'];
		$LSS['LSS_day_log_verify'] = $_POST['LSS_day_log_verify'];
		$LSS['LSS_depth_sat_profile'] = $_POST['LSS_depth_sat_profile'];
		$LSS['LSS_DSV_SPHL_wrk_1'] = $_POST['LSS_DSV_SPHL_wrk_1'];
		$LSS['LSS_DSV_SPHL_wrk_2'] = $_POST['LSS_DSV_SPHL_wrk_2'];
		$LSS['LSS_DSV_SPHL_wrk_3'] = $_POST['LSS_DSV_SPHL_wrk_3'];
		$LSS['LSS_DSV_SPHL_wrk_4'] = $_POST['LSS_DSV_SPHL_wrk_4'];
		$LSS['LSS_DSV_SPHL_wrk_5'] = $_POST['LSS_DSV_SPHL_wrk_5'];
		$LSS['LSS_IMCA_cont_wrk_1'] = $_POST['LSS_IMCA_cont_wrk_1'];
		$LSS['LSS_IMCA_cont_wrk_2'] = $_POST['LSS_IMCA_cont_wrk_2'];
		$LSS['LSS_IMCA_cont_wrk_3'] = $_POST['LSS_IMCA_cont_wrk_3'];
		$LSS['LSS_IMCA_cont_wrk_4'] = $_POST['LSS_IMCA_cont_wrk_4'];
		$LSS['LSS_IMCA_cont_wrk_5'] = $_POST['LSS_IMCA_cont_wrk_5'];
		$LSS['LSS_oil_comp_wrk_1'] = $_POST['LSS_oil_comp_wrk_1'];
		$LSS['LSS_oil_comp_wrk_2'] = $_POST['LSS_oil_comp_wrk_2'];
		$LSS['LSS_oil_comp_wrk_3'] = $_POST['LSS_oil_comp_wrk_3'];
		$LSS['LSS_oil_comp_wrk_4'] = $_POST['LSS_oil_comp_wrk_4'];
		$LSS['LSS_oil_comp_wrk_5'] = $_POST['LSS_oil_comp_wrk_5'];
		$LSS['LSS_involve_evacuation_situation'] = $_POST['LSS_involve_evacuation_situation'];
		$LSS['LSS_involve_HRF'] = $_POST['LSS_involve_HRF'];
		$LSS['LSS_position_min_rate'] = $_POST['LSS_position_min_rate'];
		$LSS['LSS_position_max_rate'] = $_POST['LSS_position_max_rate'];

		$data = $this->Authentication_model->verify('LSS_user_id',$LSS['LSS_user_id'],'lss_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($LSS,'lss_tbl');
			echo json_encode('LSS Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('LSS_user_id',$LSS['LSS_user_id'],$LSS,'lss_tbl');
			echo json_encode('LSS Details Updated Successfully.');
		}
	}

	public function SAT_DIV_info()
	{
		$SAT_DIV['SAT_DIV_user_id'] = $_POST['user_id'];
		$SAT_DIV['SAT_DIV_working_priod_start'] = $_POST['SAT_DIV_working_priod_start'];
		$SAT_DIV['SAT_DIV_working_priod_end'] = $_POST['SAT_DIV_working_priod_end'];
		$SAT_DIV['SAT_DIV_no_year'] = $_POST['SAT_DIV_no_year'];
		$SAT_DIV['SAT_DIV_DAY'] = $_POST['SAT_DIV_DAY'];
		$SAT_DIV['SAT_DIV_MAX_depth'] = $_POST['SAT_DIV_MAX_depth'];
		$SAT_DIV['SAT_DIV_DSV_dived_1'] = $_POST['SAT_DIV_DSV_dived_1'];
		$SAT_DIV['SAT_DIV_DSV_dived_2'] = $_POST['SAT_DIV_DSV_dived_2'];
		$SAT_DIV['SAT_DIV_DSV_dived_3'] = $_POST['SAT_DIV_DSV_dived_3'];
		$SAT_DIV['SAT_DIV_DSV_dived_4'] = $_POST['SAT_DIV_DSV_dived_4'];
		$SAT_DIV['SAT_DIV_DSV_dived_5'] = $_POST['SAT_DIV_DSV_dived_5'];
		$SAT_DIV['SAT_DIV_IMCA_cont_wrk_1'] = $_POST['SAT_DIV_IMCA_cont_wrk_1'];
		$SAT_DIV['SAT_DIV_IMCA_cont_wrk_2'] = $_POST['SAT_DIV_IMCA_cont_wrk_2'];
		$SAT_DIV['SAT_DIV_IMCA_cont_wrk_3'] = $_POST['SAT_DIV_IMCA_cont_wrk_3'];
		$SAT_DIV['SAT_DIV_IMCA_cont_wrk_4'] = $_POST['SAT_DIV_IMCA_cont_wrk_4'];
		$SAT_DIV['SAT_DIV_IMCA_cont_wrk_5'] = $_POST['SAT_DIV_IMCA_cont_wrk_5'];
		$SAT_DIV['SAT_DIV_oil_comp_wrk_1'] = $_POST['SAT_DIV_oil_comp_wrk_1'];
		$SAT_DIV['SAT_DIV_oil_comp_wrk_2'] = $_POST['SAT_DIV_oil_comp_wrk_2'];
		$SAT_DIV['SAT_DIV_oil_comp_wrk_3'] = $_POST['SAT_DIV_oil_comp_wrk_3'];
		$SAT_DIV['SAT_DIV_oil_comp_wrk_4'] = $_POST['SAT_DIV_oil_comp_wrk_4'];
		$SAT_DIV['SAT_DIV_oil_comp_wrk_5'] = $_POST['SAT_DIV_oil_comp_wrk_5'];
		$SAT_DIV['SAT_DIV_oil_field_wrk_1'] = $_POST['SAT_DIV_oil_field_wrk_1'];
		$SAT_DIV['SAT_DIV_oil_field_wrk_2'] = $_POST['SAT_DIV_oil_field_wrk_2'];
		$SAT_DIV['SAT_DIV_oil_field_wrk_3'] = $_POST['SAT_DIV_oil_field_wrk_3'];
		$SAT_DIV['SAT_DIV_oil_field_wrk_4'] = $_POST['SAT_DIV_oil_field_wrk_4'];
		$SAT_DIV['SAT_DIV_oil_field_wrk_5'] = $_POST['SAT_DIV_oil_field_wrk_5'];
		$SAT_DIV['SAT_DIV_type_wrk'] = $_POST['SAT_DIV_type_wrk'];
		$SAT_DIV['SAT_DIV_position_min_rate'] = $_POST['SAT_DIV_position_min_rate'];
		$SAT_DIV['SAT_DIV_position_max_rate'] = $_POST['SAT_DIV_position_max_rate'];

		$data = $this->Authentication_model->verify('SAT_DIV_user_id',$SAT_DIV['SAT_DIV_user_id'],'sat_div_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($SAT_DIV,'sat_div_tbl');
			echo json_encode('SAT DIV Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('SAT_DIV_user_id',$SAT_DIV['SAT_DIV_user_id'],$SAT_DIV,'sat_div_tbl');
			echo json_encode('SAT DIV Details Updated Successfully.');
		}
	}

	public function SAT_DIV_SUP_info()
	{
		$SAT_DIV_SUP['SAT_DIV_SUP_user_id'] = $_POST['user_id'];
		$SAT_DIV_SUP['SAT_DIV_SUP_oil_field_wrk_1'] = $_POST['SAT_DIV_SUP_oil_field_wrk_1'];
		$SAT_DIV_SUP['SAT_DIV_SUP_oil_field_wrk_2'] = $_POST['SAT_DIV_SUP_oil_field_wrk_2'];
		$SAT_DIV_SUP['SAT_DIV_SUP_oil_field_wrk_3'] = $_POST['SAT_DIV_SUP_oil_field_wrk_3'];
		$SAT_DIV_SUP['SAT_DIV_SUP_oil_field_wrk_4'] = $_POST['SAT_DIV_SUP_oil_field_wrk_4'];
		$SAT_DIV_SUP['SAT_DIV_SUP_oil_field_wrk_5'] = $_POST['SAT_DIV_SUP_oil_field_wrk_5'];
		$SAT_DIV_SUP['SAT_DIV_SUP_type_wrk'] = $_POST['SAT_DIV_SUP_type_wrk'];

		$data = $this->Authentication_model->verify('SAT_DIV_SUP_user_id',$SAT_DIV_SUP['SAT_DIV_SUP_user_id'],'sat_div_sup_tbl');
		if($data == 0){
			$records_details = $this->Authentication_model->insert_records($SAT_DIV_SUP,'sat_div_sup_tbl');
			echo json_encode('SAT DIV SUP Details Inserted Successfully.');
		}else{
			$records_details = $this->Authentication_model->update_records('SAT_DIV_SUP_user_id',$SAT_DIV_SUP['SAT_DIV_SUP_user_id'],$SAT_DIV_SUP,'sat_div_sup_tbl');
			echo json_encode('SAT DIV SUP Details Updated Successfully.');
		}

	}

	function upload_profile($file,$folder)						
	{
		$config = array(
			'upload_path' => $folder.'/',
			'upload_url' => base_url().$folder.'/',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'encrypt_name' => TRUE,
			);
		// print_r($folder);die();
		$this->upload->initialize($config);
		if($this->upload->do_upload($file)){
			$upload_files = array('upload_data' => $this->upload->data());
			$file_upload = base_url().$folder.'/'.$upload_files['upload_data']['file_name'];
			$this->upload->data();

			return $file_upload;
		}
	} 

	function upload_document($file,$folder,$cert_name)						
	{
		$config = array(
			'upload_path' => 'Document/'.$folder.'/',
			'upload_url' => base_url().'Document/'.$folder.'/',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'file_name' => $cert_name,
			// 'encrypt_name' => TRUE,
			);
		$this->upload->initialize($config);
		if($this->upload->do_upload($file)){
			$upload_files = array('upload_data' => $this->upload->data());
			$file_upload = base_url().'Document/'.$folder.'/'.$upload_files['upload_data']['file_name'];
			$this->upload->data();

			return $file_upload;
		}
	}

	public function authentication()
	{
		$this->form_validation->set_rules('user_email','trim|required');
		$this->form_validation->set_rules('user_password','password','trim|required');

		if($this->form_validation->run() == FALSE){

			$this->session->set_flashdata('error','Please Enter Correct Details');
			redirect('Welcome');
		}
		else
		{
			$data['user_email'] = $this->input->post('user_email');
			$data['user_password'] = md5($this->input->post('user_password'));
			
			
			$log_check = $this->Authentication_model->login($data);
			if($log_check == 1){
				$this->session->set_flashdata('error',"User does Not Exists");
				redirect('Welcome');
			}elseif ($log_check == 2) {
				$this->session->set_flashdata('Disabled',"User is Disabled By Admin. Please Contact us ..!");
				redirect('Welcome');
			}

		}
	}

	public function user_logout()
	{
		$this->session->unset_userdata('subsea_user',$sessiondata);
		$this->session->unset_userdata('subsea_admin',$sessiondata);
		redirect('https://gr8synergy.com/subsea/');
	}

	public function registration_detials()
	{
// 		$this->session->unset_userdata('user_details');
		$data['flash']['active'] = $this->session->flashdata('active');
    	$data['flash']['title'] = $this->session->flashdata('title');
    	$data['flash']['text'] = $this->session->flashdata('text');
    	$data['flash']['type'] = $this->session->flashdata('type');
		$this->load->view('registration_details',$data);
	}

	public function register_user_details()
	{
		$user['user_firstname'] = $this->input->post('user_firstname');
		$user['user_lastname'] = $this->input->post('user_lastname');
		$user['user_email'] = $this->input->post('user_email');
		$user['user_mobile_no'] = $this->input->post('user_mobile_no');
		// $user['user_position_ref_2'] = $this->input->post('user_position_ref_2');
		$nationality = $this->input->post('user_nationality');
		if($nationality == 'Indian'){
			$user['user_nationality'] = $this->input->post('user_nationality');
		}else{
			$user['user_nationality'] = $this->input->post('user_other_nationality');			
		}
		$user['user_division'] = $this->input->post('user_division');
		$user['user_apply_position'] = $this->input->post('user_apply_position');
		$user['user_msg'] = $this->input->post('user_msg');
		$password = $this->rand_gen->generate(10);
		$user['user_password'] = md5(''.$password.'');
 		//print_r($this->rand_gen->generate(10));die();

		$config['protocol'] = $this->config->item('protocol');
		$config['smtp_host'] = $this->config->item('smtp_host');
		$config['smtp_port'] = $this->config->item('smtp_port');
		$config['smtp_timeout'] = $this->config->item('smtp_timeout');
		$config['smtp_user'] = $this->config->item('smtp_user');
		$config['smtp_pass'] = $this->config->item('smtp_pass');
		$config['charset'] = $this->config->item('charset');
		$config['newline'] = $this->config->item('newline');
		$config['mailtype'] = $this->config->item('mailtype');
		$config['validation'] = $this->config->item('validation');

		$this->email->initialize($config);
		$this->email->from('info_subsea@gr8synergy.com');
		$this->email->to(''.$user['user_email'].'');
		$this->email->subject('Thank you for registering with gr8synergy subsea.');
		if($user['user_nationality'] == 'Indian'){	
			$this->email->message("Dear ".$user['user_firstname'].",<br>Thank you for registering with gr8synergy subsea(India). <br><br>Your login details are as follows:<br> Username: ".$user['user_email']." <br>  Password: ".$password."<br><br>If you have not completed the survey kindly log in and complete the Survey.<br><a href='https://gr8synergy.com/subsea/subseaform/'>https://gr8synergy.com/subsea/subseaform/</a><br>Kindly share the below link with your professsional acquaintances who you feel would benefit from registering with gr8synergy.<br> <a href='https://gr8synergy.com/subsea/subseaform/index.php/Welcome/registration_detials'>https://gr8synergy.com/subsea/subseaform/index.php/Welcome/registration_detials</a><br>We will revert soon on you registered email requesting you to upload your CV’s on a Client approved format (work in progress).<br><br>   Regards,<br> gr8synergy subsea team.");
		}else{
			$this->email->message("Dear ".$user['user_firstname'].",<br>Thank you for registering with gr8synergy subsea(India). <br><br>Your login details are as follows:<br> Username: ".$user['user_email']." <br>  Password: ".$password."<br><br>Kindly share the below link with your professsional acquaintances who you feel would benefit from registering with gr8synergy.<br> <a href='https://gr8synergy.com/subsea/subseaform/index.php/Welcome/registration_detials'>https://gr8synergy.com/subsea/subseaform/index.php/Welcome/registration_detials</a><br>We will revert soon on you registered email requesting you to upload your CV’s on a Client approved format (work in progress).<br><br>   Regards,<br> gr8synergy subsea team.");
		}
		$email_verify = $this->Authentication_model->verify('user_email',$user['user_email'],'user_tbl');
		if($email_verify == 0){
			$mobile_verify = $this->Authentication_model->verify('user_mobile_no',$user['user_mobile_no'],'user_tbl');
			if($mobile_verify == 0){
				if($this->email->send()){
				}
				$this->db->insert('user_tbl',$user);
				$this->session->set_userdata('user_details',$this->db->insert_id());
			
				$kin['kin_user_id'] = $this->db->insert_id();
				$CSR['CSR_user_id'] = $this->db->insert_id();
				$medical['medical_user_id'] = $this->db->insert_id();
				$diving['diving_user_id'] = $this->db->insert_id();
				$engg['engg_user_id'] = $this->db->insert_id();
				$mgnt['mgnt_user_id'] = $this->db->insert_id();
				$marine['marine_user_id'] = $this->db->insert_id();
				$STCW['STCW_user_id'] = $this->db->insert_id();
				$SME['SME_user_id'] = $this->db->insert_id();
				$CSR_PART['CSR_user_id'] = $this->db->insert_id();
				$DPM['DPM_user_id'] = $this->db->insert_id();
				$DOM['DoM_user_id'] = $this->db->insert_id();
				$SDS['SDS_user_id'] = $this->db->insert_id();
				$Prj_Engg['Prj_Engg_user_id'] = $this->db->insert_id();
				$field_Engg['Field_Engg_user_id'] = $this->db->insert_id();
				$DSV['DP_DSV_user_id'] = $this->db->insert_id();
				$MWS['MWS_user_id'] = $this->db->insert_id();
				$ROV['ROV_user_id'] = $this->db->insert_id();
				$LSS['LSS_user_id'] = $this->db->insert_id();
				$SAT_DIV['SAT_DIV_user_id'] = $this->db->insert_id();
				$SAT_DIV_SUP['SAT_DIV_SUP_user_id'] = $this->db->insert_id();
				$this->db->insert('kin_tbl',$kin);
				$this->db->insert('csr_tbl',$CSR);
				$this->db->insert('medical_tbl',$medical);
				$this->db->insert('diving_tbl',$diving);
				$this->db->insert('engg_tbl',$engg);
				$this->db->insert('mgnt_tbl',$mgnt);
				$this->db->insert('marine_tbl',$marine);
				$this->db->insert('stcw_tbl',$STCW);
				$this->db->insert('sme_tbl',$SME);
				$this->db->insert('csr_prt_tbl',$CSR_PART);
				$this->db->insert('dpm_tbl',$DPM);
				$this->db->insert('dom_tbl',$DOM);
				$this->db->insert('sds_tbl',$SDS);
				$this->db->insert('prj_engg_tbl',$Prj_Engg);
				$this->db->insert('field_engg_tbl',$field_Engg);
				$this->db->insert('dp_dsv_tbl',$DSV);
				$this->db->insert('mws_tbl',$MWS);
				$this->db->insert('rov_tbl',$ROV);
				$this->db->insert('lss_tbl',$LSS);
				$this->db->insert('sat_div_tbl',$SAT_DIV);
				$this->db->insert('sat_div_sup_tbl',$SAT_DIV_SUP);

				if($user['user_nationality'] == 'Indian'){			
					$this->session->set_flashdata('active',12);
			        $this->session->set_flashdata('title',"");
			        $this->session->set_flashdata('text',"Would you like to participate in a a survey specifically wrt to Offshore Diving Operations in India to help us understand your professional outlook. The survey should not take more than 3 minutes of your time."); 
			        $this->session->set_flashdata('type',"success");
					redirect('Welcome/registration_detials');
				}else{
					$this->session->set_flashdata('active',1);
			        $this->session->set_flashdata('title',"Thank You.");
			        $this->session->set_flashdata('text',"Thank you for registering with gr8synergy subsea (India) an email has been sent to your registered account."); 
			        $this->session->set_flashdata('type',"success");
					redirect('Welcome/registration_detials');
				}
			}else{
				$this->session->set_flashdata('active',1);
		        $this->session->set_flashdata('title',"Sorry");
		        $this->session->set_flashdata('text',"Mobile number already register with Subsea. Please try with other mobile number."); 
		        $this->session->set_flashdata('type',"warning");
				redirect('Welcome/registration_detials');
			}
		}else{
			$this->session->set_flashdata('active',1);
	        $this->session->set_flashdata('title',"Sorry");
	        $this->session->set_flashdata('text',"Email already register with Subsea. Please try with other emailID."); 
	        $this->session->set_flashdata('type',"warning");
			redirect('Welcome/registration_detials');
		}

	}

	public function subsea_surve()
	{
		$data['flash']['active'] = $this->session->flashdata('active');
    	$data['flash']['title'] = $this->session->flashdata('title');
    	$data['flash']['text'] = $this->session->flashdata('text');
    	$data['flash']['type'] = $this->session->flashdata('type');
    	if(isset($this->session->userdata['user_details'])){
    		$data['user_id'] = $this->session->userdata('user_details');
    	}elseif(isset($this->session->userdata['subsea_user'])){
    		$data['user_id'] = $this->session->userdata('subsea_user');
    	}else{
    		redirect('/');
    	}
    
		$this->load->view('serve_details',$data);
		//$this->session->unset_userdata('user_details');
	}

	public function register_surve()
	{
		$surve['surve_user_id'] = $this->input->post('surve_user_id');
		$surve['surve_type'] = $this->input->post('surve_type');
		$surve['surve_change_offshore_prjct'] = $this->input->post('surve_change_offshore_prjct');
		$surve['surve_age_limit'] = $this->input->post('surve_age_limit');
		$surve['surve_age_details'] = $this->input->post('surve_age_details');
		$surve['surve_comm_diving'] = $this->input->post('surve_comm_diving');
		$surve['surve_age_limit_diving'] = $this->input->post('surve_age_limit_diving');
		$surve['surve_age_diving_details'] = $this->input->post('surve_age_diving_details');
		$surve['surve_diving_support_vessel'] = $this->input->post('surve_diving_support_vessel');
		$surve['surve_dynamic_position'] = $this->input->post('surve_dynamic_position');
		$surve['surve_incosistent_pay_scale'] = $this->input->post('surve_incosistent_pay_scale');
		$surve['surve_bearing_mind'] = $this->input->post('surve_bearing_mind');
		$surve['surve_diver_pay'] = $this->input->post('surve_diver_pay');
		$surve['surve_indian_nationality'] = $this->input->post('surve_indian_nationality');
		$surve['surve_employ_sub_mater'] = $this->input->post('surve_employ_sub_mater');
		$surve['surve_SDO_IMCA_OGP'] = $this->input->post('surve_SDO_IMCA_OGP');
		$surve['surve_national_regulation'] = $this->input->post('surve_national_regulation');
		$surve['surve_UK_ACoP'] = $this->input->post('surve_UK_ACoP');
		$surve['surve_lead_subsea_engg'] = $this->input->post('surve_lead_subsea_engg');
		$surve['surve_agree_factor'] = $this->input->post('surve_agree_factor');
		$surve['surve_rov_intervention'] = $this->input->post('surve_rov_intervention');
		$surve['surve_log_opr_mgnt'] = $this->input->post('surve_log_opr_mgnt');
		$surve['surve_questionnaire'] = $this->input->post('surve_questionnaire');
		$surve['surve_share_survy_quest'] = $this->input->post('surve_share_survy_quest');
		$surve['surve_date'] = date('Y-m-d');
		
		$data = $this->Authentication_model->verify('surve_user_id',$surve['surve_user_id'],'subsea_surve');
		if($data == 0){
			$records_details = 	$this->Authentication_model->insert_records($surve,'subsea_surve');
		}else{
			$records_details = $this->Authentication_model->update_records('surve_user_id',$surve['surve_user_id'],$surve,'subsea_surve');
		}
		// $this->Authentication_model->insert_records($surve,'subsea_surve');
		if(isset($this->session->userdata['user_details'])){
    		$this->session->set_flashdata('active',1);
	        $this->session->set_flashdata('title',"Thank You.");
	        $this->session->set_flashdata('text',"Thank you for registering with gr8synergy subsea (India) an email has been sent to your registered account."); 
	        $this->session->set_flashdata('type',"success");
			redirect('Welcome/registration_detials');
    	}elseif(isset($this->session->userdata['subsea_user'])){
    		$this->session->set_flashdata('active',1);
	        $this->session->set_flashdata('title',"Thank You.");
	        $this->session->set_flashdata('text',"Thank you for participate in subsea survey."); 
	        $this->session->set_flashdata('type',"success");
			redirect('Welcome/contact_us');
    	}
	}

	public function forgot_password(){
		$data['flash']['active'] = $this->session->flashdata('active');
    	$data['flash']['title'] = $this->session->flashdata('title');
    	$data['flash']['text'] = $this->session->flashdata('text');
    	$data['flash']['type'] = $this->session->flashdata('type');
		$this->load->view('forgot_password',$data);
	}

	public function resent_forgot_password()
	{
		$user_email = $this->input->post('user_email');
		$password1 = $this->rand_gen->generate(10);
		$password = md5(''.$password1.'');

		$data = $this->Authentication_model->verify('user_email',$user_email,'user_tbl');
		if($data == 0){
			$this->session->set_flashdata('active',1);
	        $this->session->set_flashdata('title',"Sorry");
	        $this->session->set_flashdata('text',"Email is not registered with gr8synergy subsea. Please register!"); 
	        $this->session->set_flashdata('type',"warning");
			redirect('Welcome');
		}else{
			$firstName = $this->db->SELECT('user_firstname')->where('user_email',$user_email)->get('user_tbl')->result_array();
			$config['protocol'] = $this->config->item('protocol');
			$config['smtp_host'] = $this->config->item('smtp_host');
			$config['smtp_port'] = $this->config->item('smtp_port');
			$config['smtp_timeout'] = $this->config->item('smtp_timeout');
			$config['smtp_user'] = $this->config->item('smtp_user');
			$config['smtp_pass'] = $this->config->item('smtp_pass');
			$config['charset'] = $this->config->item('charset');
			$config['newline'] = $this->config->item('newline');
			$config['mailtype'] = $this->config->item('mailtype');
			$config['validation'] = $this->config->item('validation');

			$this->email->initialize($config);
			$this->email->from('info_subsea@gr8synergy.com');
			$this->email->to(''.$user_email.'');
			$this->email->subject('New Password for your gr8synergy subsea LOGIN.');	
			$this->email->message("Dear ".$firstName[0]['user_firstname'].",<br><br>As requested, your new password is : ".$password1."<br>Kindly LOGIN and change your password to ensure secure access.<br><br>Regards,<br> gr8synergy subsea team.");

			if($this->email->send()){
				$this->db->set('user_password',$password)->where('user_email',$user_email)->update('user_tbl');
				$this->session->set_flashdata('active',1);
		        $this->session->set_flashdata('title',"Done");
		        $this->session->set_flashdata('text',"Password has been sent to your registered email."); 
		        $this->session->set_flashdata('type',"success");
				redirect('Welcome');
			}else{
				$this->session->set_flashdata('active',1);
		        $this->session->set_flashdata('title',"Sorry");
		        $this->session->set_flashdata('text',"Please try again."); 
		        $this->session->set_flashdata('type',"success");
				redirect('Welcome/forgot_password');
			}
		}
	}

	public function reset_password()
	{
		if(isset($this->session->userdata['subsea_admin'])){
    		$user_id = $this->session->userdata('subsea_admin');
    	}elseif(isset($this->session->userdata['subsea_user'])){
    		$duser_id = $this->session->userdata('subsea_user');
    	}
    	$data['admin_details'] = $this->db->query("SELECT * from user_tbl where user_id = ".$user_id."")->result_array();
    	$this->load->view('reset_password',$data);
	}

	public function update_user_pwd()
	{
		$user_id = $this->input->post('user_id');
		$user_password = md5(''.$this->input->post('user_password').'');
		$this->db->set('user_password',$user_password)->where('user_id',$user_id)->update('user_tbl');
		$this->session->set_flashdata('active',1);
        $this->session->set_flashdata('title',"Done");
        $this->session->set_flashdata('text',"Your password as been updated successfully."); 
        $this->session->set_flashdata('type',"success");
        if(isset($this->session->userdata['subsea_admin'])){
    		redirect('Welcome/user_admin_details');
    	}elseif(isset($this->session->userdata['subsea_user'])){
    		redirect('Welcome/user_subsea_cv');
    	}
	}

	public function user_survy_details()
	{
		$surve_user_id = $_POST['surve_user_id'];
		$data = $this->db->query("SELECT surve_id,surve_type,surve_change_offshore_prjct,DATE_FORMAT(surve_date,
			'%d/%m/%Y') as surve_date,
				CASE when surve_age_limit IS NULL then 'NA' else surve_age_limit end as surve_age_limit,
				CASE when surve_comm_diving IS NULL then 'NA' else surve_comm_diving end as surve_comm_diving,
				CASE when surve_age_limit_diving IS NULL then 'NA' else surve_age_limit_diving end as surve_age_limit_diving,
				CASE when surve_diving_support_vessel IS NULL then 'NA' else surve_diving_support_vessel end as surve_diving_support_vessel,
				CASE when surve_dynamic_position IS NULL then 'NA' else surve_dynamic_position end as surve_dynamic_position,
				CASE when surve_incosistent_pay_scale IS NULL then 'NA' else surve_incosistent_pay_scale end as surve_incosistent_pay_scale,
				CASE when surve_bearing_mind IS NULL then 'NA' else surve_bearing_mind end as surve_bearing_mind,
				CASE when surve_diver_pay IS NULL then 'NA' else surve_diver_pay end as surve_diver_pay,
				CASE when surve_indian_nationality IS NULL then 'NA' else surve_indian_nationality end as surve_indian_nationality,
				CASE when surve_employ_sub_mater IS NULL then 'NA' else surve_employ_sub_mater end as surve_employ_sub_mater,
				CASE when surve_SDO_IMCA_OGP IS NULL then 'NA' else surve_SDO_IMCA_OGP end as surve_SDO_IMCA_OGP,
				CASE when surve_national_regulation IS NULL then 'NA' else surve_national_regulation end as surve_national_regulation,
				CASE when surve_UK_ACoP IS NULL then 'NA' else surve_UK_ACoP end as surve_UK_ACoP,
				CASE when surve_lead_subsea_engg IS NULL then 'NA' else surve_lead_subsea_engg end as surve_lead_subsea_engg,
				CASE when surve_agree_factor IS NULL then 'NA' else surve_agree_factor end as surve_agree_factor,
				CASE when surve_rov_intervention IS NULL then 'NA' else surve_rov_intervention end as surve_rov_intervention,
				CASE when surve_log_opr_mgnt IS NULL then 'NA' else surve_log_opr_mgnt end as surve_log_opr_mgnt,
				CASE when surve_questionnaire IS NULL then 'NA' else surve_questionnaire end as surve_questionnaire,
				CASE when surve_share_survy_quest IS NULL then 'NA' else surve_share_survy_quest end as surve_share_survy_quest,
				user_tbl.* FROM `subsea_surve` join user_tbl on surve_user_id = user_id WHERE surve_user_id=".$surve_user_id."")->result_array();
		echo json_encode($data);
	}

	public function survy_admin_details()
	{
		if(!isset($this->session->userdata['subsea_admin']))
		{
			redirect('/');
		}
		$data['admin_details'] = $this->db->query("SELECT * from user_tbl where user_id = ".$this->session->userdata['subsea_admin']."")->result_array();
		$this->load->view('view_survy_details',$data);
	}


	public function surve_count_details($surve_type,$quest,$status)		
	{		
		$data = $this->db->query("SELECT count(*)as total_count FROM `subsea_surve` WHERE ".$quest." = '".$status."' and surve_type = '".$surve_type."'")->result_array();
		if(empty($data)){
			return 0;
		}else{
			return $data[0]['total_count'];
		}
	}

	public function surve_NA_count_details($surve_type,$quest,$status)		
	{		
		$data = $this->db->query("SELECT count(*)as total_count FROM `subsea_surve` WHERE ".$quest." IS NULL and surve_type = '".$surve_type."'")->result_array();
		if(empty($data)){
			return 0;
		}else{
			return $data[0]['total_count'];
		}
	}

	public function contact_us()
	{
		if(!isset($this->session->userdata['subsea_user']))
		{
			redirect('/');
		}
		$data['flash']['active'] = $this->session->flashdata('active');
    	$data['flash']['title'] = $this->session->flashdata('title');
    	$data['flash']['text'] = $this->session->flashdata('text');
    	$data['flash']['type'] = $this->session->flashdata('type');
		$data['admin_details'] = $this->db->query("SELECT * from user_tbl where user_id = ".$this->session->userdata['subsea_user']."")->result_array();
		$this->load->view('contact_us',$data);
	}

	public function register_contact()
	{
		$contact['contact_user_id'] = $this->input->post('contact_user_id');
		$contact['contact_title'] = $this->input->post('contact_title');
		$contact['contact_msg'] = $this->input->post('contact_msg');
		$contact['contact_date'] = date('Y-m-d');
		$contact_no = $this->input->post('contact_mobile_number');
		$email = $this->input->post('contact_email_id');
		$name = $this->input->post('user_name');
		// print_r($contact);die();

		$config['protocol'] = $this->config->item('protocol');
		$config['smtp_host'] = $this->config->item('smtp_host');
		$config['smtp_port'] = $this->config->item('smtp_port');
		$config['smtp_timeout'] = $this->config->item('smtp_timeout');
		$config['smtp_user'] = $this->config->item('smtp_user');
		$config['smtp_pass'] = $this->config->item('smtp_pass');
		$config['charset'] = $this->config->item('charset');
		$config['newline'] = $this->config->item('newline');
		$config['mailtype'] = $this->config->item('mailtype');
		$config['validation'] = $this->config->item('validation');

		$this->email->initialize($config);
		$this->email->from(''.$email .'');
		$this->email->to('contactgr8synergysubsea@gmail.com');
		$this->email->subject('Query :'.$contact['contact_title'].'');	
		$this->email->message("Dear admin,<br><br>Message :".$contact['contact_msg'].",<br>Username/Email : ".$email."<br>Contact Number : ".$contact_no."<br><br>Regards,<br>".$name.".");
	
		if($this->email->send()){
			$records_details = 	$this->Authentication_model->insert_records($contact,'contact_us');
			$this->session->set_flashdata('active',1);
	        $this->session->set_flashdata('title',"Thank You");
	        $this->session->set_flashdata('text',"Thank you for your message gr8synergy team will revert back within 72 hours."); 
	        $this->session->set_flashdata('type',"success");
		}
		redirect('Welcome/contact_us');
	}
}
