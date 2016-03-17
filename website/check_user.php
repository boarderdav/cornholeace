<?php

if(isset($_POST['id']) && !empty($_POST['id']))
{
    include_once 'dbconfig1.php';
    extract($_POST); // extract post variables

    //check if facebook ID already exits
    $check_user_query = "select * from tbl_users WHERE fld_facebook_id = $id";
    $check_user = $db->getDataFromQuery($check_user_query);
    if(!$check_user)
    {
        //new user - we need to insert a record
        $time = time();
        $insert_user_query = "Insert into tbl_users (`fld_user_name`, `fld_user_email`, `fld_facebook_id`, `fld_user_doj`) VALUES ('$name', '$email', $id, $time)";
        $insert_user = $db->UpdateQuery($insert_user_query);
        echo json_encode($_POST);
    } else {
        //update
        $update_user_query = "update tbl_users set fld_user_name = '$name', fld_user_email='$email' WHERE fld_facebook_id = $id";
        $update_user = $db->UpdateQuery($update_user_query);
        echo json_encode($_POST);
    }
} else {
    $arr = array('error' => 1);
    echo json_encode($arr);
}


?>