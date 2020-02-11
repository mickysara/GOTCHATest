<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadController extends CI_Controller {


 	public function index(){
		
		//เรียกใช้งาน view สำหรับ Upload File
		$this->load->view('upload_form', array('error' => ' ' )); 
	}

	public function upload_file(){

         $config['upload_path']   = './uploads/'; //Folder สำหรับ เก็บ ไฟล์ที่  Upload
         $config['allowed_types'] = 'gif|jpg|png'; //รูปแบบไฟล์ที่ อนุญาตให้ Upload ได้
         $config['max_size']      = 100; //ขนาดไฟล์สูงสุดที่ Upload ได้ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_width']     = 1024; //ขนาดความกว้างสูงสุด (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['max_height']    = 768;  //ขนาดความสูงสูงสดุ (กรณีไม่จำกัดขนาด กำหนดเป็น 0)
         $config['encrypt_name']  = true; //กำหนดเป็น true ให้ระบบ เปลียนชื่อ ไฟล์  อัตโนมัติ  ป้องกันกรณีชื่อไฟล์ซ้ำกัน
         $this->upload->initialize($config);
		 
			//ตรวจสอบว่า การ Upload สำเร็จหรือไม่	
         if ( ! $this->upload->do_upload('userfile')) {

			//กรณีมี Error ให้เก็บค่าไว้ในตัวแปร $error
            $error = array('error' => $this->upload->display_errors()); 
			
			//เรียกใช้งาน view และ ส่งค่า $error ให้แสดงผลกรณีมี Error
            $this->load->view('upload_form', $error); 

         }else { 
			//ตัวแปร $data เก็บข้อมูล ของไฟล์ที่ Upload
            $data = array('upload_data' => $this->upload->data()); 
			
			//เรียกใช้งาน view และ ส่งค่า $data ไปแสดงผลด้วย
            echo  $this->upload->data('file_name');
         } 
	}
}