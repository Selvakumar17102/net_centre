<div>
<!--  BEGIN CONTENT AREA  -->
        <div class="middle-content container-xxl p-0">
            <!-- BREADCRUMB -->
            <div class="row">
                <div class="col-md-10">
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Admin Table</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Basic</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="{{route("superadmin.addadmin")}}" class="mt-4 btn btn-primary">Add Admin</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- /BREADCRUMB -->
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-8">
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">S No</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th>Status</th>
                                    <th class="no-content text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($adminlist as $adminvalue)
                                <tr>
                                    <td class="text-center">{{ $loop->index+1 }}</td>
                                    <td class="text-center">
                                        <span><img src="{{asset($adminvalue->profile)}}" class="rounded-circle profile-img" alt="avatar" width="50" height="50"></span>
                                    </td>
                                    <td class="text-center">{{$adminvalue->name}}</td>
                                    <td class="text-center">{{$adminvalue->email}}</td>
                                    <td class="text-center">{{$adminvalue->phone}}</td>
                                    <td class="text-center">
                                        <div wire:ignore>
                                            <div class="form-check form-switch lider round form-check-primary form-check-inline">
                                                <input  class="form-check-input" type="checkbox" {{$adminvalue->status=='0' ? 'checked':''}}
                                                    wire:click="updateStatus($event.target.checked,'{{$adminvalue->email}}')" role="switch">
                                            </div>
                                        </div>
                                        @if ($adminvalue->status == 0)
                                            <p style="color: green">Active</p>
                                        @else
                                            <p style="color:red">Decative</p>    
                                        @endif
                                    </td>
                                    <td class="text-center"><a href="{{route('superadmin.editadmin',base64_encode($adminvalue->id))}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<!--  END CONTENT AREA  -->
</div>
 