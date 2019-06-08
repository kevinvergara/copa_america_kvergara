<!doctype html>
<head>
    <meta charset="UTF-8"/>
    <title>
        @section('titulo')
            Resource Manager : 
        @show
    </title>
    @yield('css')
    @yield('javascript')
</head>

<body>

    <div id="header">
        <h1><a href="http://www.google.cl">google.cl</a></h1>
    </div>
    <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
    
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav">
                <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
                <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">new message</a></li>
                        <li><a class="sInbox" title="" href="#">inbox</a></li>
                        <li><a class="sOutbox" title="" href="#">outbox</a></li>
                        <li><a class="sTrash" title="" href="#">trash</a></li>
                    </ul>
                </li>
                <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
                <li class=""><a href="<?php echo link_to();?>"><span class="text">Logouddt</span></a>
				<?php echo link_to();?>
				{{ link(/logout)}}
				</li>
            </ul>
        </div>

        <div id="search">
            <input type="text" placeholder="Search here..."/>
            <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
        </div>
    
        <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
            <ul>
                @yield('menu')
            </ul>
        </div>
        
                
		
            
            @yield('content')
            
        </div>
    <div class="row-fluid">
      <div id="footer" class="span12"> 2014 &copy; Workmate ::. Desarrollo de Software y TI <a href="http://www.workmate.cl">www.workmate.cl</a> </div>
    </div>
        @yield('jsfinal')
		
	
</body>

