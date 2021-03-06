<?php
define('access',TRUE);
include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');

if(isset($_POST["title"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die('404');
    }


    $mysqli = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
    $category_name_1 = $_POST['category_name_chapter'];
    $category_name = ucwords($category_name_1);
    $course_name = $_POST['course_name_chapter'];
    $sub_name = $_POST['subject_name_chapter'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file_name = $_POST['file_name'];
    $date_upload = date("Y-m-d");
    $source = $_SERVER['DOCUMENT_ROOT'].'/parts/admin-panel/uploads/';
    if($title==null || $description==null ||  $file_name==null)
    {
        die('wrong');
    }
    if($category_name=='Bachelor')
    {
        $code_1 = $title.'-'.rand(10000,1000000);
        $code = str_replace(' ', '-', $code_1);
        $statement = $mysqli->prepare("INSERT INTO b_materials(code_no,c_name,subject,type,title,description,uploaded_files,date_upload) VALUES(?,?,?,?,?,?,?,?)");
        $statement->bind_param('ssssssss',$code,$course_name,$sub_name,$type,$title,$description,$file_name,$date_upload);
        if(!$statement->execute())
        {
            die('wrong');
        }
        $statement->close();
    }
    else if($category_name=='Master')
    {
        $code_1 = $title.'-'.rand(10000,1000000);
        $code = str_replace(' ', '-', $code_1);
        $statement = $mysqli->prepare("INSERT INTO m_materials(code_no,c_name,subject,type,title,description,uploaded_files,date_upload) VALUES(?,?,?,?,?,?,?,?)");
        $statement->bind_param('ssssssss',$code,$course_name,$sub_name,$type,$title,$description,$file_name,$date_upload);
        if(!$statement->execute())
        {
            die('wrong');
        }
        $statement->close();
    }
    else
    {
        die('wrong');
    }
    $destination = $_SERVER['DOCUMENT_ROOT'].'/parts/files/Courses/'.$category_name.'/'.$course_name.'/'.$sub_name.'/'.$type.'/';
    copy($source.$file_name, $destination.$file_name);
    unlink($source.$file_name);        
    die('sucess');
}


?>