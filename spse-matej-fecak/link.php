<?php 

session_start();

	$_SESSION["admin logged in"] = 'Yes';

include 'dbconnect.php';
//check for submit
if(isset($_POST['submit'])){
  $input = mysqli_real_escape_string($conn,$_POST['list_input']);
  //query
  $query = "insert into todolist(title) values(?)";
  if(SQLInjection($query, array($input), $conn)){
    header('Location: link.php');
  }else{
    echo "failed";
  }
}
//check for delete
if(isset($_POST['delete'])){
  $delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
  //query
  $query = "DELETE FROM todolist where id={$delete_id}";
  if(mysqli_query($conn,$query)){
    header('Location: link.php');
  }else{
    echo "failed to delete";
  }
}

//get all list
$query = "select * from todolist ";
//get result
$lists = mysqli_query($conn,$query);
//close conn
mysqli_close($conn);
//function to prevent from sql injections
function SQLInjection($code, $array, $conn){     
  $stmt  = $conn->prepare($code);
  $types = str_repeat('s', count($array));      
  $stmt->bind_param($types, ...$array);      
  $stmt->execute();     
   
  return $conn; }

?>
<?php include 'header.php'?>
    <hr>

    <div class="container">
    <div class="container my-first-container">
      <p class="text-center" style="font-size:25px;">To Do List </p>
      
      <?php foreach ($lists as $list) :  ?>
      <ul>
        <li>
          <span class="span-class"><?php echo $list['title'] ?></span><br>
                  

        <form class="log" action="" method="post">
            <!-- <a href="#">Remove As Done</a> -->
            <input type="hidden" name="delete_id" value="<?php echo $list['id']; ?>">
            <input type="submit" name="delete" value="Remove as Done" class="delete-btn">
        </form>
        </li>
      </ul>
      <?php endforeach; ?>
      <div class="container myContainer">
        <form method="POST" action="">
          <input type="text" name="list_input" placeholder="Enter a new to do list..." class="text-center myInput" required>
          <input type="submit" class="btn btn-info add-btn" value="Add" name="submit">
        </form>
      </div>


      <button><a href="main.php"> Back</a></button>


  </div>
</div>
<?php include 'footer.php'?>

