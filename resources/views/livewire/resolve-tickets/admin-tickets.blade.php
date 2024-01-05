<div>
    <!-- BREADCRUMB -->
    <div class="row">
        <div class="col-md-10">
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin Ticket</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ticket</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- /BREADCRUMB -->
    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-3" class="table style-3 dt-table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column text-center">S No </th>
                                <th class="checkbox-column text-center">Ticket Id </th>
                                <th class="checkbox-column text-center">Admin Name </th>
                                <th class="checkbox-column text-center">Company</th>
                                <th class="checkbox-column text-center">Subject</th>
                                <th class="checkbox-column text-center">Attachment</th>
                                <th class="checkbox-column text-center">Created Date</th>
                                <th class="text-center">Status</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($adminticketlist as $item)
                                <tr>
                                    @php
                                      $admin_name = \App\Models\Admin::where('id',$item->admin_id)->first();
                                    @endphp
                                    <td class="checkbox-column text-center">{{ $loop->index+1 }}</td>
                                    <td class="checkbox-column text-center"><a href="{{route('adminalltickets',$item->id)}}"><span class="badge badge-light-success">{{$item->ticket_id}}</span></a></td>
                                    <td class="checkbox-column text-center">{{$admin_name->name}}</td>
                                    <td class="checkbox-column text-center">{{$item->company}}</td>
                                    <td class="checkbox-column text-center">{{$item->subject}}</td>
                                    <td class="checkbox-column text-center"><a href="{{asset($item->attachment)}}" target="_blank"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 0C16.7614 0 19 2.23858 19 5V17C19 20.866 15.866 24 12 24C8.13401 24 5 20.866 5 17V9H7V17C7 19.7614 9.23858 22 12 22C14.7614 22 17 19.7614 17 17V5C17 3.34315 15.6569 2 14 2C12.3431 2 11 3.34315 11 5V17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17V6H15V17C15 18.6569 13.6569 20 12 20C10.3431 20 9 18.6569 9 17V5C9 2.23858 11.2386 0 14 0Z" fill="currentColor" /></svg></a></td>
                                    <td class="checkbox-column text-center">{{date('d-m-Y',strtotime($item->created_at))}}</td>
                                    @if ($item->ticket_status == 1)
                                        <td class="text-center"><span class="shadow-none badge badge-primary">Open</span></td>
                                    @else
                                        <td class="text-center"><span class="shadow-none badge badge-success">Resolved</span></td>
                                    @endif
                                    @if ($item->ticket_status == 1)
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <a href="#" id="openBtn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                            </ul>
                                        </td>
                                    @else
                                        <td class="text-center">
                                            --
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
</div>