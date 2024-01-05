<div>
    <div class="row">
        <div class="col-md-10">
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">User Ticket</a></li>
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

    {{-- Model --}}
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
                                <select class="form-select" wire:model="subject">
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
                <button  class="btn btn-primary" wire:click="Userticket()">Submit</button>
            </div>
          </div>
        </div>
    </div>
</div>
