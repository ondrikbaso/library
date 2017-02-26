<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
	public function show_books(){
		$this->load->model('Book_model');
		$data['books']=$this->Book_model->getbook('books');
		$data['page']='Book/show_books';
		$this->load->view('menu/content',$data);
	}

	public function add_books() {
		$this->load->model('Book_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$insert_data=array(
				"name"=>$this->input->post('na'),
				"author"=>$this->input->post('au')
				);
			$data['test']=$this->Book_model->addBook($insert_data);

		}
		$data['page']='Book/add_books';
		$this->load->view('menu/content',$data);
	}

	public function delete_books() {
		//this method will show the books
		$this->load->model('Book_model');
		$data['books']=$this->Book_model->getbook('books');
		$data['page']='Book/delete_books';
		$this->load->view('menu/content',$data);
	}

	public function remove_books($chosen_id){
		$this->load->model('Book_model');
		$this->Book_model->deleteBook($chosen_id);
		$this->show_books();
	}

	public function update_books() {
		$this->load->model('Book_model');
		$btn=$this->input->post('btnSave');
		if (isset($btn)) {
			$a_name=$this->input->post('na');
			$a_author=$this->input->post('au');
			$id_books=$this->input->post('id');
			//calculate rows
			$rows=0;
			foreach ($id_books as $a) {
				$rows++;
			}
			//update database row by row
			for($x=0; $x < $rows; $x++ ){
				$update_data=array(
					"name"=>$a_name[$x],
					"author"=>$a_author[$x]
					);
				$this->Book_model->updateBook($update_data,$id_books[$x]);
			}
		
		}
		
		$data['books']=$this->Book_model->getbook('books');
		$data['page']='Book/update_books';
		$this->load->view('menu/content',$data);
	}

	public function borrow_books() {
		$this->load->model('Book_model');
		$data['books']=$this->Book_model->getbook('books');
		$data['page']='Book/borrow_books';
		$this->load->view('menu/content',$data);
	}

	public function move_books($chosen_id){
		$this->load->model('Book_model');
		$this->Book_model->borrowBook($chosen_id);
		$this->show_books();
	}

	public function return_books() {
		$this->load->model('Book_model');
		$data['taken_books']=$this->Book_model->getbook('taken_books');
		$data['page']='Book/return_books';
		$this->load->view('menu/content',$data);
	}

	public function move2_books($chosen_id){
		$this->load->model('Book_model');
		$this->Book_model->returnBook($chosen_id);
		$this->show_books();
	}
}