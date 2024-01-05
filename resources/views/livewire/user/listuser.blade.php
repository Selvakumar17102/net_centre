<div>
    <style>
        .slider.round:before {
  border-radius: 50%;
}
    </style>
    <link href="{{asset('/src/assets/css/light/components/modal.css')}}" rel="stylesheet" type="text/css" />


    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-8">
                <table id="zero-config" class="table dt-table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Full Name</th>
                            <th>Salutation</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Phone No</th>
                            <th>Whatapp No</th>
                            <th>Position</th>
                            <th>User Name</th>
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
                                <td>{{$data->name}}</td>
                                <td>{{$data->salutation}}</td>
                                <td>{{$data->email}}</td>
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
                                <td>{{$data->phone_number}}</td>
                                <td>{{$data->whatsapp_number}}</td>
                                <td>{{$data->position}}</td>
                                <td>{{$data->user_name}}</td>
                                <td>
                                    <a href="{{route('customer.edituser',base64_encode($data->id))}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
