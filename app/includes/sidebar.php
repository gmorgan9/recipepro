<?php
// $user_id = $_SESSION['user_id'];
// $select = " SELECT * FROM users WHERE user_id = '$user_id' ";
// $result = mysqli_query($conn, $select);
// if (mysqli_num_rows($result) > 0) {
//    while($row = mysqli_fetch_assoc($result)) {
//     $firstname    = $row['firstname'];
//     $loggedin     = $row['loggedin'];
//     $acct_type    = $row['isadmin'];
// }}
?>

    <div class="nav position-fixed" id="navbar" style="margin-top: 40px; background-color: #1e2327;">
            <nav class="nav__container">
                <div>
                    <div class="nav__list">
                        <div class="nav__items">
                            <a href="<?php echo BASE_URL . '/cu-admin/' ?>" class="nav__link nav__logo side text-white">
                                &nbsp;&nbsp;<i class="bi bi-speedometer2 nav__icon" style="font-size: 18px;"></i>
                                <span class="nav__logo-name">&nbsp;Dashboard</span>
                            </a>
                            <div class="nav__dropdown">
                                <a href="<?php echo BASE_URL . '/cu-admin/all_posts.php' ?>" class="nav__link side text-white">
                                    &nbsp;&nbsp;<i class="bi bi-pin-angle-fill nav__icon" style="font-size: 18px;"></i>
                                    <span class="nav__name">&nbsp;Posts</span>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="<?php echo BASE_URL . '/cu-admin/all_posts.php' ?>" class="nav__dropdown-item side text-muted">&nbsp;All Posts</a>
                                        <a href="<?php echo BASE_URL . '/cu-admin/add_posts.php' ?>" class="nav__dropdown-item side text-muted">&nbsp;Add Posts</a>
                                        <a href="<?php echo BASE_URL . '/cu-admin/categories.php' ?>" class="nav__dropdown-item side text-muted">&nbsp;Categories</a>
                                    </div>
                                </div>
                            </div>

                            <!-- comments -->
                                <div class="nav__dropdown">
                                    <a href="<?php echo BASE_URL . '/cu-admin/all_comments.php' ?>" class="nav__link side text-white">
                                        &nbsp;&nbsp;<i class="bi bi-chat-right-fill nav__icon" style="font-size: 18px;"></i>
                                        <span class="nav__name">&nbsp;Comments</span>
                                    </a>

                                    <div class="nav__dropdown-collapse">
                                        <div class="nav__dropdown-content">
                                            <a style="width: 110%;" href="<?php echo BASE_URL . '/cu-admin/all_comments.php' ?>" class="nav__dropdown-item side text-muted">&nbsp;All Comments</a>
                                            <a href="<?php echo BASE_URL . '/cu-admin/pending_comments.php' ?>" class="nav__dropdown-item side text-muted">&nbsp;Pending</a>
                                            <a href="<?php echo BASE_URL . '/cu-admin/approved_comments.php' ?>" class="nav__dropdown-item side text-muted">&nbsp;Approved</a>
                                            <a href="<?php echo BASE_URL . '/cu-admin/trash_comments.php' ?>" class="nav__dropdown-item side text-muted">&nbsp;Trash</a>
                                        </div>
                                    </div>
                                </div>
                            <!-- end comments -->
                            
                            
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle text-white">Settings</h3>

                            <a href="#" class="nav__link side text-white">
                                &nbsp;&nbsp;<i class="bi bi-sliders nav__icon" style="font-size: 18px;"></i>
                                <span class="nav__name">&nbsp;General</span>
                            </a>
    
                            <div class="nav__dropdown">
                                <a href="<?php echo BASE_URL . '/cu-admin/all_users.php' ?>" class="nav__link side text-white">
                                    &nbsp;&nbsp;<i class='bi bi-people nav__icon' style="font-size: 18px;"></i>
                                    <span class="nav__name">&nbsp;Users</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="<?php echo BASE_URL . '/cu-admin/all_users.php' ?>" class="nav__dropdown-item side text-muted">&nbsp;All Users</a>
                                        <a href="<?php echo BASE_URL . '/cu-admin/add_user.php' ?>" class="nav__dropdown-item side text-muted">&nbsp;Add New</a>
                                        <a href="<?php echo BASE_URL . '/cu-admin/profile.php' ?>" class="nav__dropdown-item side text-muted">&nbsp;Profile</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- <a href="#" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a> -->
            </nav>
        </div>


<!-- </div> -->













<!-- <div id="sidebarMenu" class="position-fixed sidebar"> -->
<!-- close -->
    <!-- <div> -->
        
        <!-- </div> -->
        <!-- <div class="list-group list-group-flush mt-4">

			<div class="accordion mb-2" id="accordionExample"> -->

            <!-- DASHBOARD -->
                <!-- <a href="<?php //echo BASE_URL . '/cu-admin/' ?>" style="text-decoration: none;" class="text-white ps-2 side">
                    <i class="bi bi-speedometer2"></i>&nbsp;
                    <span>  Dashboard</span>
                </a> -->
            <!-- END DASHBOARD -->

            <!-- POSTS -->
                <!-- <div class="pt-2"></div>
                <div class="dropdown-menu">
                    <a style="text-decoration: none;" href="#" class="a-link ps-2 side menu-btn text-white">
                        <i class="bi bi-pin-angle"></i>&nbsp;
                        <span>  Posts</span>
                    </a>
                    <div class="menu-content" style="margin-left: 170px !important; margin-top: -30px;">
                        <a class="links text-white" href="<?php //echo BASE_URL . '/pages/all_posts.php' ?>">All Posts</a>
                        <a class="links text-white" href="<?php //echo BASE_URL . '/pages/add_posts.php' ?>">Add New</a>
                        <a class="links text-white" href="<?php //echo BASE_URL . '/pages/categories.php' ?>">Add New</a>
                    </div>
                </div> -->




            <!-- END POSTS -->

            <!-- COMMENTS -->
                <!-- <div class="pt-2"></div> -->
                <!-- <a href="<?php //echo BASE_URL . '/cu-admin/comments.php' ?>" style="text-decoration: none;" class="text-white ps-2 side">
                    <i class="bi bi-chat-right"></i>&nbsp;
                    <span>  Comments</span>
                </a> -->
            <!-- END COMMENTS -->

            <!-- USERS -->
				<!-- <div class="pt-2"></div>
                <a href="#<?php //echo BASE_URL . '/logout.php' ?>" style="text-decoration: none;" class="text-white ps-2 side">
                    <i class="bi bi-people"></i>&nbsp;
                    <span>  Users</span>
                </a> -->


            <!-- END USERS -->

            <!-- PROFILE -->
                <!-- <div class="pt-2"></div>
                <a href="<?php //echo BASE_URL . '/cu-admin/profile.php' ?>" style="text-decoration: none;" class="text-white ps-2 side">
                    <i class="bi bi-person"></i>&nbsp;
                    <span>  Profile</span>
                </a>
                </span> -->

            <!-- END PROFILE -->

            <!-- LOGOUT -->
                <!-- <div class="pt-2"></div>
                <a href="<?php //echo BASE_URL . '/logout.php' ?>" style="text-decoration: none;" class="text-white ps-2 side">
                    <i class="bi bi-box-arrow-right"></i>&nbsp;
                    <span>  Logout</span>
                </a> -->
            <!-- END LOGOUT -->
			<!-- </div>
		</div>
	</div> -->

<!-- close -->