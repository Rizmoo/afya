<div>
    <div class="blog-edit-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="avatar mr-75">
                                <img src="{{ Auth::user()->profile_photo_url }}" width="38" height="38" alt="Avatar" />
                            </div>
                            <div class="media-body">
                                <h6 class="mb-25">{{ Auth::user()->name }}</h6>
                                <p class="card-text">{{ date('M d, Y') }}</p>
                            </div>
                        </div>
                        <!-- Form -->
                        <form action="javascript:;" class="mt-2">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-title">Title</label>
                                        <input wire:model="title" type="text" id="blog-edit-title" class="form-control" value="The Best Features Coming to iOS and Web design" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-status">Status</label>
                                        <select class="form-control" id="blog-edit-status">
                                            <option value="Published">Published</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Draft">Draft</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label>Content</label>
                                        <div id="blog-editor-wrapper">
                                            <div class="form-group row">
                                                <div class="col-sm-11" wire:ignore>
                                                    <textarea rows="10" id="message" class="ckeditor form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" wire:model="message" autocomplete="off">{{ $message }}</textarea>
                                                    @if ($errors->has('message'))
                                                        <span class="invalid-feedback" role="alert" ><strong>{{ $errors->first('message') }}</strong></span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">Featured Image</h4>
                                        <div class="media flex-column flex-md-row">
                                            @if($image)
                                            <img src="{{ $image -> temporaryUrl()}}" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                            @endif
                                            <div class="media-body">
                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>

                                                <div class="d-inline-block">
                                                    <div class="form-group mb-0">
                                                        <div class="custom-file">
                                                            <input wire:model="image" type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" />
                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-50">
                                    <button wire:click="save()" type="submit" id="submit" class="btn btn-primary mr-1">Save Changes</button>
                                </div>
                            </div>
                        </form>
                        <!--/ Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script type="text/javascript">
        CKEDITOR.replace('wysiwyg-editor', {
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script>
        const editor = CKEDITOR.replace('message');

        CKEDITOR.instances.message.on('change', function() {
            @this.set('message', this.getData());
        });

    </script>
@endpush
