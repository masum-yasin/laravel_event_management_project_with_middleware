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
                {{-- Event Venu Routing --}}
             


                {{-- Event Type --}}
              
                {{-- BlogPost Routing --}}
              
                {{-- Sponsor Routing Start --}}
               
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