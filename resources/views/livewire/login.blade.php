<div>
    <div class="row justify-content-center">
        <div class="col-xxl-4 col-lg-5">
            <div class="card">

                <!-- Logo -->
                <div class="py-3 text-center card-header bg-dark">
                    <a href="{{ route('login') }}">
                    <span><img src="{{ asset('assets/images/logo (2).png') }}" alt="logo" height="50"></span>
                    </a>
                </div>

                <div class="p-4 card-body">

                    <div class="m-auto text-center w-75">
                        <h4 class="pb-0 text-center text-dark-50 fw-bold">Sign In</h4>
                        <p class="mb-4 text-muted">Enter your Email and password to access Dashboard</p>
                    </div>

                    <form wire:submit="login">

                        <div class="mb-3">
                            <label for="rcl_number" class="form-label">Email</label>
                            <input class="form-control" type="text" id="rcl_number" required=""
                                placeholder="e.g. admin@admin.com" wire:model.defer="email">
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control"
                                    placeholder="Enter your password" wire:model.defer="password">
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                            </div>
                        </div>

                        @error('invalid-credentials')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <div class="mb-0 mb-3 text-center">
                            <button class="btn btn-dark w-100" type="submit"> Log In</button>
                        </div>

                    </form>
                </div> <!-- end card-body -->
            </div>
            <!-- end card -->



        </div>
    </div>

</div>
