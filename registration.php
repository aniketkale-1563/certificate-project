
<?php     //start php tag
//include connection.php page for database connection
Include('connect.php')
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['full_name']=='' || $_REQUEST['current_academic_year']=='' || $_REQUEST['department']=='' || $_REQUEST['id_card']=='' || $_REQUEST['fee_receipt']=='' || $_REQUEST['purpose']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into student(full_name,current_academic_year,department,id_card,fee_receipt,purpose) values('".$_REQUEST['full_name']."', '".$_REQUEST['current_academic_year']."', '".$_REQUEST['department']."','".$_REQUEST['id_card']."','".$_REQUEST['fee_receipt']."','".$_REQUEST['purpose']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>
