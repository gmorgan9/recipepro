<!-- start main -->
<div class="page-header position-fixed" style="width: 115%;">
            <div class="d-flex" style="float:left !important;">
                <div class="pe-2"></div>
                <img src="../assets/images/updated-logo.png" style="height: 20px !important; width: 20px !important;" alt="">
                <div class="pe-4"></div>
                <a class="head-link" style="text-decoration: none; color: white; font-size: 12px;" href="/"><i class="bi bi-house-door-fill"></i>&nbsp;CacheUp</a>
                <div class="pe-5"></div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="head-link" style="text-decoration: none; margin-top: 3.5px; color: white; font-size: 12px;" href="<?php echo BASE_URL . '/cu-admin/pending_comments.php' ?>"><i style="font-size: 12px;" class="bi bi-chat-right-fill"></i>&nbsp;

                <?php
                // $sql="SELECT count('1') FROM comments WHERE status = 0";
                // $result=mysqli_query($conn,$sql);
                // $rowtotal=mysqli_fetch_array($result); 
                // echo "$rowtotal[0]";
                ?>

                </a>
                <div class="pe-2"></div>
                <!-- start dropdown -->
                <div class="dropdown-menu" style="margin-top: -5px !important;">
                    <a class="head-link" style="text-decoration: none; color: white; font-size: 12px;" href="#" class="menu-btn text-white">
                        <i class="bi bi-plus"></i>New
                    </a>
                    <div class="menu-content" style="z-index: -1; margin-left: 10px !important; width: 60% !important;">
                        <a class="links text-white" href="<?php echo BASE_URL . '/cu-admin/add_posts.php' ?>">Post</a>
                        <a class="links text-white" href="<?php echo BASE_URL . '/cu-admin/categories.php' ?>">Category</a>
                        <a class="links text-white" href="<?php echo BASE_URL . '/cu-admin/add_user.php' ?>">User</a>
                        <div class="pb-3"></div>
                    </div>
                </div>
                <!-- end dropdown -->
            </div>
            <div style="float: right !important;">
            <!-- start dropdown -->
                <div class="dropdown-menu" style="position: relative; z-index: 1 !important;">
                    <a class="head-link" style="font-size: 12px; text-decoration: none; color: white" href="/" class="menu-btn text-white">
                        Welcome, <?php echo $_SESSION['username']; ?> <i class="bi bi-person-square"></i> 
                    </a>
                    <div class="menu-content" style="margin-top: 6px;margin-left: -15px;">
                        <div class="float-start">
                            <i class="bi bi-person-square text-muted" style="font-size: 45px;margin-left: 15px;"></i>
                        </div>
                        <div class="float-end" style="margin-right: 15px;">
                            <a class="links text-white" href="<?php echo BASE_URL . '/cu-admin/profile.php' ?>">Edit Profile</a>
                            <!-- <a class="links text-white" href="#">Visit Us</a> -->
                            <a class="links text-white" href="<?php echo BASE_URL . '/logout.php' ?>">Log Out</a>
                            <div class="pb-3"></div>
                        </div>
                    </div>
                </div>
                <!-- end dropdown -->
            </div>
        </div>
<!-- end Main -->