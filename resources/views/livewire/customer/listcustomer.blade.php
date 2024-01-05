<div>
    <link href="{{asset('/src/assets/css/light/components/modal.css')}}" rel="stylesheet" type="text/css" />
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Login</th>
                            <th>Full Name</th>
                            <th>Accound No</th>
                            <th>Salutation</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Status</th>
                            @if (Auth::user()->login_type=="1")
                                <th class="text-center">Admin</th>
                            @endif
                            <th>View</th>
                            <th class="no-content">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($customerlist as $data)
                        @php
                            $admin_name = \App\Models\Admin::where('id',$data->admin_id)->first();
                        @endphp
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>
                                    <button class="btn add-tsk btn-primary" wire:click="sendId({{$data->id}})"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg></button>
                                </td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->account_number}}</td>
                                <td>{{$data->salutation}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone_number}}</td>
                                <td class="text-center">
                                    <div wire:ignore>
                                        <div class="form-check form-switch lider round form-check-primary form-check-inline">
                                            <input  class="form-check-input" type="checkbox" {{$data->status=='0' ? 'checked':''}}
                                                wire:click="updateStatus($event.target.checked,'{{$data->email}}')" role="switch">
                                        </div>
                                    </div>
                                    @if ($data->status == 0)
                                        <p style="color: green">Active</p>
                                    @else
                                        <p style="color:red">Decative</p>    
                                    @endif
                                </td>
                                @if (Auth::user()->login_type=="1")
                                <td>{{$admin_name->name}}</td>
                                @endif
                                <td>
                                    <a class="btn add-tsk btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal{{ $loop->index+1 }}">View</a>
                                    <div class="modal fade" id="addTaskModal{{ $loop->index+1 }}" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title add-title" id="addTaskModalTitleLabel1" >Customer Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="compose-box">
                                                        <div class="compose-content" id="addTaskModalTitle">
                                                            <div class="row">
        
                                                                <div class="col-lg-6 col-sm-6 col-12">
                                                                    <h6 >Position</h6>
                                                                    <p  class="modal-text ">{{$data->position}}</p>
                                                                    <hr>
                                                                    <h6 >Company Name</h6>
                                                                    <p  class="modal-text ">{{$data->company_name}}</p>
                                                                    <hr>
                                                                    <h6 >whatsapp Number</h6>
                                                                    <p  class="modal-text ">{{$data->whatsapp_number}}</p>
                                                                    <hr>
                                                                    <h6 >City</h6>
                                                                    <p  class="modal-text ">{{$data->city}}</p>
                                                                    <hr>
                                                                    <h6 >State</h6>
                                                                    <p class="modal-text ">{{$data->state}}</p>
                                                                    <hr>
                                                                    <h6 >Postcode</h6>
                                                                    <p  class="modal-text ">{{$data->post_code}}</p>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-6 col-12">
                                                                    
                                                                    <h6 >Address Line 1</h6>
                                                                    <p  class="modal-text ">{{$data->address_line_1}}</p>
                                                                    <hr>
                                                                    <h6 >Address Line 2</h6>
                                                                    <p  class="modal-text ">{{$data->address_line_2}}</p>
                                                                    <hr>
                                                                    <h6 >Address Line 3</h6>
                                                                    <p  class="modal-text ">{{$data->address_line_3}}</p>
                                                                    <hr>
                                                                    <h6 >Address Line 4</h6>
                                                                    <p  class="modal-text ">{{$data->address_line_4}}</p>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>   
                                @if (Auth::user()->login_type=="1")
                                    <td>
                                        <a href="{{route('superadmin.editcustomer',base64_encode($data->id))}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                    </td>
                                @else
                                    <td>
                                        <a href="{{route('admin.editcustomer',base64_encode($data->id))}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
