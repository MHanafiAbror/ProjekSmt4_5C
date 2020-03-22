<html>

<table border="1" width="300"> 
   <td><b> <?php echo "No"; ?></b></td>
   <td> <b> <?php echo "Tahun"; ?></b></td>
   
</tr>
<?php
foreach($Angkatan as $row)
{
?>
<tr>
   <td> <?php echo  $row['No']; ?></td>
   <td> <?php echo  $row['tahun']; ?></td>
   
   
   </tr>

<?php }?>
</html>