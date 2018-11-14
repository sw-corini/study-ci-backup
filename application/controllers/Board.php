<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

	/** VIEW */
	// 리스트 페이지
	public function index(){
		$this->load->view('board'); //view로딩한다
	}

	// 등록 페이지
	public function create(){

	}
	// 수정 페이지
	public function edit(){

	}
	//상세보기 페이지
	public function show(){

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
