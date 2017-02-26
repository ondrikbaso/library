<?php
Class Book_model extends CI_model {
	public function getbook($a){
		$this->db->select('*');
		$this->db->from($a);
		return $this->db->get()->result_array();
	}

	public function addBook($insert_data){
		$this->db->insert('books',$insert_data);
		if ($this->db->affected_rows() > 0)
			return true;
		else return false;
	}

	public function deleteBook($chosen_id) {
		$this->db->where('id_books',$chosen_id);
		$this->db->delete('books');
	}

	public function updateBook($update_data,$id_books){
		$this->db->where('id_books',$id_books);
		$this->db->update('books',$update_data);

	}

	public function borrowBook($chosen_id) {
		$this->db->query("INSERT IGNORE INTO taken_books (id_books, author, name)
			SELECT  id_books, author, name 
			FROM books
			WHERE id_books = $chosen_id");
		$this->db->where('id_books',$chosen_id);
		$this->db->delete('books');
	}

	public function returnBook($chosen_id) {
		$this->db->query("INSERT IGNORE INTO books (id_books, author, name)
			SELECT  id_books, author, name 
			FROM taken_books
			WHERE id_books = $chosen_id");
		$this->db->where('id_books',$chosen_id);
		$this->db->delete('taken_books');
	}
}