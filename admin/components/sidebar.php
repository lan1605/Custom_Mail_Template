<body> 
<!--start wrapper-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng xuất</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">Bạn có muốn đăng xuất hay không?</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary"><a href="./handle/logout.php" style="color: white">Đăng xuất</a></button>
              </div>
          </div>
        </div>
  </div>
  <div class="wrapper">
    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3 align-items-center">
        <div class="mobile-toggle-icon fs-3">
          <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar-right ms-auto">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item dropdown dropdown-user-setting">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center">
                  <img src="../../assets/images/logo_favicon.png" class="user-img" alt="">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="../../assets/images/logo_favicon.png" alt="" class="rounded-circle" width="54" height="54">
                      <div class="ms-3">
                        <h6 class="mb-0 dropdown-user-name">Minh Duy Solutions</h6>
                        <small class="mb-0 dropdown-user-designation text-secondary">Admin</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                  </hr>

                <li>
                  <div class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="d-flex align-items-center">
                      <div class=""><i class="bi bi-lock-fill"></i></div>
                      <div class="ms-3"><span>Đăng xuất</span></div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>

        </div>
      </nav>
    </header>
    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <img src="../../assets/images/logo_favicon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
          <h4 class="logo-text">MDSCO</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <li class="">
          <a href="javascript:;" class="has-arrow" aria-expanded="true">
            <div class="parent-icon"><i class="bi bi-grid-fill"></i>
            </div>
            <div class="menu-title">Cài đặt</div>
          </a>
          <ul class="mm-collapse">
            <li> <a href="../../admin/index.php"><i class="bi bi-circle"></i>Tùy chỉnh</a>
            </li>
          </ul>
        </li>
        <li class="">
          <a href="javascript:;" class="has-arrow" aria-expanded="true">
            <div class="parent-icon"><i class="bi bi-grid-fill"></i>
            </div>
            <div class="menu-title">Cấu hình mail</div>
          </a>
          <ul class="mm-collapse">
            <li> <a href="../../admin/gmail-admin.php"><i class="bi bi-circle"></i>Danh sách mẫu gửi Admin</a>
            </li>
            <li> <a href="../../admin/gmail-guest.php"><i class="bi bi-circle"></i>Danh sách mẫu gửi Khách hàng</a>
            </li>
            <li> <a href="../../admin/add-template.php"><i class="bi bi-circle"></i>Thêm mới</a>
            </li>
           
            
          </ul>
        </li>
        <!--end navigation-->
    </aside>
    <!--end sidebar -->
    

