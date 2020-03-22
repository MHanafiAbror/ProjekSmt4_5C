<?php
class Mahasiswa_model extends CI_Model {
public function get_data(){
$data_mahasiswa = [["nama"=>"Muhammad","prodi"=>"TIF"],
["nama"=>"Hanafi","prodi"=>"TKK"],
["nama"=>"Abror","prodi"=>"MIF"]];
return $data_mahasiswa;
}}?>