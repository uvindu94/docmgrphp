<?php session_start();
require ('../classes/projects.php');
require ('../connection/connection.php');   

$project=new projects();
extract($_POST);    

$loguser=$_SESSION['email'];


$project_resp=$project->add_new_project($conn,$title,$email,$contact,$loguser,$sales_officer,$developer,$start_date);

// echo $project_resp;
// json_encode($project_resp);

if($project_resp['status']=='200')
{
    echo json_encode(['code' => 200, 'message' => 'Project Created Successfully']);
}
else
{
    echo json_encode(['code' => 403, 'message' => 'Failed to create project']);
}   

?>