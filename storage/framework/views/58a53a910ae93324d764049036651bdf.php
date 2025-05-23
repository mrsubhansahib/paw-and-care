<div class="app-sidebar">
     <!-- Sidebar Logo -->
     <div class="logo-box">
          <a href="<?php echo e(route('any', 'index')); ?>" class="logo-dark">
               <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm">
               <img src="/images/logo-dark.png" class="logo-lg" alt="logo dark">
          </a>

          <a href="<?php echo e(route('any', 'index')); ?>" class="logo-light">
               <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm">
               <img src="/images/logo-light.png" class="logo-lg" alt="logo light">
          </a>
     </div>

     <div class="scrollbar" data-simplebar>

          <ul class="navbar-nav" id="navbar-nav">

               <li class="menu-title">Menu...</li>

               <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('any', 'index')); ?>">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:widget-2-outline"></iconify-icon>
                         </span>
                         <span class="nav-text"> Dashboard </span>
                         <span class="badge bg-primary badge-pill text-end">New</span>
                    </a>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarAuthentication">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:user-circle-outline"></iconify-icon>
                         </span>
                         <span class="nav-text"> Authentication </span>
                    </a>
                    <div class="collapse" id="sidebarAuthentication">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['auth','signin'])); ?>">Sign In</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['auth','signup'])); ?>">Sign Up</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['auth','password'])); ?>">Reset Password</a>
                              </li>
                              
                         </ul>
                    </div>
               </li>

               

               <li class="menu-title">UI Kit...</li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarBaseUI" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarBaseUI">
                         <span class="nav-icon"><iconify-icon icon="solar:leaf-outline"></iconify-icon></span>
                         <span class="nav-text"> Base UI </span>
                    </a>
                    <div class="collapse" id="sidebarBaseUI">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','accordion'])); ?>">Accordion</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','alerts'])); ?>">Alerts</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','avatar'])); ?>">Avatar</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','badge'])); ?>">Badge</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','breadcrumb'])); ?>">Breadcrumb</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','buttons'])); ?>">Buttons</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','card'])); ?>">Card</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','carousel'])); ?>">Carousel</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','collapse'])); ?>">Collapse</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','dropdown'])); ?>">Dropdown</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','list-group'])); ?>">List Group</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','modal'])); ?>">Modal</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','tabs'])); ?>">Tabs</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','offcanvas'])); ?>">Offcanvas</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','pagination'])); ?>">Pagination</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','placeholders'])); ?>">Placeholders</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','popovers'])); ?>">Popovers</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','progress'])); ?>">Progress</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','scrollspy'])); ?>">Scrollspy</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','spinners'])); ?>">Spinners</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','toasts'])); ?>">Toasts</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['ui','tooltips'])); ?>">Tooltips</a>
                              </li>
                         </ul>
                    </div>
               </li>

               

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarForms">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:box-outline"></iconify-icon>
                         </span>
                         <span class="nav-text"> Forms </span>
                    </a>
                    <div class="collapse" id="sidebarForms">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['forms','basic'])); ?>">Basic Elements</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['forms','flatpicker'])); ?>">Flatpicker</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['forms','validation'])); ?>">Validation</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['forms','fileuploads'])); ?>">File Upload</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['forms','editors'])); ?>">Editors</a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarTables">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:checklist-outline"></iconify-icon>
                         </span>
                         <span class="nav-text"> Tables </span>
                    </a>
                    <div class="collapse" id="sidebarTables">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['tables','basic'])); ?>">Basic Tables</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['tables','gridjs'])); ?>">Grid Js</a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarIcons">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:crown-star-outline"></iconify-icon>
                         </span>
                         <span class="nav-text"> Icons </span>
                    </a>
                    <div class="collapse" id="sidebarIcons">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['icons','boxicons'])); ?>">Boxicons</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['icons','solar'])); ?>">Solar Icons</a>
                              </li>
                         </ul>
                    </div>
               </li>

               

               <li class="menu-title">Other</li>

               <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarLayouts">
                         <span class="nav-icon">
                              <iconify-icon icon="solar:window-frame-outline"></iconify-icon>
                         </span>
                         <span class="nav-text"> Layouts </span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                         <ul class="nav sub-navbar-nav">
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['layouts-demo','dark-sidenav'])); ?>" target="_blank">Dark
                                        Sidenav</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['layouts-demo','dark-topnav'])); ?>" target="_blank">Dark
                                        Topnav</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['layouts-demo','small-sidenav'])); ?>" target="_blank">Small
                                        Sidenav</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" href="<?php echo e(route ('second' , ['layouts-demo','hidden-sidenav'])); ?>" target="_blank">Hidden
                                        Sidenav</a>
                              </li>
                              <li class="sub-nav-item">
                                   <a class="sub-nav-link" target="_blank" href="<?php echo e(route ('second' , ['layouts-demo','dark'])); ?>">
                                        <span class="nav-text">Dark Mode</span>
                                        <span class="badge badge-soft-danger badge-pill text-end">Hot</span>
                                   </a>
                              </li>
                         </ul>
                    </div>
               </li>

               

               
          </ul>
     </div>
</div><?php /**PATH D:\Laravel\Client\Paw&Care\resources\views\layouts\partials\sidebar.blade.php ENDPATH**/ ?>