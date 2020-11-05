<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Add_model extends CI_Model {
		function __construct(){
            parent::__construct();
        }

        function origin_insert($data){
			$this->db->insert('the_origin',$data);
		} 
		function huayrach_insert($data1){
			$this->db->insert('huayrach',$data1);
		}
		function destination_insert($data2){
			$this->db->insert('destination',$data2);
        }
        function note_insert($data3){
			$this->db->insert('note',$data3);
        }
        
		function select_all(){
			$this->db->select('*');
					$this->db->from('the_origin');
					$this->db->join('huayrach', 'huayrach.no_train = the_origin.no_train', 'left');
					$this->db->join('destination','destination.no_train = the_origin.no_train', 'left');
					$this->db->join('note','note.note_id= the_origin.note_id', 'left');
					$this->db->where('time_full >' ,"14.00");
					$query = $this->db->get();
					return $query->result();

			
		}
    }