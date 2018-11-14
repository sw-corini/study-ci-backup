<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

/** VIEW */
	// 리스트 페이지
	public function index(){
		$this->load->model('model_users');
		$items = $this->model_users->reads();
		print_r($items);
		$this->load->view('sign_up/index'); //view로딩한다
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
