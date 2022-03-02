<div>
    <div class="jb-apply-form bg-white rounded py-3 px-4 box-static">
        <h4 class="ft-medium fs-md mb-3">Make Appointment</h4>

        <form class="_apply_form_form">

            <div class="form-group">
                <label class="text-dark mb-1 ft-medium medium"> Name</label>
                <input wire:model="name" type="text" class="form-control" placeholder=" Name">
                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label class="text-dark mb-1 ft-medium medium">Your Email</label>
                <input  wire:model="email" type="email" class="form-control" placeholder="">
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label class="text-dark mb-1 ft-medium medium">Phone Number:</label>
                <input  wire:model="phone" type="text" class="form-control" placeholder="+254 245 256 258">
            </div>
            <div class="form-group">
                <label class="text-dark mb-1 ft-medium medium">Date and Time:</label>
                <input  wire:model="time" type="datetime-local" class="form-control" >
                @error('time') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>

{{--            <div class="form-group">--}}
{{--                <label class="text-dark mb-1 ft-medium medium">Upload Resume:<font>pdf, doc, docx</font></label>--}}
{{--                <div class="custom-file">--}}
{{--                    <input type="file" class="custom-file-input" id="customFile">--}}
{{--                    <label class="custom-file-label" for="customFile">Choose file</label>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="form-group">
                <div class="terms_con">
                    <input id="aa3" class="checkbox-custom" name="Coffee" type="checkbox" checked disabled>
                    <label for="aa3" class="checkbox-custom-label">I agree to pirvacy policy</label>

                </div>
            </div>

            <div class="form-group">
                <button wire:click="book()" type="button" class="btn btn-md rounded theme-bg text-light ft-medium fs-sm full-width">Book Appointment</button>
            </div>

        </form>
    </div>
</div>
