<div class="row">
    <div class="col-lg-12 mx-auto">
    <div class="card">
        <div class="card-header py-3 bg-transparent"> 
        <div class="d-sm-flex align-items-center">
            <h5 class="mb-2 mb-sm-0">Thêm mới</h5>
        </div>
        </div>
        <?php 
        if (isset($_SESSION['success'])){
        noti($_SESSION['success'],'success');
        }
        unset($_SESSION['success']);
            if (isset($_SESSION['error'])){
            noti($_SESSION['error'],'error');
            }
            unset($_SESSION['error']);                     
        ?>
        <?php 
            if (isset($_SESSION['delete'])){
            noti($_SESSION['delete'],'success');
            }
            unset($_SESSION['delete']); 
        ?>
        <form action="./gmail_admin/handle.php" method="post">
        <div class="card-body">
        <div class="row g-3">
            <div class="col-12 col-lg-12">
                <div class="card shadow-none bg-light border">
                <div class="card-body">
                    <form class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Tên nội dung mới</label>
                        <input class="form-control " name="name-content" id=""type="text" placeholder="Tên nội dung mới" required >
                    </div>
                    <div class="col-12 mt-2">
                        <label class="form-label">Tiêu đề mới</label>
                        <input class="form-control " name="subject-content" id=""type="text" placeholder="Tiêu đề mới" required>
                        </div>
                    <div class="col-12 mt-2">
                    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
                            <label class="form-label">Nội dung mới</label>
                            <span class="badge bg-light text-dark option" data-name="ten_nguoi_nhan">Tên người nhận</span>
                            <span class="badge bg-light text-dark option" data-name="email">Email</span>
                            <span class="badge bg-light text-dark option" data-name="so_dien_thoai">Số điện thoại</span>
                            <span class="badge bg-light text-dark option" data-name="chi_nhanh">Chi nhánh gần nhất</span>
                            <span class="badge bg-light text-dark option" data-name="dich_vu">Dịch vụ</span>
                            <textarea class="form-control" id="editor" placeholder="" rows="10" cols="20" name="content" >
                            {ten_nguoi_nhan}
                            <br>
                            {email}
                            <br>
                            {so_dien_thoai}
                            <br>
                            {chi_nhanh}
                            <br>
                            {dich_vu}
                            </textarea>
                            
                        </div>
                        <div class="col-12 mt-2 ">
                        <label for="role" >Bên được nhận mail</label>
                            <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="col-3">
                                <select class="form-select " name="role" required id="role">
									<option class="d-none" value="">Chọn đối tượng được nhận mail</option>
									<option value="0">Khách hàng</option>
									<option value="1">Admin</option>
						</select>
                            </div>
                            <div class="col-9 d-flex align-items-center gap-2 px-2 ">
                            <input class="form-check-input" type="radio" name="status" id="status" value="1" >
                            <label for="status">Áp dụng mẫu này</label>
                            </div>
                            </div>
                            
                        </div>
                        <div class="col-12 mt-2">
                        <label class="form-label">Bên gửi</label>
                        <input class="form-control " name="send-content" id=""type="text" placeholder="Hệ thống" value="Hệ thống">
                        </div>
                        
                        
                        <div class="ms-auto mt-2">
                            <button type="submit" class="btn btn-primary" name="submit-add">Thêm mới</button>
                        </div>
                    </div>
                    </div>
                    </form>
                    
                </div>
                </div>
            </div>
            
        </div><!--end row-->
        </div>
        </div>
    </div>
</div><!--end row-->
<script>
     CKEDITOR.replace( 'content' );
     const spanOptions = document.querySelectorAll(".option");
    spanOptions.forEach(item=> item.addEventListener("click", function(e){
        CKEDITOR.instances['editor'].insertHtml(`{${e.target.dataset.name}}`);
    }))
</script>