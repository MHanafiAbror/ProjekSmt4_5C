<html>

<table border="1" width="300"> 
   <td><b> <?php echo "No"; ?></b></td>
   <td> <b> <?php echo "Prodi"; ?></b></td>
   <td> <b> <?php echo "Keterangan"; ?></b></td>
   
</tr>
<?php
foreach($Prodi as $row)
{
?>
<tr>
   <td> <?php echo  $row['No']; ?></td>
   <td> <?php echo  $row['prodi']; ?></td>
   <td> <?php echo  $row['keterangan']; ?></td>
   
   </tr>

<?php }?>
</html>