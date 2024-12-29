<div>



    <div class="card">
        <div class="d-flex card-header justify-content-between align-items-center  py-1 mb-2 rounded border-bottom px-2">
            <h4>Create Permission</h4>
             <a href="{{ route('dashboard') }}" class="btn btn-info btn-sm">Back</a>
        </div>
        <div class="card-body">
            <form wire:submit='store'>
                 <label for="module_id" class="form-label form-label-sm">Sub Module</label>
                <select wire:model="module_id" class="form-control mb-3">
                    <option value="" selected>Sub Module</option>
                    @foreach ($moduleList as $module)
                        <option value="{{ $module->id }}">{{ $module->name }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="">Permission Name</label>
                    <input type="text" wire:model="name" class="form-control" />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-sm px-4">Save</button>
                </div>
            </form>
        </div>
    </div>



</div>
