<!-- <link rel="stylesheet" href="noti.css"> -->
<style>
  .pull-right {
    float: right;
    margin-top: 22px;
    margin-right: 12px;
    /* width: 54px; */
    /* height: 30px; */
  }
</style>
<?php
define('DBNAME', 'mini_project');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBHOST', 'localhost');

try {
  $db = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Your page is successfully connected";
} catch (PDOException $e) {
  echo "Issue -> Connection failed: " . $e->getMessage();
}

$isread = 0;
$sql = "SELECT id from tblleaves where IsRead=:isread";
$query = $db->prepare($sql); // Changed $dbh to $db
$query->bindParam(':isread', $isread, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
$unreadcount = $query->rowCount();
?>

<li class="dropdown">
  <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
    <span><?php echo htmlentities($unreadcount); ?></span>
  </i>
  <div class="dropdown-menu bell-notify-box notify-box">
    <span class="notify-title">You have <?php echo htmlentities($unreadcount); ?> <b>unread</b> notifications!</span>
    <div class="notify-list">
      <?php
      $isread = 0;
      $sql = "SELECT tblleaves.id as lid, tblemployees.FirstName, tblemployees.LastName, tblemployees.emp_id, tblleaves.PostingDate from tblleaves join tblemployees on tblleaves.empid=tblemployees.emp where tblleaves.IsRead=:isread";
      $query = $db->prepare($sql); // Changed $dbh to $db
      $query->bindParam(':isread', $isread, PDO::PARAM_STR);
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_OBJ);
      if ($query->rowCount() > 0) {
        foreach ($results as $result) {
      ?>
          <a href="../leave_details.php?leaveid=<?php echo htmlentities($result->lid); ?>" class="notify-item">
            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
            <div class="notify-text">
              <p><b><?php echo htmlentities($result->FirstName . " " . $result->LastName); ?> <br />(<?php echo htmlentities($result->emp_id); ?>) </b> has recently applied for a leave.</p>
              <span>at <?php echo htmlentities($result->PostingDate); ?></b></span>
            </div>
          </a>
      <?php
        }
      }
      ?>
    </div>
  </div>
</li>