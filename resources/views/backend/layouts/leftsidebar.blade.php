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
                            <span class="micon dw dw-diagram"></span><span class="mtext">Home</span>
                        </a>
                    </li>
                  
                </li>
              
                     <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Event Type</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('category.index')}}">All  Event</a></li>
                        <li><a href="{{route('category.create')}}">New Event Add</a></li>
                        
                       
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Products Type of Event</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('product.index')}}">All Event</a></li>
                        <li><a href="{{route('product.create')}}">New Event</a></li>
                        
                       
                    </ul>
                </li>
              
             
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Employee List</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('employeelist.create')}}">Add Employee </a></li>
                        <li><a href="{{route('employeelist.index')}}">All Employee List</a></li>
                        
                       
                    </ul>
                </li>
                {{-- Schedule Routing --}}
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Event Schedule</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('schedule.create')}}">New Schedule Add</a></li>
                        <li><a href="{{route('schedule.index')}}">All Event Schedule</a></li>
                        </ul>
                </li>
                {{-- Event Venu Routin --}}
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Event Venu Detail</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('eventvenues.create')}}">New Event Venu Add</a></li>
                        <li><a href="{{route('eventvenues.index')}}">All Event Venu</a></li>
                        </ul>
                </li>


                {{-- Event Type --}}
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Event Type</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('eventtype.create')}}">Add Event Type</a></li>
                        <li><a href="{{route('eventtype.index')}}">All Event List</a></li>
                        
                       
                    </ul>
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
                {{-- Sponsor Routing Start --}}
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Sponsor Company</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('sponsor.create')}}">Add Sponsor Detail</a></li>
                        <li><a href="{{route('sponsor.index')}}">All Sponsor List</a></li>
                    </ul>
                </li>
                {{-- Speaker Routing --}}
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Event Speaker</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('eventspeaker.create')}}">Add Event Speaker</a></li>
                        <li><a href="{{route('eventspeaker.index')}}">All Event Speaker</a></li>
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