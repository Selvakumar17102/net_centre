<div>
    <!--  BEGIN CONTENT AREA  -->
    <div class="middle-content container-xxl p-0">
        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Edit Admin</a></li>
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
                                    <label for="t-text">Name</label>
                                    <input type="text" placeholder="Name..." class="form-control" wire:model="name">
                                </div>
                                @error('name')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Email </label>
                                    <input type="email" placeholder="Email..." class="form-control" wire:model="email" readonly>
                                </div>
                                @error('email')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Phone Number </label>
                                    <input type="number" placeholder="Phone Number..." class="form-control"  wire:model="phone">
                                </div>
                                @error('phone')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-3 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">User Name </label>
                                    <input type="text" placeholder="User Name..." class="form-control" wire:model="username">
                                </div>
                                @error('username')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-3 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Password </label>
                                    <input type="password"  placeholder="Password..." class="form-control" wire:model="password">
                                </div>
                                @error('password')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-3 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Profile Photo</label>
                                    <input type="file"  class="form-control" wire:model="profile" accept=".jpg, .png">
                                </div>
                                @error('profile')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-3 col-12 ">
                                <label for="t-text">Current Image</label>
                                <div class="form-group">
                                    <img src="{{asset($profile)}}"   width="50" height="50">
                                </div>
                            </div>
                            <div class="col-lg-3 col-12 ">
                                <input type="submit" wire:click="editadmin()" name="txt" class="mt-4 btn btn-primary">
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
                                <h4>Edit Admin</h4>
                            </div>                 
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row" style="margin: 30px">
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Name</label>
                                    <input type="text" placeholder="Name..." class="form-control" wire:model="name">
                                    @error('name')
                                    <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Email </label>
                                    <input type="email" placeholder="Email..." class="form-control" wire:model="email" readonly>
                                    @error('email')
                                    <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Phone Number </label>
                                    <input type="number" placeholder="Phone Number..." class="form-control"  wire:model="phone">
                                    @error('phone')
                                    <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> 
                        </div>
                        <div class="row" style="margin: 30px">
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">User Name </label>
                                    <input type="text" placeholder="User Name..." class="form-control" wire:model="username">
                                    @error('username')
                                    <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-lg-3 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Password </label>
                                    <input type="password"  placeholder="Password..." class="form-control" wire:model="password">
                                    @error('password')
                                    <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-lg-4 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Profile Photo</label>
                                    <input type="file"  class="form-control" wire:model="profile" accept=".jpg, .png">
                                    @error('profile')
                                    <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-12 ">
                                <div class="form-group">
                                    <label for="t-text">Current Image</label>
                                        <img src="{{asset($profiles)}}"   width="50" height="50">
                                    @error('profile')
                                    <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin: 30px">
                            <div class="col-lg-12 col-12 ">
                                <div class="form-group">
                                    <input type="submit" wire:click="editadmin({{base64_decode($ids)}})" name="txt" class="mt-4 btn btn-primary">
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