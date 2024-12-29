<div>
    <div class="right-dashbaord">
        @can('authorize', \App\Helpers\AppConstants::VIEW_MY_ALERTS)
            <livewire:dashboard.dashboard.right-sidebar.birthdays-today />
        @endcan
        <div class="card border-top border-info my-task">
            <div class="d-flex card-header justify-content-between align-items-center ">
                <h5 class="m-0">Waiting for your Actions</h5>
            </div>
            <div class="p-1 card-body">
                <div class="mt-1">
                    <div class="">
                        <livewire:common.notifications :limit="true" :approval="true" />
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card border-top border-info my-task">
            <div class="py-2 d-flex card-header justify-content-between align-items-center">
                <h4 class="header-title">My Tasks</h4>
                <a href="#" class="me-2"><i class="mdi mdi-plus-circle-outline"></i> Tasks </a>
            </div>
            <div class="pt-1 card-body">
                <div class="my-tasks">
                    <div class="list-group list-group-flush">
                        <a href="#" class="py-1 list-group-item" aria-disabled="true">
                            <i class=" mdi mdi-dots-horizontal"></i> Mobile App + link page Update</a>
                        <a href="#" class="py-1 list-group-item" aria-disabled="true">
                            <i class=" mdi mdi-dots-horizontal"></i>Mobile App + link page Update</a>
                        <a href="#" class="py-1 list-group-item" aria-disabled="true">
                            <i class=" mdi mdi-dots-horizontal"></i> Mobile App + link page Update</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="card border-top border-info attendances">
            <div class="py-2 d-flex card-header justify-content-between align-items-center">
                <h4 class="header-title">Attendance</h4>
                <div class="d-flex align-items-center me-2"><i class="ri-check-line fs-4"></i> Attendance
                    Approvals
                </div>
            </div>
            <div class="pt-1 card-body text-dark ">
                <div class="right-sidebar-attendence">
                    <livewire:dashboard.attendance.employee-attendance />
                </div>
            </div>
        </div>
        <div class="card border-top border-info Leave-summary">
            <div class="py-2 d-flex card-header justify-content-between align-items-center">
                <h4 class="header-title">Leaves Summary</h4>
                <i class="mdi mdi-plus-circle-outline"
                    wire:click="$dispatchTo('timesheet.leave.apply-leave-modal', 'showLeavesModal',{ id: 0 })">Apply for
                    Leave</i>
            </div>
            <div class="p-1 card-body ">
                <div class="pb-2 overflow-auto w-100">
                    <livewire:timesheet.leave.leave-template :user_id="auth()->user()->id"
                        wire:key="leave-template-{{ now() }}" />
                </div>
            </div>
        </div>
        <div>

            <livewire:dashboard.dashboard.right-sidebar.add-suggestions />
            <livewire:dashboard.dashboard.right-sidebar.policies />
        </div>
        <div class="card border-top border-info birth-calender">
            <div class="pt-1 card-body">
                <livewire:dashboard.dashboard.right-sidebar.mini-calendar lazy />
            </div>
        </div>
    </div>
    <livewire:timesheet.leave.apply-leave-modal wire:key="apply-leave-modal-{{ now() }}" />
</div>
