<x-layout :user="$user">
   @include('sweetalert::alert')
   <div class="services_documents">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="titlepage">
                  <h2>Choose Document</h2>
               </div>
            </div>
         </div>
            <div class="row">
               <div class="col-md-4">
                  <div id="serv_hover" class="services_box">
                     <i><img src="images/service2.png" alt="#"/></i>
                     <h3>Barangay Clearance</h3>   
                     <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <h2 class="request">Request</h2></i></a>
                      </button>
                  </div>
               </div>

               <div class="col-md-4">
                  <div id="serv_hover" class="services_box">
                     <i><img src="images/service2.png" alt="#"/></i>
                     <h3>Certificate of Indigency</h3>
                     <button type="button" data-bs-toggle="modal" data-bs-target="#secondModal">
                        <h2 class="request">Request</h2></i></a>
                      </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>   

   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-body">
               <form method="POST" action="/documents/save" enctype="multipart/form-data">
                  @csrf
               
                  <span class="login100-form-title">
                     Please fill up the form
                  </span>
                  <input type="hidden" value="Barangay_Clearance" name="request_type">
               
                  <div class="wrap-input100 validate-input" data-validate = "Firstname is required">
                        <input class="input100" type="text" name="firstname" placeholder="Fullname" value="{{ old('firstname') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                           <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                        @error('firstname')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>
               
                  <div class="wrap-input100 validate-input" data-validate = "Birthdate is required">
                        <input class="input100" type="date" id="datepicker" name="birthdate" placeholder="Birthday" value="{{ old('birthdate') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                           <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                        @error('birthdate')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                     @enderror
                  </div>
               
                  <div class="wrap-input100 validate-input" data-validate = "Address is required">
                        <input class="input100" type="text"  name="address" placeholder="Address" value="{{ old('address') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                           <i class="fa fa-address-card" aria-hidden="true"></i>
                        </span>
                        @error('address')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>
               
                  <div class="wrap-input100 validate-input" data-validate = "Sitio is required">
                        <input class="input100" type="text"  name="sitio" placeholder="Sitio" value="{{ old('sitio') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                           <i class="fa fa-address-card" aria-hidden="true"></i>
                        </span>
                        @error('address')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>
                  
               
                  <label for="purpose">Specify your Purpose</label>
               
                  <textarea id="purpose" name="purpose" rows="5" cols="33" placeholder="Type Here..."></textarea>
               
                  
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="secondModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-body">
               <form method="POST" action="/documents/save" enctype="multipart/form-data">
                  @csrf
               
                  <span class="login100-form-title">
                     Please fill up the form
                  </span>
                  <input type="hidden" value="coi" name="request_type">
               
                  <div class="wrap-input100 validate-input" data-validate = "Firstname is required">
                        <input class="input100" type="text" name="firstname" placeholder="Fullname" value="{{ old('firstname') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                           <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                        @error('firstname')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>
               
                  <div class="wrap-input100 validate-input" data-validate = "Birthdate is required">
                        <input class="input100" type="date" id="datepicker" name="birthdate" placeholder="Birthday" value="{{ old('birthdate') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                           <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                        @error('birthdate')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                     @enderror
                  </div>
               
                  <div class="wrap-input100 validate-input" data-validate = "Address is required">
                        <input class="input100" type="text"  name="address" placeholder="Address" value="{{ old('address') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                           <i class="fa fa-address-card" aria-hidden="true"></i>
                        </span>
                        @error('address')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>
               
                  <div class="wrap-input100 validate-input" data-validate = "Sitio is required">
                        <input class="input100" type="text"  name="sitio" placeholder="Sitio" value="{{ old('sitio') }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                           <i class="fa fa-address-card" aria-hidden="true"></i>
                        </span>
                        @error('address')
                           <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>
                  
               
                  <label for="purpose">Specify your Purpose</label>
               
                  <textarea id="purpose" name="purpose"rows="5" cols="33" placeholder="Type Here..."></textarea>
               
                  
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>


</x-layout>






