<?php 
include 'config.php';
include 'header.php';
$id=0;
if (isset($_GET['id'])) {
    $id=$_GET['id'];
}

$titleErr="";
$contentErr="";
$authorErr="";
$publication_dateErr="";
$title="";
$content="";
$author="";
$publication_date="";
$updated_on=date('Y-m-d H:i:s');
$is_deleted=false;
$err=0;

if($_SERVER['REQUEST_METHOD']==='POST'){
    if (empty($_POST["title"])) {
        $titleErr = "Title is required";
        $err=1;
      } else {
        $title = test_input($_POST["title"]);
      }
    
      if (empty($_POST["content"])) {
        $contentErr = "content is required";
        $err=1;
      } else {
        $content = test_input($_POST["content"]);
      }
    
      if (empty($_POST["author"])) {
        $authorErr = "Author name is required";
        $err=1;
      } else {
        $author = test_input($_POST["author"]);
      }
    
      if (empty($_POST["publication_date"])) {
        $publication_dateErr = "Publication date is required";
        $err=1;
      } else {
        $publication_date = test_input($_POST["publication_date"]);
      }
 

if($err===0){
    $sql = "UPDATE blog_posts
SET
    title = '$title',
    content = '$content',
    author = '$author',
    publication_date = '$publication_date',
    updated_on = '$updated_on',
    is_deleted = '$is_deleted'
WHERE
    id = $id;";
if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
  
}  

$sql1 = "SELECT * FROM blog_posts WHERE id = $id and is_deleted = false";
            $result = $conn->query($sql1);
            $i=0;
            if ($result->num_rows > 0) {
              // output data of each row
              $row = $result->fetch_assoc() ;
              
                
?>
    
    <div class="container mt-5"> 
      <div class="row">
        <div class="col-md-6 addblog_right">
        </div>
        <div class="col-md-6">
          <h2 class="mb-4">Edit Blog</h2>
             <form action="" method="POST">
                <div class="form-group">
                    <label for="title">Title<span class=text-danger>*</span></label>
                    <input type="text" class="form-control" id="title" name="title" maxlength="50" value="<?php echo $row['title'] ?>" required>
                    <span class="error text-danger"><?php echo $titleErr;?></span>
                </div>
                <div class="form-group">
                    <label for="content">Content<span class=text-danger>*</span></label>
                    <textarea class="form-control" id="content" name="content" maxlength="1000" required><?php echo $row['content'] ?></textarea>
                    <span class="error text-danger"><?php echo $contentErr;?></span>
                </div>
                <div class="form-group">
                    <label for="author">Author<span class=text-danger>*</span></label>
                    <input type="text" class="form-control" id="author" name="author" maxlength="100" value="<?php echo $row['author'] ?>" required>
                    <span class="error text-danger"><?php echo $authorErr;?></span>
                </div>
                <div class="form-group">
                    <label for="publication_date">Publication Date<span class=text-danger>*</span></label>
                    <input type="datetime-local" class="form-control" id="publication_date" name="publication_date" value="<?php echo $row['publication_date'] ?>">
                    <span class="error text-danger"><?php echo $publication_dateErr;?></span>
                </div>
                <!-- You can hide or remove these fields from the form if you want them to be auto-generated -->
                <input type="hidden" name="created_on" value="<?php echo date('Y-m-d\TH:i:s'); ?>">
                <input type="hidden" name="updated_on" value="<?php echo date('Y-m-d\TH:i:s'); ?>">

                <div class="row">
                  <div class="col-md-6">
                    <button type="button" class="btn btn-secondary mt-3" onclick="window.location.href='index.php'">Back</button>
                  </div>
                  <div class="col-md-6 text-right">
                     <button type="submit" class="btn btn-secondary mt-3">Save</button>
                  </div>
                </div>
                
                
            </form>
          </div>
      </div>
        
    </div>
               <?php
            } else {
              echo "0 results";
            }
?>

<?php
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
include 'footer.php';
?>