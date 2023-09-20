<?php 
    require "./setting.php";
    // session_start();
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM `template_mail` WHERE id= $id");
    $row = mysqli_fetch_array($sql);
?>
<main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Cấu hình mail</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="<?=($row['role'] === '1') ? ("./gmail-admin.php") : ("./gmail-guest.php")?>"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa nội dung mail</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end breadcrumb-->
            <?php
                 require './gmail_admin/edit.php';
            ?>


          </main>
          </div>
          <?php

require ('./components/footer.php');

session_write_close();