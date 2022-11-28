<x-layout>
    <section>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="images/img-01.png" alt="IMG">
                    </div>
    
                    <form class="login100-form validate-form" method="POST" action="/users" enctype="multipart/form-data">
                        @csrf
                        <span class="login100-form-title">
                            Member Registration
                        </span>
                        
                       {{--  <div class="wrap-input100 validate-input" data-validate="Usertype is required">
                            <select name="usertpye" id="" class="input100">
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div> --}}

                        <div class="wrap-input100 validate-input" data-validate = "Firstname is required">
                            <input class="input100" type="text" name="firstname" placeholder="Firstname" value="{{ old('firstname') }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </span>
                            @error('firstname')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Lastname is required">
                            <input class="input100" type="text" name="lastname" placeholder="Lastname" value="{{ old('lastname') }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </span>

                            @error('lastname')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Birthdate is required">
                            <input class="input100" type="date" id="datepicker" name="birthdate" placeholder="Birthdate" value="{{ old('birthdate') }}">
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

                        <div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
                            <input class="input100" type="number"  name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            @error('phone_number')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                       {{--  <div class="mb-6">
                            <label for="profile_picture" class="input100">
                                Company Logo
                            </label>
                            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="profile_picture"/>
        
                            @error('profile_picture')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>   
                            @enderror
                        </div> --}}

                        {{-- <div class="form-control">
                            <select name="usertype">
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div> --}}
                        

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
    
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" id="password-field" type="password" name="password" placeholder="Password" value="{{ old('password') }}"/>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>

                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" id="password-confirmation" type="password" name="password_confirmation" placeholder="Password Confirmation" value="{{ old('password_confirmation') }}"/>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>

                            <span toggle="#password-confirmation" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Register
                            </button>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>


