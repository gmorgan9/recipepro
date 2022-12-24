<?php
date_default_timezone_set('America/Denver');
require_once "../app/database/connection.php";
require_once "../app/database/functions.php";
require_once "../path.php";
session_start();

// if(isLoggedIn() == false){
//   header('location: '. BASE_URL . '/cu-login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="<?php echo ROOT_PATH . '/assets/images/favicon.ico'; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/styles.css?v=4.26">
    <link rel="stylesheet" href="../assets/sidebar.css?v=1.10">

    <title>Dashboard - CacheUp Blog</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
      
    </style>
    
</head>
<body style="margin:0;padding:0;box-sizing:border-box;">

<!-- main-container -->
  <div class="container-fluid main">

    <div class="row">
      <?php //include(ROOT_PATH . "/app/includes/header.php"); ?>
    </div>

    <div class="row">
      <div class="col" style="margin:0;padding:0;">
        <?php //include(ROOT_PATH . "/app/includes/sidebar.php") ?>
      </div>
    </div>

    <div class="mt-5"></div>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-10" style="margin-left: -30px;">
        <div class="mt-5"></div>
        <h3 class="text-black">
          Dashboard
        </h3>
        <div class="mt-3"></div>

        <div class="row">
          <div class="col" style="width: 50%;">

            <!-- begin health -->
              <div class="card health" style="z-index: -2;">
                <div class="card-header">
                  Site Health Status
                </div>
                <div class="card-body">
                  <div class="pt-2"></div>
                  <div class="d-flex">
                    <p class="card-text float-start w-25 justify-content-center" style="margin-left: auto; margin-right: auto;">
                      <div style="width: 65px; height: 35px; background-color: green; border-radius: 100px; margin-left: -50px; margin-right: 50px;"></div>
                    </p>
                    <p class="card-text float-end" style="font-size: 14px;">
                    Your site's health is looking <strong>good</strong>, but there are still some things you can do to improve its performance and security.
                    </p>
                  </div>
                </div>
              </div>
            <!-- end health -->

            <div class="pt-4"></div>

            <!-- begin quicklook -->
              <div class="card quicklook">
                <div class="card-header">
                  Quick Look
                </div>
                <div class="card-body">
                  <div class="pt-2"></div>
                  <div class="row">
                    <div class="col">
                      <!-- posts -->
                        <a style="color: #7fade1;" href="<?php echo BASE_URL . '/cu-admin/all_posts.php' ?>">
                          <i class="bi bi-pin-angle-fill text-muted"></i>&nbsp;
                          <?php
                        //   $sql="SELECT count('1') FROM posts WHERE status = 'published'";
                        //   $result=mysqli_query($conn,$sql);
                        //   $rowtotal=mysqli_fetch_array($result); 
                        //   echo "$rowtotal[0] Posts";
                          ?>
                        </a>
                      <!-- end posts -->
                      <div class="pt-2"></div>
                      <!-- categories -->
                      <a style="color: #7fade1;" href="<?php echo BASE_URL . '/cu-admin/categories.php' ?>">
                        <i class="bi bi-tags-fill text-muted"></i>&nbsp;
                          <?php
                        //   $sql="SELECT count('1') FROM categories";
                        //   $result=mysqli_query($conn,$sql);
                        //   $rowtotal=mysqli_fetch_array($result); 
                        //   echo "$rowtotal[0] Categories";
                          ?>
                        </a>
                      <!-- end categories -->
                    </div>
                    <div class="col">
                      <!-- comments -->
                      <a style="color: #7fade1;" href="<?php echo BASE_URL . '/cu-admin/comments.php' ?>">
                        <i class="bi bi-chat-right-fill text-muted"></i>&nbsp;
                          <?php
                        //   $sql="SELECT count('1') FROM comments WHERE status = 1";
                        //   $result=mysqli_query($conn,$sql);
                        //   $rowtotal=mysqli_fetch_array($result); 
                        //   echo "$rowtotal[0] Comments";
                          ?>
                        </a>
                      <!-- end comments -->
                    </div>
                    <div class="pt-3"></div>
                    <p style="margin-bottom: -2px;">Ubuntu 22.0.4 running <a style="color: #7fade1; text-decoration: underline;" href="/">CacheUp</a> blog</p>
                  </div>
                </div>
              </div>
            <!-- end quicklook -->

            <div class="pt-4"></div>

            <!-- begin activity -->
              <!-- PHP -->
                <?php
                //   $query ="SELECT * FROM posts WHERE status = 'published' LIMIT 2";
                //   $result = $conn->query($query);
                //   if($result->num_rows> 0){
                //     $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
                //   }
                ?>
              <!-- end PHP -->
              <div class="card activity">
                <div class="card-header">
                  Activity
                </div>
                <div class="card-body">
                  <p style="font-size: 16px;">
                    Recently Published
                  </p>

                  <?php
                        // $sql="SELECT count('1') FROM posts WHERE status = 'published'";
                        // $result=mysqli_query($conn,$sql);
                        // $rowtotal=mysqli_fetch_array($result); 
                        // $amount = $rowtotal[0];
                  ?>

                  <?php //if($amount == 0) { ?>
                    <p>No posts published currently.</p>
                    <?php //} else { ?>
                  <?php //foreach ($options as $option) { ?>
                    <div class="row">
                      <div class="col-4">
                        <p class="text-muted"><?php echo $option['published_date']; ?></p>
                      </div>
                      <div class="col">
                        <p class="text-muted"><a style="color: #7fade1;" href="<?php echo BASE_URL . '/single_post.php?id=' . $option['post_id']; ?>"><?php echo $option['title']; ?></a></p>
                      </div>
                    </div>
                  <?php //}} ?>
                  <hr>
                  <!-- PHP -->
                    <?php
                    //   $query ="SELECT * FROM comments WHERE status = 1 LIMIT 1";
                    //   $result = $conn->query($query);
                    //   if($result->num_rows> 0){
                    //     $comms = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    //   }
                    ?>
                    <?php
                        // $sql="SELECT count('1') FROM comments WHERE status = 1";
                        // $result=mysqli_query($conn,$sql);
                        // $rowtotal=mysqli_fetch_array($result); 
                        // $comments = $rowtotal[0];
                    ?>
                  <!-- end PHP -->
                  <p style="font-size: 16px;">
                    Recent Comments
                  </p>
                  <?php //if($comments == 0) { ?>
                    <p>No comments approved currently.</p>
                    <?php //} else { ?>
                  <?php //foreach ($comms as $comm) { ?>
                    <div class="row">
                      <div class="col-2" style="margin-top: -15px !important;">
                        <i style="font-size: 55px; margin-left: 15px;" class="bi bi-person-square text-muted"></i>
                      </div>
                      <div class="col">
                        <p class="text-muted">
                          From <?php //echo $comm['name']; ?> on <a style="color: #7fade1;" href="<?php// echo BASE_URL . '/single_post.php?id=' . $comm['post_id']; ?>"><?php echo $comm['post_title']; ?></a>
                        </p>
                        <p style="margin-top: -10px;">
                          <?php //echo substr($comm['content'], 0, 50) . '...'; ?>
                        </p>
                      </div>
                    </div>
                  <?php //}} ?>
                </div>
                <div class="card-footer text-muted pt-2 pb-2">
                  <div class="row">
                    <div class="col">
                      <a style="color: #7fade1;" href="<?php //echo BASE_URL . '/cu-admin/all_comments.php'; ?>">All </a>
                        <?php
                        // $sql="SELECT count('1') FROM comments";
                        // $result=mysqli_query($conn,$sql);
                        // $rowtotal=mysqli_fetch_array($result); 
                        // echo "($rowtotal[0])";
                        ?>
                        &nbsp;<span class="text-muted">|</span>&nbsp;
                        <a style="color: #7fade1;" href="<?php// echo BASE_URL . '/cu-admin/pending_comments.php'; ?>">Pending </a> 
                        <?php
                        // $sql="SELECT count('1') FROM comments WHERE status = 0";
                        // $result=mysqli_query($conn,$sql);
                        // $rowtotal=mysqli_fetch_array($result); 
                        // echo "($rowtotal[0])";
                        ?>
                        &nbsp;<span class="text-muted">|</span>&nbsp;
                        <a style="color: #7fade1;" href="<?php //echo BASE_URL . '/cu-admin/approved_comments.php'; ?>">Approved </a> 
                        <?php
                        // $sql="SELECT count('1') FROM comments WHERE status = 1";
                        // $result=mysqli_query($conn,$sql);
                        // $rowtotal=mysqli_fetch_array($result); 
                        // echo "($rowtotal[0])";
                        ?>
                        &nbsp;<span class="text-muted">|</span>&nbsp;
                        <a style="color: #7fade1;" href="<?php //echo BASE_URL . '/cu-admin/trash_comments.php'; ?>">Trash </a> 
                        <?php
                        // $sql="SELECT count('1') FROM comments WHERE status = 2";
                        // $result=mysqli_query($conn,$sql);
                        // $rowtotal=mysqli_fetch_array($result); 
                        // echo "($rowtotal[0])";
                        ?>
                    </div>
                  </div>
                </div>
              </div>
            <!-- end activity -->

          </div>
          <div class="col" style="width: 50%;">

          <!-- begin news&updates -->
            <div class="card news&updates" style="z-index: -2;">
              <div class="card-header">
                New and Updates
              </div>
              <div class="card-body">
                There is no current news or updates currently. Please check back regularly to keep up to date.
              </div>
            </div>
          <!-- end news&updates -->

          <div class="pt-4"></div>

          <!-- begin quickdraft -->
            <!-- FUNCTION -->
              <?php 
            //   if(isset($_POST['draft'])){
            //     $idno  = rand(10000, 99999); // figure how to not allow duplicates
            //     $title = mysqli_real_escape_string($conn, $_POST['title']);
            //     $content = mysqli_real_escape_string($conn, $_POST['content']);
            //     $author_idno = mysqli_real_escape_string($conn, $_POST['author_idno']);
            //     $author = mysqli_real_escape_string($conn, $_POST['author']);
            //     $created_date = date("F j, Y");
            //     $created_time = date("g:i a");
                
            //     $select = " SELECT * FROM posts WHERE idno = '$idno'";
            //     $result = mysqli_query($conn, $select);
                
            //     if(mysqli_num_rows($result) > 0){
                
            //       $error = '';
                
            //     }else {
            //           $insert = "INSERT INTO posts (idno, title, content, author_idno, author, created_date, created_time) VALUES('$idno', '$title','$content','$author_idno','$author', '$created_date', '$created_time')";
            //           mysqli_query($conn, $insert);
            //           header('location: '. BASE_URL . '/cu-admin/');
            //        }
                 
            //   };
            //   $user_id = $_SESSION['user_id'];
            //   $select = "SELECT * FROM users WHERE user_id = $user_id";
            //   $result = mysqli_query($conn, $select);
            //   if (mysqli_num_rows($result) > 0) {
            //      while($row = mysqli_fetch_assoc($result)) {
            //       $firstname    = $row['firstname'];
            //       $lastname     = $row['lastname'];
            //       $idno         = $row['idno'];
            //   }}
              ?>
            <!-- end FUNCTION -->
            <div class="card quickdraft">
              <div class="card-header">
                Quick Draft
              </div>
              <div class="card-body">
                <form action="" method="POST">
                <input type="hidden" class="form-control" name="author_idno" value="<?php //echo $idno; ?>">
                <input type="hidden" class="form-control" name="author" value="<?php //echo $firstname; ?>&nbsp;<?php //echo $lastname; ?>">
                  <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                  <div class="mb-1">
                    <label for="title">Content</label>
                    <textarea rows="4" type="text" class="form-control" name="content" id="content"></textarea>
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="draft" class="btn btn-outline-secondary">Submit</button>
                  </div>
                </form>
                <hr>
                  <p style="font-size: 16px;">
                    Your Recent Drafts
                  </p>
                  <!-- PHP -->
                  <?php
                    //   $query ="SELECT * FROM posts WHERE status = 'draft' LIMIT 2";
                    //   $result = $conn->query($query);
                    //   if($result->num_rows> 0){
                    //     $drafts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    //   }
                    ?>
                    <?php
                        // $sql="SELECT count('1') FROM posts WHERE status = 'draft'";
                        // $result=mysqli_query($conn,$sql);
                        // $rowtotal=mysqli_fetch_array($result); 
                        // $drafts_amount = $rowtotal[0];
                    ?>
                    <?php //if($drafts_amount == 0) { ?>
                    <p>No drafts written currently.</p>
                    <?php// } else { ?>
                  <!-- end PHP -->
                  <?php //foreach ($drafts as $draft) { ?>
                    <div class="row">
                      <div class="col ps-4">
                        <div class="d-flex">
                          <p>
                            <a style="color: #7fade1;" href="<?php //echo BASE_URL . '/single_post.php?id=' . $draft['post_id']; ?>"><?php echo $draft['title']; ?></a> 
                          </p>
                          &nbsp;&nbsp;
                          <p class="text-muted" style="font-size: 10px; margin-top: 4px;"><?php //echo $draft['created_date']; ?></p>
                        </div> 
                      </div>
                    </div>
                  <?php //}} ?>
              </div>
            </div>
          <!-- end quick draft -->
          </div>
        </div>

      </div>
    </div>

    <div class="mb-5"></div>
  </div>
<!-- END main-container -->
  
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <script>
    $('.dropdown').hover(function(){ 
  $('.dropdown-toggle', this).trigger('click'); 
});
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>