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
               <div class="filemanager-content">
                
                  <div class="filemanager-content-body pushbar_main_content">
                     <div class="pd-20 pd-lg-25 pd-xl-30">
                        <label class="">تاريخ اليوم</label>
                        <div class="row clearfix">
                          
                         <div class="col-md-3 col-lg-3 col-xl-3 mg-t-30">
                              <div class="card card-file" data-pushbar-target="fileDetailsPushbar">
                                 <div class="card-body">
                                     <h3> 10درهم </h3> 
                                     <span>مجموع الأرباح لهذا الأيوم </span>
                                      </div>
                                    </div>
                           </div>
                          <div class="col-md-3 col-lg-3 col-xl-3 mg-t-30">
                              <div class="card card-file" data-pushbar-target="fileDetailsPushbar">
                                 <div class="card-body">
                                     <h3> 10درهم </h3> 
                                     <span>عدد الطلبات الجديدة</span>
                                      </div>
                                    </div>
                           </div>
                          <div class="col-md-3 col-lg-3 col-xl-3 mg-t-30">
                              <div class="card card-file" data-pushbar-target="fileDetailsPushbar">
                                 <div class="card-body">
                                     <h3>10 درهم </h3> 
                                     <span>عدد الطلبات في  انتظار التوزيع</span>
                                      </div>
                                    </div>
                           </div>
                          <div class="col-md-3 col-lg-3 col-xl-3 mg-t-30">
                              <div class="card card-file" data-pushbar-target="fileDetailsPushbar">
                                 <div class="card-body">
                                     <h3>10 درهم </h3>
                                      
                                     <span> الطلبات  قيد المعالجة</span>
                                      </div>

                                    </div>
                           </div>
                          



                       
                           <div class="col-md-4 col-lg-4 col-xl-4 mg-t-30">
                              <div class="card card-file" data-pushbar-target="fileDetailsPushbar">
                                 <div class="card-body">
                                    <h6>احصائيات المدن </h6>
                                 </div>
                                
                              </div>
                           </div>
                            <div class="col-md-4 col-lg-4 col-xl-4 mg-t-30">
                              <div class="card card-file" data-pushbar-target="fileDetailsPushbar">
                                 <div class="card-body">
                                    <h6>احصائيات المنتوجات </h6>
                                 </div>
                                
                              </div>
                           </div>
                            <div class="col-md-4 col-lg-4 col-xl-4 mg-t-30">
                              <div class="card card-file" data-pushbar-target="fileDetailsPushbar">
                                 <div class="card-body">
                                    <h6>حجم التعاملات لاخر الاسيوع </h6>
                                 </div>
                                
                              </div>
                           </div>
       
                              


         <div class="col-md-4 col-lg-4 col-xl-4 mg-t-30">
                              <div class="card card-file" data-pushbar-target="fileDetailsPushbar">
                                 <div class="card-body">
                                    <p>الطلبات التي تم تسليمها</p>
                                    <p>الطلبات التي تم الغائها</p>
                                    <p>الطلبات في انتظار التسليم</p>
                                    <p> الطلبات التي لا تجيب</p>
                                    <p>حالة اعادة الإتصال</p>
                                 </div>
                                
                              </div>
                           </div>
                                <div class="col-md-4 col-lg-4 col-xl-4 mg-t-30">
                              <div class="card card-file" data-pushbar-target="fileDetailsPushbar">
                                 <div class="card-body">
                                    <p>الطلبات التي تم تسليمها</p>
                                    <p>الطلبات التي تم الغائها</p>
                                    <p>الطلبات في انتظار التسليم</p>
                                    <p> الطلبات التي لا تجيب</p>
                                    <p>حالة اعادة الإتصال</p>
                                 </div>
                                
                              </div>
                           </div>
                                    <div class="col-md-4 col-lg-4 col-xl-4 mg-t-30">
                              <div class="card card-file" data-pushbar-target="fileDetailsPushbar">
                                 <div class="card-body">
                                    <p>الطلبات التي تم تسليمها</p>
                                    <p>الطلبات التي تم الغائها</p>
                                    <p>الطلبات في انتظار التسليم</p>
                                    <p> الطلبات التي لا تجيب</p>
                                    <p>حالة اعادة الإتصال</p>
                                 </div>
                                
                              </div>
                           </div>

                         
                        </div>
                     </div>
                  </div>
               </div>
               <!--/ File Manages  End -->
            </div>		
         </div>
         <!--/ Page Content End -->
      </div>

      <!-- Footer Script -->
<?php
include 'footer.html';
?> 
   </body>

<!-- Mirrored from colorlib.net/avesta/html/app-file-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Apr 2020 15:03:38 GMT -->
</html>