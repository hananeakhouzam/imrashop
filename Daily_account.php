<!DOCTYPE html>
<html lang="zxx">
   
<!-- Mirrored from colorlib.net/avesta/html/app-file-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Apr 2020 15:03:37 GMT -->
<head>
 <?php
include 'header.html';

     ?>
   </head>
   <body>
      <!--================================-->
      <!-- Page Container Start -->
      <!--================================-->
      <div class="page-container">
         <!--================================-->
         <!-- Page Sidebar Start -->
         <!--================================-->
         <div class="page-sidebar">
   <div class="logo">
      <a class="logo-img" href="index.html"> 
      <img class="small-logo" src="assets/images/small-logo.png" alt="">
      </a>        
      <a id="sidebar-toggle-button-close"><i class="wd-20" data-feather="x"></i> </a>
   </div>
   <!--================================-->
   <!-- Sidebar Menu Start -->
   <!--================================-->
   <div class="page-sidebar-inner">
      <div class="page-sidebar-menu">
<?php
include'sidebar.html';
          ?>       </div>
   </div>
   <!--/ Sidebar Menu End -->
   <!--================================-->
</div>
         <!--/ Page Sidebar End -->
         <!--================================-->
         <!-- Page Content Start -->
         <!--================================-->
         <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
                 <?php
include'navbar.html';
          ?> 
            <!--/ Page Header End -->   
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner pd-0-force">
               <!-- File Manages -->
           <div class="col-md-12">
              <div class="d-flex justify-content-between align-items-center">
                                 <div>
                                    <h6 class="card-header-title tx-13 mb-0"> الحساب اليومي
</h6>
                                 </div>
                                 <div class="col-md-6">
                           <div class="row">
                                 <div class="col-lg-5">
                                       <div class="form-group">
                                          <label>التاريخ من</label>
                                          <input class="form-control" type="text" name="lastname" value="" placeholder="التاريخ من    ">
                                       </div>
                                    </div>
                                     <div class="col-lg-5">
                                       <div class="form-group">
                                          <label>التاريخ إلى</label>
                                          <input class="form-control" type="text" name="lastname" value="" placeholder="التاريخ إلى    ">
                                       </div>
                                    </div>
                                        <div class="form-layout-footer col-md-2">
                                    <button class="btn btn-success"></button>
                                 </div>
 
                                    </div>
                                    <!-- col-4 -->
                                    
                            
                            
                                    </div>
                                 </div>
                               
                                 <!-- form-layout-footer -->
                              </div>
                           </div>
                              </div>
                     </div>
           </div>


<div class="btn-group  block" style="width:100%;">
    <a class="btn btn-primary activeTab" id="showNotPaid" href="javascript:;">انتظار الاستلام</a>
    <a class="btn btn-primary" id="showPaid" href="javascript:;">تم الدفع</a>
</div>


      <div class="col-md-12 col-lg-12">
                        <div class="card mg-b-30">
                           <div class="card-body pd-0">
                              <table id="basicDataTable" class="table responsive nowrap">
                                 <thead>
                                    <tr>
                                       <th>اليوم      </th>
                                       <th>عدد الطلبات       </th>
                                       <th>مجموع المبيعات     </th>
                                       <th> رؤية التفاصيل       </th>
                                       <th>استلام الدفع    </th>
                                     
                                    </tr>
                                 </thead>
                                 <tbody>
                                  <td></td>
                           <td>name</td>
                           <td>name</td>
                           <td>name</td>
                           <td>name</td>
                           <td>name</td>
                          
                                
                               
                                 </tbody>
                           
                              </table>
                           </div>
                        </div>
                     </div>

         <!--/ Page Content End -->
      </div>

      <!-- Footer Script -->
      <!--================================-->
<?php
include 'footer.html';
?> 
 
   </body>

<!-- Mirrored from colorlib.net/avesta/html/app-file-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Apr 2020 15:03:38 GMT -->
</html>