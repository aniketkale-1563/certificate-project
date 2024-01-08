<?php     //start php tag
//include connect.php page for database connection
Include('connect.php')
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['full_name']=='' || $_REQUEST['current_academic_year']=='' || $_REQUEST['department']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into student(full_name,current_academic_year,department) values('".$_REQUEST['full_name']."', '".$_REQUEST['current_academic_year']."', '".$_REQUEST['department']."')";
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
