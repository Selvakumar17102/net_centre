<div>                
    <style>
        hr.new3 {
            border-top: 1px dashed;
        }
        .badge {
        background-color: #E6EAEE;
        color:rgb(5, 5, 5);
        padding: 4px 8px;
        text-align: center;
        border-radius: 10px;
        }
        .btn-color{
            background-color: #e99b0c;

        }
    </style>
    <div class="row layout-top-spacing">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
            <div class="widget-content widget-content-area br-8">
                <div class="production-descriptions simple-pills">
                    <div class="pro-des-content">
                        <div class="row">
                            {{-- @foreach($fetchticket as $ticket) --}}
                                <div class="row">
                                    <div class="col-sm-6 col-12 mr-auto">
                                        <p class=" inv-list-number"> <b class="inv-title">Ticket ID {{$fetchticket->ticket_id}} </b> </p>
                                    </div>
                                    <div class="col-sm-6 text-sm-end">
                                        <p class="inv-list-number"><span class="inv-title">Date Issue : </span> <span class="inv-number">{{date('d-m-Y',strtotime($fetchticket->created_at))}}</span></p>
                                    </div>
                                </div>
                                <hr class="new3">
                                <div class="row">
                                    <div class="col-sm-6 col-12 mr-auto">
                                        <h5 class="text-warning">{{$fetchticket->subject}}</h5>
                                    </div>
                                    <div class="col-sm-6 text-sm-end">
                                        @if ($fetchticket->ticket_status == 1)
                                            <div class="" >
                                                <button class="btn" style="background: #00CFDD !important">Open</button>
                                            </div>
                                        @else
                                        <div class="task-action" >
                                            <button class="btn btn-success">Resolved</button>
                                        </div>
                                        @endif
                                    </div>
                                </div><br><br>
                                <hr class="new3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <b>Description</b>
                                        <p>{{$fetchticket->description}}</p>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <span class="badge">Comment</span>
                                    </div>
                                    <div class="col-sm-12 mt-4">
                                        <strong>You</strong>
                                        <p>Attachment </p>
                                        <a class="btn btn-secondary" href="{{asset($fetchticket->file)}}" target="_blank" >View file</a>
                                    </div>
                                </div>
                                <hr class="new3 mt-3">
                                @if ($fetchticket->ticket_status == 1)
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label for="">New Comment</label>
                                            <textarea class="form-control" id="" cols="10" rows="5" placeholder="Type Comment here..." wire:model="description"></textarea>
                                        </div>
                                    </div>
                                    <hr class="new3 mt-3">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label for=""> Attachment File</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" wire:model="attachumentfile">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 mt-4 mt-25">
                                            <button  class="btn btn-color" wire:click="Submitnewcmd({{$fetchticket->id}})">Submit you Comment</button>
                                            <button  class="btn btn-success" wire:click="Resolveissue({{$fetchticket->id}})">Resloved Issue</button>
                                            <a href="{{route('customer.ticket')}}" class="btn btn-light-danger" >Back</a>
                                        </div>
                                    </div>
                                @endif
                            {{-- @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endforeach --}}

</div>
