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
            <div class="page-header">
               <div class="search-form">
                  <form action="#" method="GET">
                     <div class="input-group">
                        <input class="form-control search-input typeahead" name="search" placeholder="Type something..." type="text"/>
                        <span class="input-group-btn"><span id="close-search"><i data-feather="x" class="wd-16"></i></span></span>
                     </div>
                  </form>
               </div>
               <nav class="navbar navbar-default">
                  <!--================================-->
                  <!-- Brand and Logo Start -->
                  <!--================================-->
                  <div class="navbar-header">
                     <div class="navbar-brand">
                        <ul class="list-inline">
                           <!-- Mobile Toggle and Logo -->
                           <li class="list-inline-item"><a class="hidden-md hidden-lg" href="#" id="sidebar-toggle-button"><i data-feather="menu" class="wd-20"></i></a></li>
                           <!-- PC Toggle and Logo -->
                           <li class="list-inline-item"><a class=" hidden-xs hidden-sm" href="#" id="collapsed-sidebar-toggle-button"><i data-feather="menu" class="wd-20"></i></a></li>
                           
                        </ul>
                     </div>
                  </div>
                  <!--/ Brand and Logo End -->
                  <!--================================-->
                  <!-- Header Right Start -->
                  <!--================================-->
                  <!--/ Header Right End -->
               </nav>
            </div>
            <!--/ Page Header End -->   
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner pd-0-force">
               <!-- File Manages -->
           
  <div class="col-md-12 col-lg-12">

                        <div class="card mg-b-30">
                           <div class="card-header">

                              <div class="d-flex justify-content-between align-items-center">
                                 <div>
                                    <h6 class="card-header-title tx-13 mb-0">معلومات الزبون</h6>
                                 </div>
                         
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="form-layout form-layout-1">
                                 <div class="row mg-b-25">
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <input class="form-control" type="text" name="firstname" value="" placeholder="السم الكامل للزبون ">
                                       </div>
                                    </div>
                                    <!-- col-4 -->
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                      
                                          <input class="form-control" type="text" name="lastname" value="" placeholder="العنوان ">
                                       </div>
                                    </div>
                                    <!-- col-4 -->
                                    <div class="col-lg-4">
                                     <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ملاحضة"></textarea>
                                                     </div>
                                    </div>
    
                                    <!-- col-4 -->
                                    <div class="col-lg-4">
                                       <div class="form-group mg-b-10-force">
                                    
                                          <input class="form-control" type="text" name="address" value="" placeholder="رقم الهاتف ">
                                       </div>
                                    </div>
                                    <!-- col-8 -->
                                    <div class="col-lg-4">
                                       <div class="form-group mg-b-10-force">
                                         
                                          <select class="form-control select2 select2-hidden-accessible" data-placeholder="أكاادير " tabindex="-1" aria-hidden="true">
                                             <option label=""></option>
                                             <option value="">أكاادير </option>
                                          </select>
                                       </div>
                                    </div>
                                    <!-- col-4 -->
                                     <div class="col-lg-4">
                                       <div class="form-group mg-b-10-force">
                                    
                                          <input class="form-control" type="text" name="address" value="" placeholder="التمن بالدرهم ">
                                       </div>
                                    </div>
 <div class="col-lg-4">
                                       <div class="form-group mg-b-10-force">
                                         
                                          <select class="form-control select2 select2-hidden-accessible" data-placeholder="اختيار الموضفة " tabindex="-1" aria-hidden="true">
                                             <option value="">اختيار الموضفة </option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                               
                                 <!-- form-layout-footer -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/ Top Label Layout End -->   
                     <!--================================-->
                       <div class="col-md-12 col-lg-12">

                        <div class="card mg-b-30">
                           <div class="card-header">

                              <div class="d-flex justify-content-between align-items-center">
                                 <div>
                                    <h6 class="card-header-title tx-13 mb-0"> المنتجات</h6>
                                 </div>
                         
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="form-layout form-layout-1">
                                 <div class="row mg-b-25">
                                 
                                           <div class="col-lg-3">
                                       <div class="form-group mg-b-10-force">
                                         
                                          <select class="form-control select2 select2-hidden-accessible" data-placeholder="اختيار الموضفة " tabindex="-1" aria-hidden="true">
                                             <option value="">اختيار المنتوج  </option>
                                          </select>
                                       </div>
                                    </div>
                                 
                                    <!-- col-4 -->
                                    <div class="col-lg-3">
                                       <div class="form-group">
                                      
                                          <input class="form-control" type="text" name="lastname" value="" placeholder="سعر البيع  ">
                                       </div>
                                    </div>
                                    <!-- col-4 -->
                                    <div class="col-lg-3">
                                       <div class="form-group">
                                        
                                          <input class="form-control" type="text" name="" value="" placeholder="الكمية  ">
                                       </div>
                                    </div>
                                     <div class="col-lg-3">
                                       <div class="form-group">
                                        <a href=""class="btn btn-primary" >+</a>
                                       </div>
                                    </div>
                               
                                  

                                 </div>
                                 <!-- row -->
                                 <div class="form-layout-footer">
                                    <button class="btn btn-success btn-block">اضافة البيانات </button>
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