<div>
    <!--  BEGIN CONTENT AREA  -->
    <div class="middle-content container-xxl p-0">
        <!-- BREADCRUMB -->
        <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"/>
        <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Add Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basic</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->
        {{-- <div class="row layout-top-spacing">   
            <div id="basic" class="col-lg-12 layout-spacing">
                <div class="row">
                    <div class="col-lg-4 col-12 ">
                        <div class="form-group">
                            <label for="t-text">Name <span style="color:red">*</span></label>
                            <input type="text" placeholder="Name..." class="form-control" wire:model="name">
                        </div>
                        @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 ">
                        <div class="form-group">
                            <label for="t-text">Email <span style="color:red">*</span></label>
                            <input type="email" placeholder="Email..." class="form-control" wire:model="email">
                        </div>
                        @error('email')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 ">
                        <div class="form-group">
                            <label for="t-text">Phone Number <span style="color:red">*</span></label>
                            <input type="number" placeholder="Phone Number..." class="form-control" id="phone" wire:model="phone">
                        </div>
                        @error('phone')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 col-12 ">
                        <div class="form-group">
                            <label for="t-text">User Name <span style="color:red">*</span></label>
                            <input type="text" placeholder="User Name..." class="form-control" wire:model="username">
                        </div>
                        @error('username')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 ">
                        <div class="form-group">
                            <label for="t-text">Password <span style="color:red">*</span></label>
                            <input type="password"  placeholder="Password..." class="form-control" wire:model="password">
                        </div>
                        @error('password')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 ">
                        <div class="form-group">
                            <label for="t-text">Profile Photo</label>
                            <input type="file"  class="form-control" wire:model="profile" accept=".jpg, .png">
                        </div>
                        @error('profile')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-12 ">
                        <div class="form-group">
                            <input type="submit" wire:click="submitadmin()" name="txt" class="mt-4 btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="row layout-top-spacing">
            <div id="basic" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Add Admin</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row" style="margin: 30px">
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Name <span style="color:red">*</span></label>
                                    <input type="text" placeholder="Name..." class="form-control" wire:model="name">
                                    @error('name')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Email <span style="color:red">*</span></label>
                                    <input type="email" placeholder="Email..." class="form-control" wire:model="email">
                                    @error('email')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Phone Number <span style="color:red">*</span></label>
                                    <input type="number" placeholder="Phone Number..." class="form-control" id="phone" wire:model="phone">
                                    @error('phone')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> 
                        </div>
                        <div class="row" style="margin: 30px">
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">User Name <span style="color:red">*</span></label>
                                    <input type="text" placeholder="User Name..." class="form-control" wire:model="username">
                                    @error('username')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Password <span style="color:red">*</span></label>
                                    <input type="password"  placeholder="Password..." class="form-control" wire:model="password">
                                    @error('password')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Profile Photo</label>
                                    <input type="file"  class="form-control" wire:model="profile" accept=".jpg, .png">
                                    @error('profile')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 30px">
                            <div class="col-lg-12 col-12 ">
                                <div class="form-group">
                                    <input type="submit" wire:click="submitadmin()" name="txt" class="mt-4 btn btn-primary">
                                </div>
                            </div>                                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
</div>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      separateDialCode: true,
      preferredCountries: ["in", "my"],
    });
    </script>