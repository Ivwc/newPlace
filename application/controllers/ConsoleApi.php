<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ConsoleApi extends CI_Controller {

  public function login()
  {
    $data['memberId'] = $this->input->post('memberId');
    $data['memberPassword'] = $this->input->post('memberPassword');
    
    if(!empty($data['memberId']) && !empty($data['memberPassword'])){
      $this->load->model('loginModel');
      $status = $this->loginModel->checkAccount($data);
      switch ($status) {
        case 'id':
          set_session_error('无此帐号');
          redirect('console/login','refresh');
          break;
        case 'pwd':
          set_session_error('密码错误');
          redirect('console/login','refresh');
          break;
        case 'ok':
          $res = $this->loginModel->login($data);
          if(count($res) > 0){
            set_session_error('');
            set_user_session($res);
            redirect('console','refresh');
          }else{
            set_session_error('无此帐号，请联络管理员');
            redirect('console/login','refresh');
          }
          break;
        default:
          set_session_error('系统发生错误，请稍后在试');
          redirect('console/login','refresh');
          break;
      }
    }else{
      set_session_error('帐号或密码未填写');
      redirect('console/login','refresh');
    }
    
  }

  public function logout(){
    clean_user_session();
    redirect('console/login','refresh');
  }

}

/* End of file ConsoleApi.php */
