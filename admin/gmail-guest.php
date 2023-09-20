<?php 
    require "./setting.php";
    // session_start();
?>
<main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Cấu hình mail</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end breadcrumb-->
            <?php
                        require './gmail_admin/list-guest.php';
            ?>
          </main>
          </div>
          <?php

require ('./components/footer.php');

session_write_close();