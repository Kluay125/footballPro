<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>สมาชิก</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'kanit', sans-serif;
        }

        .w {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">WEBSITE football</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">โปรไฟล์</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item text-success" href="#!">ออกจากระบบ</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-center">รายชื่อนักฟุตบอลที่ได้รางวัลบัลลงดอร์ตั้งแต่ปี 2000-2009 </h1>
                    <div class="text-center">
                        
                        </button>
                    </div>
                    <script>
                        $(function() {
                            $('.add-type').click(function() {
                                $('.frm').load('./include/add-mem.php');
                                $('.add-modal').click();
                            });
                        });
                    </script>
                    <!-- modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="add-modal btn btn-primary" data-bs-toggle="modal" data-bs-target="#exam" hidden>

                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="frm"></div>
                        </div>
                    </div>
                    <!--/ modal -->

                    <div class="table-responsive">
                        <table border="1" id="example" class="display table table-bordered" style="width:100%">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">รูป</th>
                                    <th class="text-center">ชื่อ</th>
                                    <th class="text-center">ปีที่ได้บัลลงดอร์</th>
                                    <th class="text-center">ประเทศ</th>
                                    <th class="text-center">ทีมที่ค้าแข้ง</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include_once '../conn/conn.php';
                                $query = "SELECT * FROM tbl_member";
                                $result = mysqli_query($conn, $query) or die("Error in sql : $query" . mysqli_error($conn));
                                foreach ($result as $row) { ?>
                                    <tr class="t<?php echo $row['id']; ?>">
                                        <td class="text-center"><?php echo $row['id']; ?></td>
                                        <td class="text-center"><img class="w" src="./img_football/<?php echo $row['img']; ?>"></td>
                                        <td class="text-center"><?php echo $row['usname']; ?></td>
                                        <td class="text-center"><?php echo $row['phone']; ?></td>
                                        <td class="text-center"><?php echo $row['address']; ?></td>
                                        <td class="text-center"><?php echo $row['username']; ?></td>
                                        <td>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
        <script>
      new DataTable('#example');
    </script>
  </body>
</html>

