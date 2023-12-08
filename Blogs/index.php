<?php 
include 'config.php';
include 'header.php';
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql = "DELETE FROM blog_posts WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location: $_SERVER[PHP_SELF]");
} else {
  echo "Error deleting record: " . $conn->error;
}
}



?>
<div class="container mt-3">
    <a href="create.php" class="addBlogButton btn ">Add Blog</a>
    <table class="table mt-3">
        <thead>
            <tr class="thead-dark">
                <th>Sr no</th>
                <th>Title</th>
                <!-- <th>Content</th> -->
                <th>Author</th>
                <th>Publication Date</th>
                <th>Created On</th>
                <th>Updated On</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM blog_posts";
            $result = $conn->query($sql);
            $i=0;
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
               $i++;
               ?>
               <tr>
                <td><?php echo $i ?></td>
                <td><a href="blogdetail.php?id=<?php echo $row['id']; ?>" class="title text-dark"><?php echo $row['title']; ?></a></td>
                <!-- <td><?php echo $row['content']; ?></td> -->
                <td><?php echo $row['author']; ?></td>
                <td><?php echo $row['publication_date']; ?></td>
                <td><?php echo $row['created_on']; ?></td>
                <td><?php echo $row['updated_on']; ?></td>
                <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="button">Edit</a></td>
                <td><a href="index.php?id=<?php echo $row['id']; ?>"  onclick="return confirm('Are you sure you want to delete?')" class="button">Delete</a></td>
                
            </tr>
               <?php
              }
            } else {
              echo "0 results";
            }
            ?>
        </tbody>
    </table>
</div>

<?php

include 'footer.php';
?>