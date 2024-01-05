<div>
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"/>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <div class="p-0 middle-content container-xxl">
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Edit Customer</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="form-group layout-spacing">
        <div class="row">
            <div class="col-md-3">
                <label  class="form-label">Full name</label>
                <input type="text" class="form-control" placeholder="Full Name" wire:model='name' >
                @error('name')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <label class="form-label">Salutation<span style="color: red">*</label>
                <select id="inputState" class="form-select" wire:model='salutation'>
                    <option selected>Choose Salutation</option>
                    <option>Cik</option>
                    <option>Encik</option>
                </select>
                @error('salutation')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="">Email<span style="color: red">*</label>
                <input type="email" class="form-control"  placeholder="Email" wire:model='email' readonly>
                @error('email')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="">Company Name<span style="color: red">*</label>
                <input type="text" class="form-control"  placeholder="Company Name" wire:model='company_name' readonly>
                @error('company_name')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <label for="">Phone Number<span style="color: red">*</label>
                <input class="form-control" type="tel" placeholder="Phone Number" id="phone" wire:model='phone_number'>
                @error('phone_number')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="">WhatsApp Number</label>
                <input type="tel" class="form-control" id="whatapp" placeholder="WhatsApp Number" wire:model='whatsapp_number'>
            </div>
            <div class="col-md-3">
                <label for="">Position<span style="color: red">*</label>
                <input type="text" class="form-control"  placeholder="Position" wire:model='position' >
                @error('position')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Address Line 1</label>
                <input type="text" class="form-control"  placeholder="Address Line 1"wire:model='address_1'>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3">
                <label for="">Address Line 2</label>
                <input type="text" class="form-control"  placeholder="Address Line 2" wire:model='address_2'>
            </div>
            <div class="col-sm-3">
                <label for="">Address Line 3</label>
                <input type="text" class="form-control"  placeholder="Address Line 3" wire:model='address_3'>
            </div>
            <div class="col-sm-3">
                <label for="">Address Line 4</label>
                <input type="text" class="form-control"  placeholder="Address Line 4" wire:model='address_4'>
            </div>
            <div class="col-sm-3">
                <label for="">City<span style="color: red">*</label>
                <input type="text" class="form-control"  placeholder="City" wire:model='city'>
                @error('city')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-3">
                <label for="">State<span style="color: red">*</label>
                <input type="text" class="form-control"  placeholder="State" wire:model='state'>
                @error('state')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-sm-3">
                <label for="">Postcode<span style="color: red">*</label>
                <input type="text" class="form-control"  placeholder="Postcode" wire:model='postcode'>
                @error('postcode')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            @if (Auth::user()->login_type=="1")
            <div class="col-sm-3">
                <label for="">Admin<span style="color: red">*</label>
                <input type="text" class="form-control"  placeholder="State" wire:model='admin' readonly>
                @error('admin')
                    <span class="error text-danger">{{ $message }}</span>
                @enderror
            </div>
            @endif

        </div>
        <div class="mt-4 row ">
            <div class="col-lg-12">
                <button type="submit" wire:click ="editcustomer({{base64_decode($customer_id)}})"  class="btn btn-primary">Update</button>
                <a href="{{route('superadmin.listcustomer')}}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </div>

</div>
<script>
var input = document.querySelector("#phone");
window.intlTelInput(input, {
  separateDialCode: true,
  preferredCountries: ["in", "my"],
});
</script>
<script>
var input = document.querySelector("#whatapp");
window.intlTelInput(input, {
  separateDialCode: true,
  preferredCountries: ["in", "my"],
});
</script>

