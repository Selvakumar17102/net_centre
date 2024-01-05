<div>
    <link href="{{asset('/src/assets/css/light/components/modal.css')}}" rel="stylesheet" type="text/css" />
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
        <div class="col-md-2">
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <button type="button" class="btn btn-primary mb-2 me-4" data-bs-toggle="modal" data-bs-target="#inputFormModal">Create Ticket</button>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1" role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" id="inputFormModalLabel">
                <h5 class="modal-title">Create <b>Ticket</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Company Name</label>
                            <div class="input-group mb-3">
                                <select class="form-control form-control-sm" wire:model="company">
                                    <option value="">Select Company</option>
                                    @foreach ($companylist as $item)
                                        <option value="{{$item->company_name}}">{{$item->company_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    @error('company')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Subject</label>
                            <div class="input-group mb-3">
                                <select class="form-control form-control-sm" wire:model="subject">
                                    <option value="">Select Subject</option>
                                    @foreach ($subjectlist as $item)
                                        <option value="{{$item->subject}}">{{$item->subject}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    @error('subject')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Attachment</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control form-control-sm" wire:model="attachment">
                            </div>
                        </div>
                    </div>
                    @error('attachment')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Description</label>
                            <div class="input-group mb-3">
                                <textarea class="form-control form-control-sm" cols="5" rows="2" wire:model="description"></textarea>
                            </div>
                        </div>
                    </div>
                    @error('description')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button  class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                <button  class="btn btn-primary mt-2 mb-2 btn-no-effect" wire:click="ticketsubmit()">Submit</button>
            </div>
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
                                    <td class="checkbox-column text-center">{{ $loop->index+1 }}</td>
                                    <td class="checkbox-column text-center"><a href="{{route('admin.viewticket',$item->id)}}"><span class="badge badge-light-success">{{$item->ticket_id}}</span></a></td>
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