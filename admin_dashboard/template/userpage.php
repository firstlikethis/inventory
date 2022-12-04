<?php
    require('../../controller/config.php');
    $db = new db;
    $db->admin_empty();
?>

<body class="bg-theme bg-theme1">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"
                                    href="#">
                                    <span class="user-profile"><img src="https://via.placeholder.com/110x110"
                                            class="img-circle" alt="user avatar"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item user-details">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <div class="avatar"><img class="align-self-start mr-3"
                                                        src="https://via.placeholder.com/110x110" alt="user avatar">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                                    <p class="user-subtitle">mccoy@example.com</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item"><a href="../includes/logout.php"><i
                                                class="icon-power mr-2"></i>Logout</a></li>
                                </ul>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>