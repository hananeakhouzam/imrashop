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
           

<div class="row clearfix">
                     <!--================================-->
                     <!-- Basic dataTable Start -->
                     <!--================================-->
                     <div class="col-md-12 col-lg-12">
                        <div class="card mg-b-30">
                           <div class="card-header">
                              <div class="d-flex justify-content-between align-items-center">
                                 <div>
                                    <h6 class="card-header-title tx-13 mb-0"> لطلبات المحذوفة
</h6>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body pd-0">
                              <table id="basicDataTable" class="table responsive nowrap">
                                 <thead>
                                    <tr>
                                       <th> </th>
                                       <th>تاريخ </th>
                                       <th>الإسم ورقم الهاتف     </th>
                                       <th>العنوان </th>
                                       <th> المدينة الحقيقية       </th>
                                       <th>المنتوج  </th>
                                       <th>المنتوج الحقيقي   </th>
                                       <th>الكمية </th>
                                       <th>الثمن </th>
                                       <th>المصدر </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                  <td></td>
                           <td>name</td>
                           <td>name</td>
                           <td>name</td>
                           <td>name</td>
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