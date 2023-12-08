<?php 
include 'config.php';
include 'header.php';
$id=0;
if (isset($_GET['id'])) {
    $id=$_GET['id'];
}

$sql1 = "SELECT * FROM blog_posts WHERE id = $id and is_deleted = false";
            $result = $conn->query($sql1);
            $i=0;
            if ($result->num_rows > 0) {
              // output data of each row
              $row = $result->fetch_assoc() ;
              
              $formattedDate = date('Y-m-d', strtotime($row['publication_date']));
?>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $row['title'] ?></h2>
                        <p class="card-text"><?php echo $row['content'] ?></p>
                        <div class="d-flex justify-content-between mt-3">
                            <h6 class="card-subtitle text-muted font-italic"><?php echo $row['author'] ?></h6>
                            <?php
                                $formattedDate = date('Y-m-d', strtotime($row['publication_date']));
                            ?>
                            <h6 class="card-subtitle text-muted"><span>Published - <?php echo $formattedDate; ?></h6>
                        </div>
                    </div>
                </div>
                <a href="javascript:history.back()" class="btn btn-secondary mt-3">Back</a>
            </div>
        </div>
    </div>

               <?php
            } else {
              echo "0 results";
            }
?>