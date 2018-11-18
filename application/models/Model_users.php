<?php
class Model_users extends CI_Model {

    public $title;
    public $content;
    public $date;

    /* CRUD : 데이타용 */
	// 리스트 데이타
	public function reads(){
        $sql = 'SELECT 
                    * 
                FROM 
                    users';
        $sql = $this->db->query($sql);
        return $sql->result();
	}
	// 상세보기 데이타
	public function read(){

	}
	// 등록 처리
	public function store($arr){
        $this->db->insert('users', $arr);
	}
	// 수정 처리
	public function update(){

	}
	// 삭제 처리
	public function destory(){

	}

    public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
    }

    public function get_last_ten_entries()
    {
            $query = $this->db->get('entries', 10);
            return $query->result();
    }

    public function insert_entry()
    {
            $this->title    = $_POST['title']; // please read the below note
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->insert('entries', $this);
    }

    public function update_entry()
    {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
?>
