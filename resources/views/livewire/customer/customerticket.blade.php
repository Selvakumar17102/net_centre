<div>
    <!-- BREADCRUMB -->
    <div class="row">
        <div class="col-md-10">
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Customer Ticket</a></li>
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
    <div wire:ignore class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1" role="document" aria-labelledby="inputFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header" id="inputFormModalLabel">
                <h5 class="modal-title">New <b>Ticket</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Subject</label>
                            <div class="input-group mb-3">
                                <select class="form-select" wire:model="subject" required>
                                    <option selected>Select Subject</option>
                                    <option value="Contract DQ">Contract DQ</option>
                                    <option value="Daily Nomination">Daily Nomination</option>
                                    <option value="Reserved Capacity">Reserved Capacity</option>
                                    <option value="Bill and Surcharge">Bill and Surcharge</option>
                                    <option value="Other">Other</option>
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
                        <div class="form-group mb-4">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"  wire:model="description" required></textarea>
                        </div>
                    </div>
                    @error('description')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mb-4">
                            <label for="exampleFormControlFile1">Attachment</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" wire:model="attachumentfile">
                        </div>
                    </div>
                    @error('attachumentfile')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="modal-footer">
                <button  class="btn btn-light-danger" data-bs-dismiss="modal">Cancel</button>
                <button  class="btn btn-primary" wire:click="customerticket()">Submit</button>
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
                                <th class="checkbox-column text-center">Subject</th>
                                <th class="checkbox-column text-center">Description</th>
                                <th class="checkbox-column text-center">Created Date</th>
                                <th class="text-center">Status</th>
                                <th class="text-center dt-no-sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($custicketlist as $ticket)
                                <tr>
                                    <td class="checkbox-column text-center">{{ $loop->index+1 }}</td>
                                    <td class="checkbox-column text-center"><a href="{{route('customer.viewticket',$ticket->id)}}"><span class="badge badge-light-success">{{'#'.$ticket->ticket_id}}</span></a></td>
                                    <td class="checkbox-column text-center">{{$ticket->subject}}</td>
                                    <td class="checkbox-column text-center">{{$ticket->description}}</td>
                                    <td class="checkbox-column text-center">{{date('d-m-Y',strtotime($ticket->created_at))}}</td>
                                    @if ($ticket->ticket_status == 1)
                                        <td class="text-center"><span class="shadow-none badge badge-primary">Pending</span></td>
                                    @else
                                        <td class="text-center"><span class="shadow-none badge badge-success">Approved</span></td>
                                    @endif
                                    @if ($ticket->ticket_status == 1)
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