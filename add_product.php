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
            <div class="">
                                 <div>
                                    <h3 class=""> الطلبات المحذوفة</h3>
                                 </div>
                              </div>

                     <!--/ Top Label Layout End -->   
                     <!--================================-->
                      <div class="col-md-12 responsive">
                     <div class="col-md-12 col-lg-12">
                        <div class="card mg-b-30">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="form-layout form-layout-4">
                                       <div class="row">
                                          <label class="col-sm-2 form-control-label">nom de produit: <span class="tx-danger"></span></label>
                                          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                             <input type="text" class="form-control" placeholder=" nom de produit">
                                          </div>
                                       </div>
                                       <!-- row -->
                                       <div class="row mg-t-20">
                                          <label class="col-sm-2 form-control-label">Reference: <span class="tx-danger"></span></label>
                                          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                             <input type="text" class="form-control" placeholder=" Reference">
                                          </div>
                                       </div>
                                       <div class="row mg-t-20">
                                          <label class="col-sm-2 form-control-label">Prix Jmla (DH): <span class="tx-danger"></span></label>
                                          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                             <input type="text" class="form-control" placeholder="Prix Jmla (DH):">
                                             <p>المرجوا ادخال الأرقام فقط هنا</p>
                                          </div>
                                       </div>
                                     
                                       <div class="form-layout-footer mg-t-30">
                                          <button class="btn btn-success btn-block"> اضافة منتوج جديد</button>
                                          
                                       </div>
                                       <!-- form-layout-footer -->
                                    </div>
                                    <!-- form-layout -->
                                 </div>
                              
                                 <!-- col-6 -->
                              </div>
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