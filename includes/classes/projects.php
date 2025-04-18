<?php

class projects {


    function add_new_project($conn,$title,$email,$contact,$loguser,$salesofcr,$developer,$start_date)
    {
        $sql="INSERT INTO `projects` (`id`, `name`, `email`, `contact`, `user_id`, `sales_officer`,`developer`, `active`, `project_start_date`, `created_at`, `updated_at`) VALUES (NULL, '$title', '$email', '$contact', '$loguser', '$salesofcr','$developer', '1', '$start_date', NULL, NULL);";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            return ['status'=>'200','message'=>'Project Created Successfully'];
        }
        else
        {
            return ['status'=>'403','message'=>'Failed to create project'];
        }
    }



    function retreive_projects($conn)
    {
        $sql="SELECT p.id,p.name,p.email,p.contact,so.name AS sales_officer ,dev.name AS developer, p.active,p.project_start_date,p.created_at,p.updated_at FROM `projects` p ,`sales_officers` so , `developers` dev where p.sales_officer=so.id AND p.developer=dev.id;";
        $result=mysqli_query($conn,$sql);

        return $result;
    }

}


?>