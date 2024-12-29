<div>
    <div class="card border-top  border-info Suggestions">
        <div class="card-header text-center  py-2">
            <h4 class="header-title">Suggestions</h4>
        </div>
        <div class="card-body pt-1">

            <form wire:submit="submitSuggestion" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label form-label-sm">Title</label> <span
                        class="text-danger">*</span>
                    <input class="form-control form-control-sm" id="title" type="text" name="title"
                        wire:model="title" placeholder="Suggestion Title">
                    @error('title')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="example-textarea" class="form-label">Description <span
                        class="text-danger">*</span></label>
                    <textarea class="form-control" id="example-textarea" wire:model="description" rows="5" placeholder="Suggestion Discription"></textarea>
                     @error('description')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-auto text-center">
                    <button type="submit" class="btn btn-primary mb-2 w-100">
                        Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
