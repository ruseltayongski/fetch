<x-layout :user="$user">
    <section>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{ asset('images/img-01.png') }}" alt="IMG">
                    </div>
    
                    <form class="login100-form validate-form" method="POST" action="/users/{{ $user->id }}" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')
                        <span class="login100-form-title">
                            Update Profile
                        </span>
    
                        <div class="wrap-input100 validate-input" data-validate = "Firstname is required">
                            <input class="input100" type="text" name="firstname" placeholder="Firstname" 
                                value= "{{ $user->firstname }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </span>
                            @error('firstname')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Lastname is required">
                            <input class="input100" type="text" name="lastname" placeholder="Lastname" 
                            value="{{ $user->lastname }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </span>

                            @error('lastname')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Birthdate is required">
                            <input class="input100" type="date" id="datepicker" name="birthdate" placeholder="Birthdate" 
                            value="{{ $user->birthdate }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                            @error('birthdate')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Address is required">
                            <input class="input100" type="text"  name="address" placeholder="Address" 
                            value="{{ $user->address }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                            </span>
                            @error('address')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
                            <input class="input100" type="number"  name="phone_number" placeholder="Phone Number" 
                            value="{{ $user->phone_number }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            @error('phone_number')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email"
                             value="{{ $user->email }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
    
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" id="password-field" type="password" name="password" placeholder="Password" 
                            value="{{ $user->password }}"/>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation"
                             value="{{ $user->password_confirmation }}"/>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <span toggle="#password_confirmation" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- <section>
        @foreach ($user as $users)
            <table>
                <tr>
                    <td>{{ $user->firstname }} </td>
                </tr>
            </table>
        @endforeach
            
    </section> --}}
</x-layout>


