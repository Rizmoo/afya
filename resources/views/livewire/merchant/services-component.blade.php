<div>
    <div class="row match-height">
        <!-- Company Table Card -->
        <div class="col-lg-12 col-12">
            <div class="card card-company-table">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <select class="form-control" wire:model="perPage">
                                <option>15</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </div>
                        <div class="col-md-8 d-flex  justify-content-end">
                            <input wire:model.debounce.300ms="search" type="text" class="ag-grid-filter form-control w-50 mr-1 mb-1 mb-sm-0" id="filter-text-box" placeholder="Search....">
                            <div class="btn-export">
                                <button  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary ag-grid-export-btn waves-effect waves-float waves-light">New Service</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>Service</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($items as $item)
                             <tr>
                                 <td>{{ $item -> service ->name }}</td>
                                 <td>{{ $item -> price }}</td>
                                 <td>
                                     <div class="custom-control custom-switch">
                                         <input wire:click="toggleActive({{ $item }})" @if($item ->active == true) checked @endif type="checkbox" class="custom-control-input" id="{{$item ->id}}">
                                         <label class="custom-control-label" for="{{$item ->id}}">
                                             <span class="switch-text-left">Yes</span>
                                             <span class="switch-text-right">No</span>
                                         </label>
                                     </div>
                                 </td>
                             </tr>
                            @empty
                                <tr>
                                    NO Services
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Company Table Card -->
    </div>

    {{--Modal--}}
    <div wire:ignore.self  class="modal modal-slide-in new-user-modal fade" id="exampleModal">
        <div class="modal-dialog">
            <form class="add-new-user modal-content pt-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-fullname">Service Type</label>
                        <select class="form-control" wire:model="service_id">
                            <option value="">Select</option>
                            @foreach($services as $service)
                                <option value="{{ $service ->id }}">{{ $service -> name }}</option>
                            @endforeach
                        </select>
                        @error('service_id') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-fullname">Price</label>
                        <input wire:model.defer="price" type="text" class="form-control" />
                        @error('price') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>



                    <div class="mt-3">
                        <button wire:click.prevent="save()"  class="btn btn-primary mr-1 data-submit waves-effect waves-float waves-light">Create</button>

                        <button type="reset" class="btn btn-outline-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
