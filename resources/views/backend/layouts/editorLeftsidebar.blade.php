<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{asset('assets/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
            <img src="{{asset('assets/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <li>
                        <a href="sitemap.html" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-diagram"></span><span class="mtext">Mr Editor</span>
                        </a>
                    </li>
                  
                </li>
              
                   
                </li> 
                {{-- BlogPost Routing --}}
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Blog Post</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('blogpost.create')}}">Add Blog Post</a></li>
                        <li><a href="{{route('blogpost.index')}}">All Blog List</a></li>
                        
                       
                    </ul>
                </li>
                {{-- Event Type Of User --}}
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Event Type</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('eventtype.create')}}">Add Event Type</a></li>
                        <li><a href="{{route('eventtype.index')}}">All Event List</a></li>
                        
                       
                    </ul>
                </li>
              
               
                
               
                
                <li>
                    <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-paper-plane1"></span>
                        <span class="mtext">Landing Page <img src="assets/vendors/images/coming-soon.png" alt="" width="25"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>