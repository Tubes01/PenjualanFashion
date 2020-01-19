<?php
class model_operator extends CI_Model{
    
    
    
    function login($username,$password)
    {
        $chek=  $this->db->get_where('operator',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    
    function tampildata()
    {
        return $this->db->get('operator');
    }
    
    function get_one($id)
    {
        $param  =   array('operator_id'=>$id);
        return $this->db->get_where('operator',$param);
    }

     function edit()
    {
        $data=array(
           'nama_operator'=>  $this->input->post('operator')
                    );
        $this->db->where('operator_id',$this->input->post('id'));
        $this->db->update('operator',$data);
    }

        function delete()
    {
        $operator_id=$this->input->post('operator_id');
        $this->operator->delete($operator_id);
        redirect('operator');
    }
}