<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
        $conn = mysqli_connect("localhost","root","","foodmania") or die("Connerction failed");


        $emp_id = $_GET['id'];

        $sql = "SELECT * FROM addemployee where id = {$emp_id}";
        $result = mysqli_query($conn, $sql) or die("Queary Unsuccessful");


        if(mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)){




     ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          <input type="text" name="name" value="<?php echo $row['name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" value="<?php echo $row['email']; ?>"/>
      </div>
      <div class="form-group">
          <label>User Name</label>
          <input type="text" name="username" value="<?php echo $row['username']; ?>"/>
      </div>
      <div class="form-group">
          <label>Date Of Birth</label>
          <input type="text" name="dateofbirth" value="<?php echo $row['dateofbirth']; ?>"/>
      </div>
      <div class="form-group">
          <label>Gender</label>
          <input type="text" name="gender" value="<?php echo $row['gender']; ?>"/>
      </div>
      <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" value="<?php echo $row['password']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
  }
}
  ?>
</div>
</div>
</body>
</html>
