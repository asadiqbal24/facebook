<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">
              <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" />
              <span class="logo-name">Admin</span>
            </a>
          </div>
          <ul class="sidebar-menu">
          	<li class="dropdown active" style="display: block;">
          		 <div class="sidebar-profile">
	                 <div class="siderbar-profile-pic">
	                     <img src="{{asset('assets/img/users/user-6.png')}}" class="profile-img-circle box-center" alt="User Image">
	                 </div>
	                 <div class="siderbar-profile-details">
	                     <div class="siderbar-profile-name"> {{Auth::user()->name}} </div>
	                 
	                 </div>
	                 <div class="sidebar-profile-buttons">
	                     <a class="tooltips waves-effect waves-block toggled" href="" data-toggle="tooltip" title="" data-original-title="Profile">
	                         <i class="fas fa-user sidebarQuickIcon"></i>
	                     </a>
	                    
	                     
	                     <a class="tooltips waves-effect waves-block" href="auth-login.html" data-toggle="tooltip" title="" data-original-title="Logout">
                        <i class="fas fa-share-square sidebarQuickIcon"></i>
	                     </a>
	                 </div>
                 </div>
             </li>
             <li class="menu-header">Main</li>
            
            <li><a class="nav-link" href=""><i class="fas fa-user"></i><span>Dashboard</span></a></li>
            <li><a class="nav-link" href="{{route('admin-home')}}"><i class="fas fa-user"></i><span>Chart</span></a></li>

            <li><a class="nav-link" href="{{route('engagement-performance')}}"><i class="fas fa-user"></i><span>Engagement</span></a></li>


            <li><a class="nav-link" href="{{route('demographic-performance')}}"><i class="fas fa-user"></i><span>Demographic</span></a></li>


            <li><a class="nav-link" href="{{route('gender-targeting')}}"><i class="fas fa-user"></i><span>Gender Targeting</span></a></li>

            
         

            <li><a class="nav-link" href="{{route('logout')}}"><i class="fas fa-user"></i><span>Logout</span></a></li>
            
           
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
          </ul>
        </aside>
      </div>