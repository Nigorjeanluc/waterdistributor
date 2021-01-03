<?php

    function insertDatas( $table,$destination_array,$source_array)
    {  
    // $tables = array("posters","posts","users") 
        $table_rows = $destination_array;
        $data_to_inserts = $source_array;

        $sql= "INSERT INTO ".$table."(".$table_rows.")  VALUES(".$data_to_inserts.",now())";
        return $sql;
    }

    function insertDatasNoDate( $table,$destination_array,$source_array)
    {  
    // $tables = array("posters","posts","users") 
        $table_rows = $destination_array;
        $data_to_inserts = $source_array;

        $sql= "INSERT INTO ".$table."(".$table_rows.")  VALUES(".$data_to_inserts.")";
        return $sql;


    }

    function deleteDatas( $table,$table_col,$target)
    {  
    // $tables = array("posters","posts","users")
        $sql= "DELETE FROM ".$table." WHERE `".$table_col."` = ".$target;
        return $sql;
    }

    function updateDatas( $table,$data_to_inserts,$table_col,$target)
    { 
        $sql= "UPDATE ".$table." SET ".$data_to_inserts." WHERE ".$table_col." = '".$target."'";
        return $sql;
    }

    function selectDatas1( $table,$table_row,$table_key,$table_row_order,$table_start,$table_end)
    {
        $sql = "SELECT * FROM ".$table." WHERE `".$table_row."` = '".$table_key."' ORDER BY `".$table_row_order."` DESC LIMIT ".$table_start.",".$table_end;
        return $sql;
        //$pipsql = mysqli_query($dbcon,$sql);
    }

    function selectDatas1Asc( $table,$table_row,$table_key,$table_row_order,$table_start,$table_end)
    {
        $sql = "SELECT * FROM ".$table." WHERE `".$table_row."` = '".$table_key."' ORDER BY `".$table_row_order."` ASC LIMIT ".$table_start.",".$table_end;
        return $sql;
        //$pipsql = mysqli_query($dbcon,$sql);
    }

    function selectDatas2( $table,$table_row_order,$table_start,$table_end)
    {
        $sql = "SELECT * FROM ".$table." ORDER BY `".$table_row_order."` DESC LIMIT ".$table_start.", ".$table_end;
        // ORDER BY  `companies`.`index` DESC LIMIT 0 , 30
        return $sql;
        //$pipsql = mysqli_query($dbcon,$sql);
    }

    function selectDatas2Asc($table,$table_row_order,$table_start,$table_end)
    {
        $sql = "SELECT * FROM ".$table." ORDER BY `".$table_row_order."` ASC LIMIT ".$table_start.",".$table_end;
        // ORDER BY  `companies`.`index` DESC LIMIT 0 , 30
        return $sql;
        //$pipsql = mysqli_query($dbcon,$sql);
    }

    function logIn($firstFileld,$secondField,$table,$row1,$row2,$conn,&$who)
    { 
        $loginOk = false;
        if(isset($_POST[$firstFileld])){
            $username = htmlentities($_POST[$firstFileld]);
            $password = htmlentities($_POST[$secondField]);
            $sql= "SELECT * FROM $table WHERE $row1='$username' AND $row2='$password'";
            $res= mysqli_query($conn,$sql) or die ("Failed: ".mysqli_error($conn));
            $row= mysqli_fetch_array($res);
            if(isset($row)){
                echo "<h3>you logged in successfully</h3>";
                $who = $row["index"];
                $loginOk = true;
            }else{
                echo '<script>alert("failed to log in may be a wrong password or email");</script>';
                $who = "";
                $loginOk = false;
            }
        }
        return $loginOk;
        
    }

    function editOne($dbName,$tableName,$TobeEdited,$ToEdit,$table_key,$table_key_value)
    {
        $sql =  "UPDATE `$dbName`.`$tableName` SET `$TobeEdited` = '$ToEdit' WHERE `$tableName`.`$table_key` = $table_key_value";
        return $sql;
    }

    function stringCopact2($a,$b)
    {
        $all = "'".$a."','".$b."'";
        return $all;
    }
    function stringCopact1($a)
    {
        $all = "'".$a."'";
        return $all;
    }

    function stringCopact3($a,$b,$c)
    {
        $all ="'".$a."','".$b."','".$c."'";
        return $all;
    }
?>