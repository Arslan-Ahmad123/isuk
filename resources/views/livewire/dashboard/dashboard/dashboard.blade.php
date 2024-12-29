<div>
    @pushOnce('below_css')
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
        <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    @endpushOnce
    <div class="card">
        <div class="px-3 py-2 user-dashboard rounded-3">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 cl-xs-12">
                    <div class="text-white user-profile d-flex align-items-center">
                        <div class="imgs">
                            <img src="{{ auth()->user()?->profile_photo_url }}" alt="user" class="rounded-circle"
                                alt="..." width="120" height="120">
                        </div>
                        <div class="user-detail ms-3">
                            <h2 class="text-white"> {{ auth()->user()?->full_name ?? '' }}</h2>
                            <div class="p-0">


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
