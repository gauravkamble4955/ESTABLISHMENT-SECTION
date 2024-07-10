<?php
include('../includes/session.php');

if (isset($_FILES['file'])) {
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $file_error = $_FILES['file']['error'];

    if ($file_error == 0) { // No error occurred
        if ($file_ext == 'pdf') {
            $new_file_name = uniqid() . '.' . $file_ext;
            $upload_path = '../uploads/leave/' . $new_file_name;

            if (move_uploaded_file($file_tmp, $upload_path)) {
                $leave_pdf = $new_file_name;
                $result = mysqli_query($conn, "UPDATE tblleaves SET leave_pdf='$leave_pdf' WHERE id='$session_id'");
                if ($result) {
                    echo 'success';
                } else {
                    echo 'Error updating document PDF';
                }
            } else {
                $error = error_get_last();
                echo 'Error uploading document PDF: ' . $error['message'];
            }
        } else {
            echo 'Please select a valid PDF file';
        }
    } else {
        $error = error_get_last();
        echo 'Error uploading file: ' . $error['message'];
    }
}
?>