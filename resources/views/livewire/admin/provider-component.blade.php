<div>
    <div class="row" id="table-hover-animation">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Providers </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <select class="form-control">
                                <option>15</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </div>
                        <div class="col-md-8 d-flex  justify-content-end">
                            <input wire:model.debounce.300ms="search" type="text"
                                   class="ag-grid-filter form-control w-50 mr-1 mb-1 mb-sm-0" id="filter-text-box"
                                   placeholder="Search....">
                            <div class="btn-export">
{{--                                <button data-toggle="modal" data-target="#exampleModal"--}}
{{--                                        class="btn btn-primary ag-grid-export-btn waves-effect waves-float waves-light">--}}
{{--                                    New Provider--}}
{{--                                </button>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $item -> name }}</td>
                                <td>{{ $item -> description }}</td>
                                <td>{{ $item -> type -> name }}</td>
                                <td>
                                    <div class="d-flex align-items-center col-actions">

                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-icon px-0 " data-toggle="dropdown">
                                                <i data-feather='more-vertical'></i> Actions
                                            </button>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="{{ route('provider.show', $item) }}" class="dropdown-item" >
                                                    <i data-feather="eye" class="mr-50"></i>
                                                    View</a>
                                                <a href="javascript:void(0);" class="dropdown-item"  data-toggle="modal"
                                                   data-target="#exampleModal" wire:click="edit({{ $item }})">
                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                    Edit</a>
                                                <a href="javascript:void(0);" class="dropdown-item" wire:click="setActive({{ $item }})" onclick="del()">
                                                    <i data-feather="trash" class="mr-50"></i>
                                                    Delete</a>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{--Modal--}}

    <div wire:ignore.self class="modal modal-slide-in new-user-modal fade" id="exampleModal">
        <div class="modal-dialog">
            <form class="add-new-user modal-content pt-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title" id="exampleModalLabel">Provider</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-fullname">Name</label>
                        <input wire:model.defer="name" type="text" class="form-control"/>
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-fullname">Phone</label>
                        <input wire:model.defer="phone" type="text" class="form-control"/>
                        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-fullname">Email</label>
                        <input wire:model.defer="email" type="email" class="form-control"/>
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-fullname">Type</label>

                        <select wire:model.defer="cat" class="form-control">
                            <option  value="">Select type</option>
                            @foreach($types as $k)
                                <option value="{{ $k->id }}">{{ $k -> name }}</option>
                            @endforeach
                        </select>
                        @error('cat') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-fullname">Locations</label>
                        <input wire:model.defer="locations" type="text" class="form-control"/>
                        @error('location') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-uname">Description</label>
                        <textarea wire:model.defer="description" type="text" class="form-control"></textarea>
                        @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <div class="border rounded p-2">
                            <h4 class="mb-1"> Image</h4>
                            <div class="media flex-column">
                                @if($logo != null)
                                    <img src="{{ $logo -> temporaryUrl()}}" id="blog-feature-image"
                                         class="rounded mr-2 mb-1 mb-md-0" width="170" height="110"
                                         alt="Blog Featured Image">
                                @endif
                                <div class="media-body">
                                    <small class="text-muted">Required image resolution 800x400, image size 2mb.</small>
                                    <div class="d-inline-block">
                                        <div class="form-group mb-0">
                                            <div class="custom-file">
                                                <input wire:model="logo" type="file" class="custom-file-input"
                                                       id="blogCustomFile" accept="image/*">
                                                <label class="custom-file-label" for="blogCustomFile">Choose
                                                    Image</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="mt-3">
                        <button wire:click.prevent="save()"
                                class="btn btn-primary mr-1 data-submit waves-effect waves-float waves-light">Save
                        </button>
                        <button type="reset" class="btn btn-outline-secondary waves-effect" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
