<?php 
    require "./setting.php";
    // session_start();
?>
<main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3">Cài đặt</div>
              <div class="ps-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tùy chỉnh</li>
                  </ol>
                </nav>
              </div>
            </div>
            <!--end breadcrumb-->

              <div class="row">
                 <div class="col-lg-12 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                      <div class="d-sm-flex align-items-center">
                        <h5 class="mb-2 mb-sm-0">Email quản trị viên</h5>
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
                     <form action="./setting_email/handle_email.php" method="post">
                    <div class="card-body">
                       <div class="row g-3">
                         <div class="col-12 col-lg-5">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                                <form class="row g-3">
                                  <div class="col-12">
                                    <label class="form-label">Thêm địa chỉ Email</label>
                                    <textarea class="form-control" placeholder="Địa chỉ email" rows="10" cols="10" name="email-textarea" required><?php echo (!empty($_SESSION['text']) ? htmlspecialchars($_SESSION['text']) : '' );unset($_SESSION['text']);?></textarea>
                                    <div class="d-flex align-items-center gap-2 my-2">
                                    <input class="form-check-input" type="checkbox" name="all_admin" id="all_admin">
                                    <label for="all_admin"> Cho phép gửi mail đến nhiều Admin</label>
                                    </div>
                                  </div>
                                  <div class="ms-auto">
                          <button type="submit" class="btn btn-primary" name="submit-add">Thêm mới</button>
                        </div>
                        
                                </form>
                                
                              </div>
                            </div>
                         </div>
                         <div class="col-12 col-lg-7">
                         <div class="card border shadow-none w-100">
                        <div class="card-body">
                         <form action="./setting_email/handle_email.php" method="post" class="ms-auto mb-2 form-delete--change d-none"> 
                          <input type="hidden" name="ids" class="ids">
                          <button type="submit" class="btn btn-danger" name="deleteAll">Xóa</button>
                          <button type="submit" class="btn btn-primary" name="ChangeAll">Cho phép nhận mail</button> 
                        </form>
                          <div class="table-responsive">
                             <table class="table align-middle">
                               <thead class="table-light">
                                 <tr>
                                   <th><input class="form-check-input" type="checkbox" id="checkAll"></th>
                                   <th>Địa chỉ email</th>
                                   <th>Trạng thái</th>
                                   <th>Hành động</th>
                                 </tr>
                               </thead>
                               
                               <tbody>
                               <?php
                               $per_page_record = 4;  // Number of entries to show in a page.   
                               // Look for a GET variable page if not found default is 1.        
                               if (isset($_GET["page"])) {    
                                   $page  = $_GET["page"];    
                               }    
                               else {    
                               $page=1;    
                               }    
                           
                               $start_from = ($page-1) * $per_page_record;     
                                    $result = mysqli_query($conn,"SELECT * FROM email_admin LIMIT $start_from, $per_page_record");
                                    while ($row = mysqli_fetch_array($result)) :
                                        
                                    ?>
                                        <tr>
                                            <td><input class="form-check-input check-input" type="checkbox" name='check[]' value="<?= $row['id']?>"></td>
                                    
                                            <td><?= $row['email']?></td>
                                            <?php  if ($row['trang_thai']==='1') :?>
                                                <td><span class="badge rounded-pill bg-success">Được nhận mail.</span></td>
                                            <?php endif ?>
                                            <?php if ($row['trang_thai']==='0') :?>
                                                <td><span class="badge rounded-pill bg-danger">Không được nhận.</span></td>
                                            <?php endif ?>
                                            <td class="d-flex align-items-center gap-3 fs-6">
                                            <form method="get" action="./setting_email/handle_email.php" >
                                                <?php  if ($row['trang_thai']==='1') :?>
                                                  <button type="submit"  class="text-success outline-0 border-0 bg-white" name="status-id" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Thay đổi trạng thái" data-bs-original-title="Thay đổi trạng thái" aria-label="Thay đổi trạng thái" value="<?= $row['id']?>"><i class="bx bx-mail-send"></i></button>
                                                
                                            <?php endif ?>
                                            <?php if ($row['trang_thai']==='0') :?>
                                                <button type="submit"  class="text-danger outline-0 border-0 bg-white" name="status-id" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Thay đổi trạng thái" data-bs-original-title="Thay đổi trạng thái" aria-label="Thay đổi trạng thái" value="<?= $row['id']?>"><i class="bx bx-mail-send"></i></button>
                                            <?php endif ?>

                                              <button type="button" class="outline-0 border-0 bg-white text-warning" id="edit<?= $row['id']?>"  data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $row['id']?>" aria-expanded="false" aria-controls="flush-collapseOne" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sửa địa chỉ mail" data-bs-original-title="Sửa địa chỉ mail" aria-label="Sửa địa chỉ mail"></i></button>
                                              <button type="submit"  class="text-danger outline-0 border-0 bg-white" name="delete-id" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Xóa địa chỉ mail" data-bs-original-title="Xóa địa chỉ mail" aria-label="Xóa địa chỉ mail" value="<?= $row['id']?>"><i class="bi bi-trash-fill"></i></button>
                                            </form>
                                                

                                            </td>
                                            
                                            

                                        </tr>
                                        
                                        <tr id="flush-collapse<?= $row['id']?>" class="accordion-collapse collapse" aria-labelledby="edit<?= $row['id']?>" >
                                        <td></td>
                                            <td class="accordion-body" ><form action="./setting_email/handle_email.php" method="get" id="form<?= $row['id']?>"><input style ="font-size: 0.9rem"class="form-control " name="email-edit" id="email-<?=$row['id']?>"type="text" placeholder="Default input" aria-label="default input example" value="<?=$row['email']?>"></td>
                                        <td>
                                          <button type="submit"  class="btn btn-primary py-1" name="edit-id" value="<?= $row['id']?>" style="font-size: 0.9rem">Lưu</button>
                                          
                                        </td> 
                                        </form>
                                        <td>
                                        </td>     
                                        </tr>
                                    <?php endwhile
                                    
                               ?>
                                 
                                
                               </tbody>
                             </table>
                          </div>
                          
                        </div>
                        
                      </div>
                      <?php
                            require ("./components/pagination.php");
                            
                            $resultCount = mysqli_query($conn,"SELECT count(*) FROM email_admin");
                            $rowPagination = mysqli_fetch_row($resultCount);
                            $total = $rowPagination[0];
                            pagination($total, $per_page_record, './index.php', $page,"page");
                            
                          ?>
                        </div>

                       </div><!--end row-->
                     </div>
                    </div>
                 </div>
              </div><!--end row-->

          </main>
          </div>
          <script>

            const checkAll = document.querySelector("#checkAll");
            const inputIds = document.querySelector(".ids");
            const checkList = document.querySelectorAll(".check-input");
            const formCheck = document.querySelector(".form-delete--change");
            let arr = [], arrResult = [], arrCheck = [];

            function check(item){
              if (item.checked == true){
                arr.push(item.value);
                
              }
              if (item.checked == false){
                var index = arr.indexOf(item.value);
                if (index !== -1) {
                  arr.splice(index, 1);
                }
              }
              return arr;
            }
            checkAll.addEventListener("click", function(){
              checkList.forEach(item=>{
                item.checked=this.checked;
                inputIds.value = check(item);
              });
              if (checkAll.checked === true){
                formCheck.classList.remove("d-none");
              }
              else{
                formCheck.classList.add("d-none");
              }
            });
            checkList.forEach(item=>{
                arrResult.push(item.value);
                
              });
            checkList.forEach(item=>item.addEventListener("click", function(){
              item.checked=this.checked;
              inputIds.value = check(item);
              formCheck.classList.remove("d-none");
              if (inputIds.value === ""){
                formCheck.classList.add("d-none");
                checkAll.checked = false;
              }
              if ((inputIds.value!="") && (inputIds.value.split(",").length === arrResult.length)){
                checkAll.checked =  true;
                formCheck.classList.remove("d-none");
              }
              else {
                checkAll.checked =  false;
              }
              
            }))
          </script>
          <?php

require ('./components/footer.php');

session_write_close();