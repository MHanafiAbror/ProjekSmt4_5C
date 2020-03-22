<?php
class Prodi_model extends CI_Model {
public function get_data(){
$data_prodi = [["No"=>"1","prodi"=>"TIF","keterangan"=>"Teknik Informatika"],
["No"=>"2","prodi"=>"TKK","keterangan"=>"Teknik Komputer"],
["No"=>"3","prodi"=>"MIF","keterangan"=>"Manajemen Informatika"]];
return $data_prodi;
}}?>