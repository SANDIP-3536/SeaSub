<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Authentication_model extends CI_Model{
		public function login($data)
		{
			$login = $this->db->select('user_id,user_type,user_nationality')->where('user_email',$data['user_email'])->where('user_password',$data['user_password'])->get('user_tbl')->result_array();
			if(empty($login)){
				return 1;
			}else{
				if($login[0]['user_type']==1){
					$this->session->set_userdata('subsea_admin',$login[0]['user_id']);
					redirect('Welcome/user_admin_details');
				}elseif($login[0]['user_type']==2){	
					$this->session->set_userdata('subsea_user',$login[0]['user_id']);
					if($login[0]['user_nationality'] == 'Indian'){	
						$surve_done = $this->db->where('surve_user_id',$login[0]['user_id'])->get('subsea_surve')->result_array();	
						if(empty($surve_done)){			
							$this->session->set_flashdata('active',12);
					        $this->session->set_flashdata('title',"");
					        $this->session->set_flashdata('text',"Would you like to participate in a a survey specifically wrt to Offshore Diving Operations in India to help us understand your professional outlook. The survey should not take more than 3 minutes of your time."); 
					        $this->session->set_flashdata('type',"success");
							redirect('Welcome');
						}else{
							// $this->session->set_flashdata('active',1);
					  //       $this->session->set_flashdata('title',"Thank You.");
					  //       $this->session->set_flashdata('text',"We are under the process of Developeing CV upload template inconsulation with Clients. Once Completed we will notify you via your registered email ID."); 
					  //       $this->session->set_flashdata('type',"success");
							redirect('Welcome/contact_us');
						}
					}else{
						// $this->session->set_flashdata('active',1);
				  //       $this->session->set_flashdata('title',"Thank You.");
				  //       $this->session->set_flashdata('text',"We are under the process of Developeing CV upload template inconsulation with Clients. Once Completed we will notify you via your registered email ID."); 
				  //       $this->session->set_flashdata('type',"success");
						// redirect('Welcome');
						redirect('Welcome/contact_us');
					}
				}else{
					return 1;
				}
			}
		}

		public function verify($feild,$id,$table)
		{
			return $this->db->where($feild,$id)->get($table)->num_rows();
		}

		public function insert_records($data,$table)
		{
			$this->db->insert($table,$data);
			return$this->db->insert_id();
		}
		public function update_records($feild,$id,$data,$table)
		{
			$this->db->where($feild,$id)->update($table,$data);
			return $this->db->insert_id();
		}
	}
?>