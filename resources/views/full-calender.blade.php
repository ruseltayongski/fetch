

<!DOCTYPE html>
<html>
<head>
    <title>Fetch-it</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{ asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}" media="screen">


	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
   <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   
   <!-- Style -->
   <link rel="stylesheet" href="{{ asset('  ') }}">
   <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css') }}" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    
</head>
<body>
  
    <header>
        <div class="loader_bg">
            <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
         </div>
        <!-- header inner -->
        @auth
        <div class="header" id="header-active">   
          <nav class="navbar navbar-expand-lg">
             <div class="container"> <a class="navbar-brand logo" href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a>
               <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <img src="{{ asset('images/harmburger.png') }}" alt=""></button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ml-auto">
                   <li class="nav-item dropdown notification-ui"> <a class="nav-link dropdown-toggle notification-ui_icon" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i> <span class="unread-notification"></span> </a>
                     <div class="dropdown-menu notification-ui_dd" aria-labelledby="navbarDropdown">
                       <div class="notification-ui_dd-header">
                         <h3 class="text-center">Notification</h3>
                       </div>
                       <div class="notification-ui_dd-content">
                         <div class="notification-list notification-list--unread">
                           <div class="notification-list_img"> <img src="images/users/user1.jpg" alt="user"> </div>
                           <div class="notification-list_detail">
                             <p><b>Rahul Singh</b> reacted to your post</p>
                             <p><small>10 mins ago</small></p>
                           </div>
                           <div class="notification-list_feature-img"> <img src="images/features/random1.jpg" alt="Feature image"> </div>
                         </div>
                         <div class="notification-list notification-list--unread">
                           <div class="notification-list_img"> <img src="images/users/user2.jpg" alt="user"> </div>
                           <div class="notification-list_detail">
                             <p><b>Karan</b> reacted to your post</p>
                             <p><small>1 day ago</small></p>
                           </div>
                           <div class="notification-list_feature-img"> <img src="images/features/random2.jpg" alt="Feature image"> </div>
                         </div>
                         <div class="notification-list">
                           <div class="notification-list_img"> <img src="images/users/user3.jpg" alt="user"> </div>
                           <div class="notification-list_detail">
                             <p><b>Aryan</b> reacted to your post</p>
                             <p><small>1 day ago</small></p>
                           </div>
                           <div class="notification-list_feature-img"> <img src="images/features/random3.jpg" alt="Feature image"> </div>
                         </div>
                         <div class="notification-list">
                           <div class="notification-list_img"> <img src="images/users/user4.jpg" alt="user"> </div>
                           <div class="notification-list_detail">
                             <p><b>Neha</b> reacted to your post</p>
                             <p><small>1 day ago</small></p>
                           </div>
                           <div class="notification-list_feature-img"> <img src="images/features/random4.jpg" alt="Feature image"> </div>
                         </div>
                       </div>
                       <div class="notification-ui_dd-footer text-center py-3"> <a href="#!" class="btn btn-success btn-block">View All</a> </div>
                     </div>
                   </li>
                   <li class="nav-item"> <a class="nav-link" href="/">Home</a> </li>
                   <li class="nav-item"> <a class="nav-link" href="/manage">My Appointment</a> </li>
    
                   <form method="POST" action="/logout">
                    @csrf
                      <button type="submit">
                         <li class="nav-item">
                            <a class="nav-linkss" href="logout"><span class="fa fa-sign-out">Logout</span></a>
                         </li>
                      </button>
                   </form>
                 </ul>
               </div>
             </div>
           </nav>
        </div>
        @else
        <div class="header" id="header-active">   
          <nav class="navbar navbar-expand-lg">
             <div class="container"> <a class="navbar-brand logo" href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a>
               <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <img src="{{ asset('images/harmburger.png') }}" alt=""></button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ml-auto">
                   <li class="nav-item dropdown notification-ui"> <a class="nav-link dropdown-toggle notification-ui_icon" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i> <span class="unread-notification"></span> </a>
                     <div class="dropdown-menu notification-ui_dd" aria-labelledby="navbarDropdown">
                       <div class="notification-ui_dd-header">
                         <h3 class="text-center">Notification</h3>
                       </div>
                       <div class="notification-ui_dd-content">
                         <div class="notification-list notification-list--unread">
                           <div class="notification-list_img"> <img src="images/users/user1.jpg" alt="user"> </div>
                           <div class="notification-list_detail">
                             <p><b>Rahul Singh</b> reacted to your post</p>
                             <p><small>10 mins ago</small></p>
                           </div>
                           <div class="notification-list_feature-img"> <img src="images/features/random1.jpg" alt="Feature image"> </div>
                         </div>
                         <div class="notification-list notification-list--unread">
                           <div class="notification-list_img"> <img src="images/users/user2.jpg" alt="user"> </div>
                           <div class="notification-list_detail">
                             <p><b>Karan</b> reacted to your post</p>
                             <p><small>1 day ago</small></p>
                           </div>
                           <div class="notification-list_feature-img"> <img src="images/features/random2.jpg" alt="Feature image"> </div>
                         </div>
                         <div class="notification-list">
                           <div class="notification-list_img"> <img src="images/users/user3.jpg" alt="user"> </div>
                           <div class="notification-list_detail">
                             <p><b>Aryan</b> reacted to your post</p>
                             <p><small>1 day ago</small></p>
                           </div>
                           <div class="notification-list_feature-img"> <img src="images/features/random3.jpg" alt="Feature image"> </div>
                         </div>
                         <div class="notification-list">
                           <div class="notification-list_img"> <img src="images/users/user4.jpg" alt="user"> </div>
                           <div class="notification-list_detail">
                             <p><b>Neha</b> reacted to your post</p>
                             <p><small>1 day ago</small></p>
                           </div>
                           <div class="notification-list_feature-img"> <img src="images/features/random4.jpg" alt="Feature image"> </div>
                         </div>
                       </div>
                       <div class="notification-ui_dd-footer text-center py-3"> <a href="#!" class="btn btn-success btn-block">View All</a> </div>
                     </div>
                   </li>
                   <li class="nav-item"> <a class="nav-link" href="/">Home</a> </li>
                   <li class="nav-item"> <a class="nav-link" href="/login">Login</a> </li>
                   <li class="nav-item"> <a class="nav-link" href="/register">Register</a> </li>
                 </ul>
               </div>
             </div>
           </nav>
        </div>
        
        @endauth
       
     </header>
    
        <div class="container">
            <br />
            <h1 class="text-center text-primary calendar"><u>Select Available Dates to Book</u></h1>
            <br />

            <div id="calendar"></div>

        </div>
   
