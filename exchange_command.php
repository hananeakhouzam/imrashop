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
                  <div class="row clearfix">
                     <div class="col-12">
                        <div class="card mg-b-30">
                           <div class="card-body">
                              <p class="lead mb-0">تحويل الطلبات من موظفة لأخرى<br> المرجوا استعمال هذه الأداة بانتباه ، لا يمكن التراجع عن العملية<br> يتم تحويل فقط الطلبات قيد المعالجة.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                        <div class="card mg-b-30">
                           <div class="card-body">
                              <div class="form-layout form-layout-1">
                                 <div class="row mg-b-25">
                                             <div class="col-lg-12">
                                       <div class="form-group mg-b-10-force">
                                         <label>التحويل من</label>
                                          <select class="form-control select2 select2-hidden-accessible" data-placeholder="اختيار الموزع  " tabindex="-1" aria-hidden="true">
                                             <option label=""></option>
                                             <option value="">أكاادير </option>
                                          </select>
                                       </div>
                                    </div>
                                         <div class="col-lg-12">
                                       <div class="form-group mg-b-10-force">
                                         <label>التحويل إلى</label>
                                          <select class="form-control select2 select2-hidden-accessible" data-placeholder="اختيار الموزع  " tabindex="-1" aria-hidden="true">
                                             <option label=""></option>
                                             <option value="">أكاادير </option>
                                          </select>
                                       </div>
                                    </div>
                                <div class="form-layout-footer col-md-12">
                                    <button class="btn btn-success btn-block">اضافة مدينة جديدة </button>
                                 </div>
 
                                    </div>
                                 </div>
                               
                                 <!-- form-layout-footer -->
                              </div>
                           </div>
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