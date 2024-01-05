<div>
   <div class="page-meta">
       <nav class="breadcrumb-style-one" aria-label="breadcrumb">
           <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Suject</a></li>
               <li class="breadcrumb-item active" aria-current="page">Basic</li>
           </ol>
       </nav>
   </div>
   <!-- /BREADCRUMB -->
   
   @if($data)
       <div class="row layout-top-spacing">
           <div id="basic" class="col-lg-12 layout-spacing">
               <div class="statbox widget box box-shadow">
                   <div class="widget-header">
                       <div class="row">
                           <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                               <h4>Edit Subject</h4>
                           </div>                 
                       </div>
                   </div>
                   <div class="widget-content widget-content-area">
                       <div class="row" style="margin: 30px">
                           <div class="col-lg-6 col-12 ">
                               <div class="form-group">
                                   <label for="t-text">Subject</label>
                                   <input  placeholder="Subject..." class="form-control" wire:model="editsubject">
                                   @error('editsubject')
                                   <span class="error text-danger">{{ $message }}</span>
                                   @enderror
                               </div>
                           </div> 
                           <div class="col-lg-6 col-12 ">
                               <div class="form-group">
                                   <input wire:click.prevent="updatesubject()" type="submit" value="Update" class="mt-4 btn btn-primary">
                               </div>
                           </div>                                         
                       </div>
                   </div>
               </div>
           </div>
       </div>
   @else
       <div class="row layout-top-spacing">
           <div id="basic" class="col-lg-12 layout-spacing">
               <div class="statbox widget box box-shadow">
                   <div class="widget-header">
                       <div class="row">
                           <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                               <h4>Add Subject</h4>
                           </div>                 
                       </div>
                   </div>
                   <div class="widget-content widget-content-area">
                       <div class="row" style="margin: 30px">
                           <div class="col-lg-6 col-12 ">
                               <div class="form-group">
                                   <label for="t-text">Subject</label>
                                   <input  placeholder="Subject..." class="form-control" wire:model="addsubject">
                                   @error('addsubject')
                                   <span class="error text-danger">{{ $message }}</span>
                                   @enderror
                               </div>
                           </div> 
                           <div class="col-lg-6 col-12 ">
                               <div class="form-group">
                                   <input wire:click="submitsubject()" type="submit" value="Submit" class="mt-4 btn btn-primary">
                               </div>
                           </div>                                         
                       </div>
                   </div>
               </div>
           </div>
       </div>
   @endif

   <div class="row layout-top-spacing">
       <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
           <div class="widget-content widget-content-area br-8">
               <table id="zero-config" class="table dt-table-hover" style="width:100%">
                   <thead>
                       <tr>
                           <th class="text-center">S No</th>
                           <th class="text-center">Suject</th>
                           <th class="no-content text-center">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach($subjectlist as $item)
                       <tr>
                           <td class="text-center">{{ $loop->index+1 }}</td>
                           <td class="text-center">{{$item->subject}}</td>
                           <td class="text-center"><a href="{{route('superadmin.editsubject',$item->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>
</div>
