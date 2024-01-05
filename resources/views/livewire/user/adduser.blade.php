<div>
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css"/>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <div class="p-0 middle-content container-xxl">
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Add User</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="form-group layout-spacing">
    <div class="row">
        <div class="col-md-4">
            <label  class="form-label">Full name</label>
            <input type="text" class="form-control" placeholder="Full Name" wire:model='name' required>
            @error('name')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
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
        <div class="col-md-4">
            <label for="">Email<span style="color: red">*</label>
            <input type="email" class="form-control"  placeholder="Email" wire:model='email'>
            @error('email')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <label for="">User Name<span style="color: red">*</label>
            <input type="text" class="form-control"  placeholder="Username" wire:model='user_name' >
            @error('user_name')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="">Phone Number<span style="color: red">*</label>
            <input class="form-control" type="tel" placeholder="Phone Number"  wire:model='phone_number'>
            @error('phone_number')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="">WhatsApp Number</label>
            <input type="tel" class="form-control"  placeholder="WhatsApp Number" wire:model='whatsapp_number'>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <label for="">Position<span style="color: red">*</label>
            <input type="text" class="form-control"  placeholder="Position" wire:model='position' >
            @error('position')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="">Password<span style="color: red">*</label>
            <input type="password" class="form-control"  placeholder="Password" wire:model='password' >
            @error('password')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="">Confirm Password<span style="color: red">*</label>
            <input type="password" class="form-control"  placeholder="Confirm password" wire:model='confirm_password' >
            @error('confirm_password')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mt-4 row ">
        <div class="col-lg-12">
            <button type="submit" wire:click ="Adduser()"  class="btn btn-primary">Submit</button>
            <a href="#" class="btn btn-danger">Cancel</a>
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

