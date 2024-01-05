<div>
    <link href="{{asset('/src/assets/css/light/components/modal.css')}}" rel="stylesheet" type="text/css" />
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Full Name</th>
                            <th>Accound No</th>
                            <th>Service</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Status</th>
                            <th>View</th>
                            <th class="no-content">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($customerlist as $data)
                        @php
                            $service = \App\Models\Subject::where('id',$data->salutation)->first();
                            $pay = \App\Models\CompanyList::where('id',$data->company_name)->first();
                        @endphp
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{$data->name}}</td>
                                <td class="checkbox-column text-center"><a href="#"><span class="badge badge-light-success">{{$data->account_number}}</span></a></td>
                                <td>{{$service->subject}}</td>
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
                                        <p style="color: green">Paid</p>
                                    @else
                                        <p style="color:red">Follow up</p>    
                                    @endif
                                </td>
                                
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
                                                                    <h6 >Payment Method</h6>
                                                                    <p  class="modal-text ">{{$pay->company_name}}</p>
                                                                    <hr>
                                                                    <h6 >whatsapp Number</h6>
                                                                    <p  class="modal-text ">{{$data->whatsapp_number}}</p>
                                                                    <hr>
                                                                    <h6 >Address Line 1</h6>
                                                                    <p  class="modal-text ">{{$data->address_line_1}}</p>
                                                                    <hr>
                                                                    
                                                                </div>
                                                                <div class="col-lg-6 col-sm-6 col-12">
                                                                    
                                                                    <h6 >Service Amonut</h6>
                                                                    <p  class="modal-text ">₹ {{$data->address_line_2}}</p>
                                                                    <hr>
                                                                    <h6 >Profit Amount</h6>
                                                                    <p  class="modal-text ">₹ {{$data->address_line_3}}</p>
                                                                    <hr>
                                                                    <h6 >Total Amount</h6>
                                                                    <p  class="modal-text ">₹ {{$data->address_line_4}}</p>
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
