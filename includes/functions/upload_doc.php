<?php session_start();
require ('../classes/projects.php');
require ('../connection/connection.php');               

$project=new projects();
$user=$_SESSION['email'];

extract($_POST);

// Handle the POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $company = $_POST['company'];
    $docname = $_POST['document_name'];
    $doc_category = $_POST['document_category'];

    if (isset($_FILES['document_file']) && $_FILES['document_file']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = './documents/';
        $fileTmp = $_FILES['document_file']['tmp_name'];
        $fileExt = pathinfo($_FILES['document_file']['name'], PATHINFO_EXTENSION);
        $uniqueName = time() . '_' . uniqid() . '.' . $fileExt;
        $filePath = '../../'.$uploadDir . $uniqueName;
        $filePathtodb = $uploadDir . $uniqueName;

        if (move_uploaded_file($fileTmp, $filePath)) {
            // Call the DB insert function
            if ($project->upload_new_document($conn,$company,$document_name,$filePathtodb,$user,$document_category)) {
                // echo "Document uploaded and saved to DB successfully.";
                echo json_encode(['code' => 200, 'message' => 'Document Created Successfully']);
            } else {
                // echo "Failed to save document in database.";
                echo json_encode(['code' => 403, 'message' => 'Failed to create Document']);
            }
        } else {
            // echo "File upload failed.";
            echo json_encode(['code' => 403, 'message' => 'Failed to create Document']);        }
    } else {
        echo "No file uploaded or upload error.";
    }
}
?>

