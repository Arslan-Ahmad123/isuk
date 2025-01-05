<div>
    <style>
        .container {
            width: 100%;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            color: #2c2752;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .btn-primary {
            background-color: #2c2752;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: #1a1a2e;
        }

        .text-danger {
            color: #dc3545;
        }
    </style>
    <div class="container my-3">
        <h2 class="text-center mb-4">Header and Footer Content Form</h2>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form wire:submit="submit">
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" class="form-control" id="logo" wire:model="logo">
                @error('logo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                @if (isset($oldLogo))
                    <div class="bg-dark">
                        <img src="{{ $oldLogo }}" alt="logo" class="img-fluid mt-2" style="max-width: 100px;">
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="firstPara" class="form-label">Footer First Para</label>
                <textarea class="form-control" id="firstPara" rows="3" wire:model="firstPara"></textarea>
                @error('firstPara')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="secondPara" class="form-label">Footer Second Para</label>
                <textarea class="form-control" id="secondPara" rows="3" wire:model="secondPara"></textarea>
                @error('secondPara')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="footerNumber" class="form-label">Footer Number</label>
                <input type="number" class="form-control" id="footerNumber" wire:model="footerNumber">
                @error('footerNumber')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="footerEmail" class="form-label">Footer Email</label>
                <input type="email" class="form-control" id="footerEmail" wire:model="footerEmail">
                @error('footerEmail')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
