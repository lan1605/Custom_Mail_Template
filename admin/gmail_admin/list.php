<div class="row">
                 <div class="col-lg-12 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                      <div class="d-sm-flex align-items-center">
                        <h5 class="mb-2 mb-sm-0">Danh sách mẫu mail gửi cho Admin</h5>
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
                     <form action="./gmail_admin/handle.php" method="post" id="form-check">
                    <div class="card-body">
                       <div class="row g-3">
                         <div class="col-12 col-lg-12">
                         <div class="card border shadow-none w-100">
                        <div class="card-body">

                          <div class="table-responsive">
                             <table class="table align-middle">
                               <thead class="table-light">
                                 <tr>
                                   <th></th>
                                   <th>Tên mẫu</th>
                                   <th>Tiêu đề</th>
                                   <th>Trạng thái</th>
                                   <th>Gửi đến</th>
                                   <th>Hành động</th>
                                 </tr>
                               </thead>
                               
                               <tbody>
                               <?php
                               $per_page_record = 20;  // Number of entries to show in a page.   
                               // Look for a GET variable page if not found default is 1.        
                               if (isset($_GET["page"])) {    
                                   $page  = $_GET["page"];    
                               }    
                               else {    
                               $page=1;    
                               }    
                           
                               $start_from = ($page-1) * $per_page_record;     
                                    $result = mysqli_query($conn,"SELECT * FROM template_mail WHERE role='1' ORDER BY name ASC LIMIT $start_from, $per_page_record");
                                    $index = 1;
                                    while ($row = mysqli_fetch_array($result)) :
                                        
                                    ?>
                                        <tr>
                                              <td>
                                                    <?php if ($row['status']==='1')  :?> 
                                                      <input class="form-check-input check-input radio-btn" type="checkbox" name='check' value="<?= $row['id']?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="" aria-label="" checked disabled>
                                                    <?php endif ?>
                                                    <?php if ($row['status']==='0') :?> 
                                                      <input class="form-check-input check-input radio-btn" type="checkbox" name='check' value="<?= $row['id']?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Áp dụng" data-bs-original-title="Áp dụng" aria-label="Áp dụng" >
                                                    <?php endif ?>
                                            </td>
                                            <td><?= $row['name']?></td>
                                            <td><?=$row['subject']?></td>
                                            <td>
                                              <?php if ($row['status']==='1') :?>
                                              <span class="badge rounded-pill bg-success">Đang áp dụng</span>
                                              <?php endif?>
                                              <?php if ($row['status']==='0') :?>
                                              <span class="badge rounded-pill bg-danger">Chưa áp dụng</span>
                                              <?php endif?>
                                            </td>
                                            <td>
                                              <?php if ($row['role']==='1') :?>
                                                Admin
                                              <?php endif?>
                                              <?php if ($row['role']==='0') :?>
                                              Khách hàng
                                              <?php endif?>
                                            </td>
                                            <td class="d-flex align-items-center gap-3 fs-6">
                                            <a href="./edit-template.php?id=<?= $row['id']?>" class="outline-0 border-0 bg-white text-warning" id="edit<?= $row['id']?>"><i class="bi bi-pencil-fill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sửa địa chỉ mail" data-bs-original-title="Sửa địa chỉ mail" aria-label="Sửa địa chỉ mail"></i></a>
                                                  <?php if ($row['status']==='0') :?> 
                                                  <button type="submit"  class="text-danger outline-0 border-0 bg-white" name="delete-id" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Xóa mẫu này" data-bs-original-title="Xóa mẫu này" aria-label="Xóa mẫu này" value="<?= $row['id']?>"><i class="bi bi-trash-fill"></i></button>
                                                  <?php endif ?>
                                            </td>
                                        </tr>
                                    <?php endwhile
                               ?>
                               </tbody>
                             </table>
                          </div>
                          
                        </div>
                        
                      </div>
                                                  </form>
                      <?php
                            require ("./components/pagination.php");
                            
                            $resultCount = mysqli_query($conn,"SELECT count(*) FROM template_mail WHERE role='1'");
                            $rowPagination = mysqli_fetch_row($resultCount);
                            $total = $rowPagination[0];
                            pagination($total, $per_page_record, './gmail-admin.php', $page, "pageAdmin");
                            
                          ?>
                        </div>

                       </div><!--end row-->
                     </div>
                    </div>
                 </div>
              </div><!--end row-->
              <script>
                const radioOption = document.querySelectorAll(".radio-btn");
                const formCheck = document.querySelector("#form-check");
                radioOption.forEach(item=>item.addEventListener("click", function(e){
                  formCheck.submit();
                }))
              </script>
