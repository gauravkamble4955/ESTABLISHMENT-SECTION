<?php
// Check if the 'export' button was clicked
if (isset($_POST['export'])) {
    // Establish database connection
    $conn = mysqli_connect('localhost', 'root', '', 'mini_project') or die(mysqli_error());

    // SQL query to select data from your table
    $sql = "SELECT tblleaves.id as leave_id, tblemployees.FirstName, tblemployees.LastName, tblleaves.LeaveType, tblleaves.PostingDate, tblleaves.Status as hod_status, tblleaves.admin_status, tblleaves.principal_status FROM tblleaves INNER JOIN tblemployees ON tblleaves.empid = tblemployees.emp_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Open a writable stream to the output buffer
        $filename = "leaveHistoryFaculty.csv";
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        $output = fopen('php://output', 'w');
  
        // Add a header row to the CSV file
    $header = array("FirstName", "LastName", "LeaveType", "PostingDate", "HOD_status", "Admin_status", "Principal_status");
        fputcsv($output, $header);

        // Loop through the result set and add data to the CSV file
        while ($row = $result->fetch_assoc()) {
            $data = array($row['FirstName'], $row['LastName'], $row['LeaveType'], $row['PostingDate'], $row['hod_status'], $row['admin_status'], $row['principal_status']);
            fputcsv($output, $data);
        }

        fclose($output);
        exit; // Terminate the script after the file is downloaded
    }
}
?>