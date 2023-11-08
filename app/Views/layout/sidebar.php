   <!-- Sidebar Start -->
   <aside class="left-sidebar">
     <!-- Sidebar scroll-->
     <div>
       <div class="brand-logo d-flex align-items-center justify-content-between">
         <a href="./index.html" class="text-nowrap logo-img">
           <img src="<?= base_url('template2') ?>/assets/images/logos/logos.png" width="180" alt="" />
         </a>
         <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
           <i class="ti ti-x fs-8"></i>
         </div>
       </div>
       <!-- Sidebar navigation-->
       <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
         <ul id="sidebarnav">
           <li class="nav-small-cap">
             <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
             <span class="hide-menu">Home</span>
           </li>
           <li class="sidebar-item">
             <a class="sidebar-link" href="<?= base_url('pages') ?>" aria-expanded="false">
               <span>
                 <i class="ti ti-layout-dashboard"></i>
               </span>
               <span class="hide-menu">Dashboard</span>
             </a>
           </li>
           
           <li class="nav-small-cap">
             <img src="" alt="">
             <i class="ti ti-table nav-small-cap-icon fs-4"></i>
             <span class="hide-menu">Tabel</span>
           </li>
           <li class="sidebar-item">
             <a class="sidebar-link" href="<?= base_url('pages/tabel') ?>" aria-expanded="false">
               <span>
                 <i class="ti ti-table"></i>
               </span>
               <span class="hide-menu">Data Sensor</span>
             </a>
           </li>

       </nav>
       <!-- End Sidebar navigation -->
     </div>
     <!-- End Sidebar scroll-->
   </aside>
   <!--  Sidebar End -->