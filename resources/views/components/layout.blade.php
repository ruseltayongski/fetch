
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Fetch-it</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">

    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet">
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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css') }}" />
      
    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Responsive-jQuery-Message-Box-Notification-Plugin-lobibox/dist/css/LobiBox.min.css"/>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
  </head>

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
               <li class="nav-link dropdown notification-ui"> <a class="nav-link dropdown-toggle notification-ui_icon" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                
                <i class="fa fa-bell"></i> Notifications <span id="notification_badge"></span> <span class="unread-notification"></span> </a>
                 <div class="dropdown-menu notification-ui_dd" aria-labelledby="navbarDropdown">
                   <div class="notification-ui_dd-header">
                     <h3 class="text-center">Notification</h3>
                   </div>
                   <div class="notification-ui_dd-content">
                     
                   </div>
                   <div class="notification-ui_dd-footer text-center py-3"> <a href="#!" class="btn btn-success btn-block">View All</a> </div>
                 </div>
               </li>
               <li class="nav-item"> <a class="nav-link" href="/">Home</a> </li>
               <li class="nav-item"> <a class="nav-link" href="/manage">My Appointment</a> </li>
               <form method="POST" action="/logout">
                  @csrf
                  <button type="submit">
                     <li class="nav-item"> <a class="nav-links" href="/logout"><span class="fa fa-sign-out">Logout</span></a> </li>
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


   <main>
      {{ $slot }}
   </main> 


 <footer>
   <section>
      <div class="footer">
            <img src="{{ asset('images/fetch.itcebu business card.png') }}" alt="">
      </div>
   </section>
   
 </footer>

 <!-- end footer -->
 <!-- Javascript files-->


 {{-- script src="{{ asset('https://code.jquery.com/jquery-3.2.1.slim.min.js') }}"></script> 
 <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}"></script> 
 <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}"></script> --}}

{{--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('js/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/js/popper.min.js') }}"></script>
<script src="{{ asset('js/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/js/main.js') }}"></script> --}}

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
{{-- <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('https://code.jquery.com/ui/1.13.2/jquery-ui.js') }}"></script> --}}
<!-- sidebar -->
{{-- <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script> --}}
<script src="{{ asset('js/custom.js') }}"></script>

<!--===============================================================================================-->
{{-- <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script> --}}
<!--===============================================================================================-->
{{-- <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script> --}}
{{-- <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })  
</script> --}}

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

<!--===============================================================================================-->
<script src="https://www.jqueryscript.net/demo/Responsive-jQuery-Message-Box-Notification-Plugin-lobibox/dist/js/lobibox.min.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase.js"></script>
<script>
    @if(isset($user))
      initFirebase();
      function initFirebase() {
        var firebaseConfig = {
            apiKey: "AIzaSyDix42rj3tH9tGURqCKwy0fNNbuSEXbO8A",
            authDomain: "thesis-c2aee.firebaseapp.com",
            databaseURL: "https://thesis-c2aee-default-rtdb.firebaseio.com",
            projectId: "thesis-c2aee",
            storageBucket: "thesis-c2aee.appspot.com",
            messagingSenderId: "415642984055",
            appId: "1:415642984055:web:53a6c7b808dce18197b072",
            measurementId: "G-3SS8CRM8FD"
          };
          firebase.initializeApp(firebaseConfig);
      }
      
      var page_firstload = true;
      var userid = "{{ $user->id }}";
      var dbRef = firebase.database();
      var get_document = dbRef.ref('thesis');
      get_document.limitToLast(1).on('child_added',function(snapshot) {
        console.log(page_firstload);
        if(page_firstload) {
          page_firstload = false;
          return;
        }
        var firebase_data = snapshot.val();
        console.log(firebase_data)
        console.log(userid)
        //console.log(firebase_data);
        if(firebase_data.created_by == userid) {
          $.get('/documents/firebase/' + firebase_data.document_id,function(response) {
            $(".notification-ui_dd-content").prepend($.parseHTML(response.html));
            $("#notification_badge").html('<span class="badge badge-pill badge-primary">'+response.count_document+'</span>')
            Lobibox.notify("success", {
              title: "Barangay Clearance",
              size: 'normal',
              delay: false,
              closeOnClick: false,
              img: "/images/logo.png",
              msg: "You doucments was approved!"
            });
          });
        }
      });

      // get_document.once('value',function(data) {
      //   console.log(data);
      // })

      $.get('/documents/approved',function(response) {
        $(".notification-ui_dd-content").prepend($.parseHTML(response.html));
        $("#notification_badge").html('<span class="badge badge-pill badge-primary">'+response.count_document+'</span>')
      });
  @endif
</script>