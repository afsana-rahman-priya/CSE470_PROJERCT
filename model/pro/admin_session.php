 <?php
  @session_start();
  if (!isset($_SESSION['admin'])) {
    echo "<script>alert('You are not logged in!'); window.location='../../controller/index.php';</script>";
    exit;
  }

  if (($_SESSION['category']) != 'admin' && $_SESSION['category'] != 'super') {
    echo "<script>alert('You are not logged in!'); window.location='../../controller/index.php';</script>";
    exit;
  }
  $user_id = $_SESSION['admin'];
  if (!isset($conn)) require '../conn.php';

  ?>