<?php

class stack_model extends CI_Model {

    

    public function __construct() {
        parent::__construct();
    }

    function get_data()
    {
        return $this->db->get('data_stack')->result_array();
    }
    public function add($id){
        $data = array(
            'data' => $this->input->post('data')
        );

        $this->db->insert('data_stack', $data);
    }
    public function insert($id,$row){
        $data = array(
            'data' => $this->input->post('data')
        );

        $this->db->insert('data_stack', $data, row($row));
    }
    public function del() {
        $this->db->empty_table('data_stack');
    }

}    