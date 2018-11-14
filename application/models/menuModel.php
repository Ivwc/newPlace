<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class menuModel extends CI_Model {

  function get_menu_product(){

    // 写你的跟sql沟通的扣
    // $this->db->where('m_id','1');

    // $this->db->order_by('num','ASC');
    // $this->db->select('*');
    // $this->db->from('menu');
    // $this->db->join('menu','menu.m_id=product.m_id');
    
    $m_res = $this->db->get('menu')->result_array();
    

    foreach($m_res as $key=>$value){

        $this->db->where('m_id', $value['m_id']); 
        $p_res[$value['m_id']] = $this->db->get('product')->result_array();
        //这句意思是$p_res[1]=
        $p_res[$value['m_id']]['menu'] = $value;

    }
    
    

    
    // $m_p_res=array($m_res,$p_res);
    // $res = $this->db->get('menu')->row_array();
    //  print_r($res);

    // $this->db->select('m_id,num,xxx,rrr');
    // $this->db->where('栏位','123');篩選
    // $this->db->order_by('栏位','ASC');
    // $res = $this->db->get('资料表名称')->result_array();如果是"多"笔资料用这个
    // $res = $this->db->get('资料表名称')->row_array();如果是"单"笔资料用这个
    return $p_res;
  }

  function get_menu_banner(){

    $m_b_res=$this->db->get('menu_banner')->result_array();


    return $m_b_res;

  }



}

/* End of file MenuModel.php */

?>