<script>

$(document).ready(function () {

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        editable:true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        events:'/full-calender',
        selectable:true,
        selectHelper: true,
        select:function(start, end, allDay)
        {
            var title = prompt('Write any comment:');
            if(title)
            {
                var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');
                $.ajax({
                    url:"/full-calender/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        type: 'add'
                    },
                    success:function(data)
                    {
                        if(data == "exist") {
                            displayMessage("This day was already booked from another user");
                        } 
                        else if(data == "already_booked") {
                            errorMessage("You already set an appointment");
                        }
                        else {
                            calendar.fullCalendar('refetchEvents');
                            displayMessage("Event Created Successfully!"); 
                        }
                    }
                })
            }
        },
        editable:true,
        eventResize: function(event, delta)
        {
            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            var title = event.title;
            var created_by = event.created_by;
            var userid = "{{ $user->id }}";

            if (userid == event.created_by) {

              var id = event.id;

                $.ajax({
                    url:"/full-calender/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        created_by: created_by,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        displayMessage("Sucessfully updated!");
                    }
                })
            }  

            else {
              calendar.fullCalendar('refetchEvents');
              errorMessage("Unauthorized updating event from another user!");
            }
        },
        eventDrop: function(event, delta)
        {
            var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
            var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
            var title = event.title;
            var created_by = event.created_by;
            var userid = "{{ $user->id }}";

            if (userid == event.created_by) {

              var id = event.id;

                $.ajax({
                    url:"/full-calender/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        created_by: created_by,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        displayMessage("Sucessfully updated!");
                      }
                  })
              }  

              else {
                calendar.fullCalendar('refetchEvents');
                errorMessage("Unauthorized updating event from another user!");
              }
        },

        eventClick:function(event)
        {
            var userid = "{{ $user->id }}";
            if(userid == event.created_by) {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"/full-calender/action",
                        type:"POST",
                        data:{
                            id:id,
                            type:"delete"
                        },
                        success:function(response)
                        {
                            calendar.fullCalendar('refetchEvents');
                            displayMessage("Sucessfully deleted!");
                        }
                    })
                }
            }

            else {
              calendar.fullCalendar('refetchEvents');
              errorMessage("Unauthorized deleting event from another user!");
            }
            
        }
    });

});

function displayMessage(message) {
  toastr.success(message, 'Event');
  "positionClass"; "toast-middle"
}

function errorMessage(message) {
  toastr.error(message, 'Error');
}

  
</script>
  
</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>








<!-- sidebar -->

<script src="{{ asset('js/custom.js') }}"></script>

<!--===============================================================================================-->

<!--===============================================================================================-->

