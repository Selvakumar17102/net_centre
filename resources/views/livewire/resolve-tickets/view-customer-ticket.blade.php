<div>
    <div class="middle-content container-xxl p-0">
        <div class="row invoice layout-top-spacing layout-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="doc-container">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="invoice-container">
                                <div class="invoice-inbox">
                                    <div id="ct" class="">
                                        <div class="invoice-00001">
                                            <div class="content-section">
                                                <div class="inv--head-section inv--detail-section">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-12 mr-auto">
                                                            <p class="inv-list-number"><span class="inv-title">Ticket ID : </span> <span class="inv-number">{{$fetchticket->ticket_id}}</span></p>
                                                        </div>
                                                        <div class="col-sm-6 text-sm-end">
                                                            <p class="inv-list-number"><span class="inv-title">Date Issue : </span> <span class="inv-number">{{date('d-m-Y',strtotime($fetchticket->created_at))}}</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inv--detail-section inv--customer-detail-section">
                                                    {{-- <div class="row">
                                                        <div class="col-xl-2 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                            <p class="inv-to">Company :</p>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                            <p>{{$fetchticket->company}}</p>
                                                        </div>
                                                    </div>
                                                    <hr> --}}
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                            <p class="inv-to">Subject :</p>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                            <p>{{$fetchticket->subject}}</p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                            <p class="inv-to">Description :</p>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                            <p>{{$fetchticket->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($fetchticket->ticket_status == 1)
                                                    <hr>
                                                    <div class="inv--detail-section inv--customer-detail-section">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                                <p class="inv-to">New Description </p>
                                                            </div>
                                                            <div class="col-xl-9 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                                <textarea class="form-control" id="" cols="10" rows="1" wire:model="newdescription"></textarea>
                                                                @error('newdescription')
                                                                    <span class="error text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row mt-4">
                                                            <div class="col-xl-3 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                                <p class="inv-to">New Attachment </p>
                                                            </div>
                                                            <div class="col-xl-9 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                                <input type="file" class="form-control" wire:model="newattachment">
                                                                @error('newattachment')
                                                                    <span class="error text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-xl-6 col-lg-7 col-md-6 col-sm-4 align-self-center"></div>
                                                            <div class="col-xl-6 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                                    <a href="javascript:window.history.back()" class="btn btn-light-dark btn-send">Cancel</a>
                                                                    <button wire:click="solved({{$fetchticket->id}})" class="btn btn-success btn-send">Resolve Issue</button>
                                                                    <button wire:click="update({{$fetchticket->id}})" class="btn btn-primary btn-send">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="row mb-3">
                                <div class="invoice-actions-btn">
                                    <b class="inv-to">Ticket Status </b><hr>
                                    <div class="col-12">
                                        @if($fetchticket->ticket_status == 0)
                                            <div class="alert alert-arrow-right alert-icon-right alert-light-success alert-dismissible fade show mb-4" role="alert">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                                <strong>Resolved</strong>
                                            </div>
                                        @else
                                            <div class="alert alert-arrow-right alert-icon-right alert-light-primary alert-dismissible fade show mb-4" role="alert">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                <strong>Open</strong>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="invoice-actions-btn">
                                    <div class="invoice-action-btn">
                                        <div class="row">
                                            <iframe src="{{asset($fetchticket->file)}}" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
