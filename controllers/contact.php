<?php
    include('connection.php');
    include('dataOperation.php');
    if(isset($_POST['contact']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        $table = 'contacts';
        $destinationArray = "name,email,subject,message,date";
        $sourceArray = stringCopact3($name,$email,$subject).",".stringCopact1($message);
        $query = insertDatas($table,$destinationArray,$sourceArray);
        $res = mysqli_query($dbcon,$query);
        echo $query;
        if($res){
            echo "<meta http-equiv='refresh' content='0;url=../index.php?yes=0#here'>";
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../index.php?no=0'>";
        }
    }
?>