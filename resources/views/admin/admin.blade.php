<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
   <!DOCTYPE html>
   <html lang="en">
   
   <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.png">
     <title>Admin</title>
     <meta name="csrf-token" content="{{ csrf_token() }}" />
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
     <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
     <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Responsive-jQuery-Message-Box-Notification-Plugin-lobibox/dist/css/LobiBox.min.css"/>
    </head>
   
   <body class="g-sidenav-show  bg-gray-200">
     <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
       <!-- Navbar -->
       <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
         <div class="container-fluid py-1 px-3">
           <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
             <div class="ms-md-auto pe-md-3 d-flex align-items-center">
             </div>

             <form action="/logout" method="POST">
              @csrf
                <ul class="navbar-nav  justify-content-end">
                  <li class="nav-item d-flex align-items-center">
                    <a href="" class="nav-link text-body font-weight-bold px-0">
                      <i class="fa fa-user me-sm-1"></i>
                        <button type="submit" >
                          <span class="d-sm-inline d-none">Logout</span>
                      </button>
                    </a>
                  </li>
              </form>

              <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                  <a href="" class="nav-link text-body font-weight-bold px-0">
                    <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Add Admin Account</span>
                  </a>
                </li>
             </ul>
           </div>
         </div>
       </nav>
       <!-- End Navbar -->
       <div class="container-fluid py-4">
         <div class="row">
           <div class="col-12">
             <div class="card my-4">
               <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                 <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                   <h6 class="text-white text-capitalize ps-3">Admin Panel</h6>
                 </div>
               </div>
               <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                          <thead>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Firstname</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Lastname</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Requesting For</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Address</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Sitio</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Purpose</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Claim Date</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"></th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder"></th>
                            <th class="text-secondary opacity-7"></th>
                          </thead>
                        </tr>
                        @foreach($documents as $row)
                        <tr>        
                           {{--  <td>
                              <div class="d-flex px-2 py-1">
                                <div>
                                  <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">{{ $row->firstname}}</h6>
                                  <p class="text-xs text-secondary mb-0">{{ $row->email }}</p>
                                </div>
                              </div>
                            </td> --}}
                            <td>
                              <p class="text-xs text-secondary mb-0">{{ ucfirst($row->firstname) }}</p>
                            </td>
                            <td>
                              <p class="text-xs text-secondary mb-0">{{ ucfirst($row->lastname) }}</p>
                            </td>

                            <td>
                              <p class="text-xs text-secondary mb-0">{{ ucfirst($row->request_type) }}</p>
                            </td>

                            <td>
                              <p class="text-xs text-secondary mb-0">{{ ucfirst($row->address) }}</p>
                            </td>

                            <td>
                              <p class="text-xs text-secondary mb-0">{{ ucfirst($row->sitio) }}</p>
                            </td>

                            <td>
                              <p class="text-xs text-secondary mb-0">{{ ucfirst($row->purpose) }}</p>
                            </td>

                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">{{ $row->start }}</span>
                            </td>
                            <td class="align-middle text-center text-sm" id="status{{ $row->document_id }}">
                              @if($row->status == 'pending')
                                <span class="status" style="background-color:orange;">Pending</span>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <a href="javascript:;" onclick="handleApproved('{{ $row->document_id }}','{{ $row->created_by }}')" class="text-secondaries font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Approve
                                  </a>
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#secondModal">
                                  <a href="javascript:;" onclick="handleApproved('{{ $row->document_id }}','{{ $row->created_by }}')" class="text-secondaries font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Decline
                                  </a>
                                </button>  
                              @else
                                <span class="status">{{ $row->status }}</span>
                              @endif
                            </td>
                       </tr>
                       @endforeach
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </main>

     <div class="modal fade" id="secondModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Attempting to Delete Request</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to delete this?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
         {{--    <form action="/documents/{{ $documents->document_id}}" method="POST">
              @csrf

              @method('DELETE'); --}}
               <button class="btn btn-danger" onclick="decline()">Yes</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Attempting to Approve Request</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to Approve?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="confirmApproved()">Yes</button>
          </div>
        </div>
      </div>
    </div>

     {{-- <div class="fixed-plugin">
       <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
         <i class="material-icons py-2">settings</i>
       </a>
       <div class="card shadow-lg">
         <div class="card-header pb-0 pt-3">
           <div class="float-start">
             <h5 class="mt-3 mb-0">Material UI Configurator</h5>
             <p>See our dashboard options.</p>
           </div>
           <div class="float-end mt-4">
             <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
               <i class="material-icons">clear</i>
             </button>
           </div>
           <!-- End Toggle Button -->
         </div>
         <hr class="horizontal dark my-1">
         <div class="card-body pt-sm-3 pt-0">
           <!-- Sidebar Backgrounds -->
           <div>
             <h6 class="mb-0">Sidebar Colors</h6>
           </div>
           <a href="javascript:void(0)" class="switch-trigger background-color">
             <div class="badge-colors my-2 text-start">
               <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
               <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
               <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
               <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
               <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
               <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
             </div>
           </a>
           <!-- Sidenav Type -->
           <div class="mt-3">
             <h6 class="mb-0">Sidenav Type</h6>
             <p class="text-sm">Choose between 2 different sidenav types.</p>
           </div>
           <div class="d-flex">
             <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
             <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
             <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
           </div>
           <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
           <!-- Navbar Fixed -->
           <div class="mt-3 d-flex">
             <h6 class="mb-0">Navbar Fixed</h6>
             <div class="form-check form-switch ps-0 ms-auto my-auto">
               <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
             </div>
           </div>
           <hr class="horizontal dark my-3">
           <div class="mt-2 d-flex">
             <h6 class="mb-0">Light / Dark</h6>
             <div class="form-check form-switch ps-0 ms-auto my-auto">
               <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
             </div>
           </div>
           <hr class="horizontal dark my-sm-4">
           <a class="btn btn-outline-dark w-100" href="">View documentation</a>
           <div class="w-100 text-center">
             <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
             <h6 class="mt-3">Thank you for sharing!</h6>
             <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
               <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
             </a>
             <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
               <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
             </a>
           </div>
         </div>
       </div>
     </div> --}}
     <!--   Core JS Files   -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <!-- <script src="../assets/js/core/popper.min.js"></script>
     <script src="../assets/js/core/bootstrap.min.js"></script>
     <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
     <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script> -->
     <script>
       var win = navigator.platform.indexOf('Win') > -1;
       if (win && document.querySelector('#sidenav-scrollbar')) {
         var options = {
           damping: '0.5'
         }
         Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
       }
     </script>
     <!-- Github buttons -->
     <script async defer src="https://buttons.github.io/buttons.js"></script>
     <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
     <!-- <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script> -->
   </body>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <script src="https://www.jqueryscript.net/demo/Responsive-jQuery-Message-Box-Notification-Plugin-lobibox/dist/js/lobibox.min.js"></script>

   <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase.js"></script>
   <script>
    var document_id = 0;
    var created_by = 0;

    function handleApproved(document_id_data, created_by_data,) {
      document_id = document_id_data;
      created_by = created_by_data;
    }

    function confirmApproved() {
      //console.log(document_id);
      $('#exampleModal').modal('hide');
      $.ajaxSetup({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
          url:"/documents/update",
          type:"POST",
          data:{
              document_id : document_id,
              status : "approved"
          },
          success:function(response)
          {
            Lobibox.notify("success", {
                title: "Approved",
                size: 'normal',
                img: "/images/logo.png",
                msg: "Successfully Approved!"
            });
          }
      })
      $("#status"+document_id).html('<span class="status">Approved</span>');
      sendToFirebase(document_id, created_by);
     
    }

    function decline() {
      $('#secondModal').modal('hide');
      $.ajaxSetup({
          headers:{
              'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({
        url:"/documents/{documents}",
        type:"DELETE",
        data:{
          document_id : document_id
        },
        success:function(response)
          {
            Lobibox.notify("success", {
                title: "Delete",
                size: 'normal',
                img: "/images/logo.png",
                msg: "Successfully Deleted!"
            });
          }
      })
      $("#status"+document_id).html('<span class="status">Decline</span>');
      sendToFirebase(document_id, created_by);
    }

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

    function sendToFirebase(document_id_data, created_by_data) {
      var dbRef = firebase.database();
      var requestRef = dbRef.ref('thesis');
      requestRef.push({
          document_id: document_id_data,
          created_by: created_by_data,
      });
    }
   </script>
   
   </html> 

   

