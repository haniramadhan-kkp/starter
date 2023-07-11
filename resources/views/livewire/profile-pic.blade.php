<div>
    <form wire:submit.prevent="storePic" class="pb-10">
        <!-- Profile picture card-->
        <div class="card mb-xl-0 mb-4">
            <div class="card-header">Profile Picture</div>
            <div class="card-body text-center">
                @if ($image && method_exists($image, 'temporaryUrl'))
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="{{ $image->temporaryUrl() }}"
                        alt="" />
                @elseif($image)
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="{{ $image }}" alt="" />
                @endif

                <!-- Profile picture help block-->
                <div class="small font-italic text-muted mb-4">
                    JPG or PNG no larger than 1 MB
                </div>

                <div wire:ignore x-data x-init="() => {
                    FilePond.setOptions({
                        server: {
                            process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                @this.upload('image', file, load, error, progress)
                            },
                            revert: (filename, load) => {
                                @this.removeUpload('image', filename, load)
                            }
                        },
                        allowImagePreview: true,
                        imagePreviewMaxHeight: 256,
                        allowFileTypeValidation: true
                    });
                    FilePond.registerPlugin(FilePondPluginFileValidateType);
                    FilePond.create($refs.input, {
                        acceptedFileTypes: ['image/jpeg', 'image/jpg', 'image/gif', 'image/png']
                    });
                }">
                    <input type="file" x-ref="input">
                </div>
                @error('image')
                    <span style="width: 100%;margin-top: 0.25rem;font-size: 80%;color: #dc3545;" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <!-- Profile picture upload button-->
                <button class="btn btn-primary" type="submit">
                    Simpan
                </button>
            </div>
        </div>
    </form>
</div>
