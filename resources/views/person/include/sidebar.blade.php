       <!-- Main Sidebar Container -->
       <aside class="main-sidebar sidebar-dark-primary elevation-4">


           <!-- Sidebar -->
           <div class="sidebar">
               <!-- Sidebar user panel (optional) -->
            

               <!-- SidebarSearch Form -->
               <div class="form-inline">
                   <div class="input-group" data-widget="sidebar-search">
                       <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                       <div class="input-group-append">
                           <button class="btn btn-sidebar">
                               <i class="fas fa-search fa-fw"></i>
                           </button>
                       </div>
                   </div>
               </div>

               <!-- Sidebar Menu -->
               <nav class="mt-2">
                   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                       data-accordion="false">
                       <li class="nav-item">
                           <a href="{{route('person.index')}}" class="nav-link">
                               <i class="nav-icon fas fa-columns"></i>
                               <p>
                                   Main
                               </p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="{{route('liked.index')}}" class="nav-link">
                               <i class="nav-icon fas fa-columns"></i>
                               <p>
                                   My Post
                               </p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="{{route('comment.index')}}" class="nav-link">
                               <i class="nav-icon fas fa-columns"></i>
                               <p>
                                   Comments
                               </p>
                           </a>
                       </li>                          
                   </ul>
               </nav>
               <!-- /.sidebar-menu -->
           </div>
           <!-- /.sidebar -->
       </aside>
