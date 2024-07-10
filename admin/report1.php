<?php
include('../includes/config.php');

// Fetch data from the database
$sqlQuery = "SELECT emp_id, FirstName, Av_leave FROM tblemployees";
$result = mysqli_query($conn, $sqlQuery);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}
mysqli_close($conn);

// Output JSON data
$jsonData = json_encode($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        div#chart-container {
            height: 400px;
            width: 563px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Employee Leave Chart</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function() {
            var jsonData = <?php echo $jsonData; ?>; // Embed the JSON data directly

            var names = [];
            var leaves = [];
            for (var i in jsonData) {
                names.push(jsonData[i].FirstName);
                leaves.push(jsonData[i].Av_leave);
            }

            var chartdata = {
                labels: names,
                datasets: [{
                    label: 'Employee Leave',
                    backgroundColor: '#49e2ff',
                    borderColor: '#46d5f1',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: leaves
                }]
            };

            var graphTarget = $("#graphCanvas");
            var barGraph = new Chart(graphTarget, {
                type: 'bar',
                data: chartdata
            });
        });
    </script>
</body>

</html>



<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">

						<?php
						$status = 2;
						$sql = "SELECT id from tblleaves where status=:status";
						$query = $dbh->prepare($sql);
						$query->bindParam(':status', $status, PDO::PARAM_STR);
						$query->execute();
						$results = $query->fetchAll(PDO::FETCH_OBJ);
						$leavecount = $query->rowCount();
						?>

						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark"><?php echo ($leavecount); ?></div>
								<div class="font-14 text-secondary weight-500">Rejected Leave</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b"><i class="icon-copy fa fa-hourglass-o" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>