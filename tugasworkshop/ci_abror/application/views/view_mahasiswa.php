<?php
$this->load->view("admin/_partials/head");
$this->load->view("admin/_partials/navbar");
$this->load->view("admin/_partials/sidebar");
?>
<html>

<table border="1" width="300"> 
   <td><b> <?php echo "Nama"; ?></b></td>
   <td> <b> <?php echo "Prodi"; ?></b></td>
   
</tr>
<?php
foreach($Mahasiswa as $row)
{
?>
<tr>
   <td> <?php echo  $row['nama']; ?></td>
   <td> <?php echo  $row['prodi']; ?></td>
   
   </tr>

<?php }?>
</html>