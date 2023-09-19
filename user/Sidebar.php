		<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="../Assets/Admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">RGJ</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <ul class="metismenu" id="menu">
                <li>
                        <a href="index.php">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div></a>
                </li>
                </li>

                <li>
                   <a href="profile.php">
                        <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                        </div>
                        <div class="menu-title">Your Information</div>
                    </a>
                </li>

                <li>
                    <a href="availability.php">
                        <div class="parent-icon"><i class='bx bx-cart'></i>
                        </div>
                        <div class="menu-title">Availability Status</div>
                    </a>
                </li>
                <li class="menu-label">Others</li>
                <li>
                    <a class="dropdown-item" onclick="userLogout()"><i class='bx bx-log-out-circle'></i>&nbsp<span>Logout</span></a>
                </li>
                <li>
                       
                    <a class="dropdown-item text-danger" onclick="deleteAccount('<?php echo $_SESSION['id'];?>')"><i class="fa-solid fa-trash"></i>&nbsp<span>Delete Account</span></a>
                </li>
            </ul>
        </div>
        
                