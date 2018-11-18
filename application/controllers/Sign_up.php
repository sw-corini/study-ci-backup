<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

/** VIEW */
	// 리스트 페이지
	public function index(){
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules(
			'user_id', 
			'아이디', 
			'trim|required|min_length[4]|max_length[20]|is_unique[users.user_id]', 
			array(
				'required'      => '%s를 입력해주세요.',
				'is_unique'     => '%s는 이미 사용중인 아이디 입니다.'
			)
		);
		$this->form_validation->set_rules(
			'user_pwd', 
			'비밀번호', 
			'trim|required|min_length[4]|max_length[45]|md5', 
			array(
				'required'      => '%s를 입력해주세요.'
			)
		);
		$this->form_validation->set_rules(
			'user_pwd2', 
			'비밀번호 확인', 
			'trim|required|matches[user_pwd]|md5', 
			array(
				'required'      => '%s을 입력해주세요.',
				'matches'      	=> '%s은 비밀번호와 일치해야 합니다.'
			)
		);
		$this->form_validation->set_rules(
			'user_name', 
			'이름', 
			'trim|required', 
			array(
				'required'      => '%s을 입력해주세요.'
			)
		);
		$this->form_validation->set_rules(
			'user_phone', 
			'전화번호', 
			'trim|required', 
			array(
				'required'      => '%s를 입력해주세요.'
			)
		);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('sign_up/index');
		}
		else{
			if(!function_exists('password_hash')){
				$this->load->helper('password');
			}
			$hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
			$this->load->model('model_users');
			$this->model_users->store(array(
				'user_id'		=>$this->input->post('user_id'),
				'user_pwd'		=>$hash,
				'user_name'		=>$this->input->post('user_name'),
				'user_phone'	=>$this->input->post('user_phone')
			));
			$this->load->library('session');
			$this->session->set_flashdata('user_name', $this->input->post('user_name'));
			$this->load->view('sign_up/show');
		}
	}

	// 등록 페이지
	public function create(){
		$this->load->view('sign_up/create');
	}
	// 수정 페이지
	public function edit($id){
		echo $id;
		$this->load->view('sign_up/edit');
	}
	//상세보기 페이지
	public function show(){
		$this->load->view('sign_up/show');
	}

	/* CRUD : 데이타용 */
	// 리스트 데이타
	public function reads(){

	}
	// 상세보기 데이타
	public function read(){

	}
	// 등록 처리
	public function store(){
		
	}
	// 수정 처리
	public function update(){

	}
	// 삭제 처리
	public function destory(){

	}

}
