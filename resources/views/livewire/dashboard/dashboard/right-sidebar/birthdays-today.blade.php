 <div class="card border-top border-success my-alert">
     <div class="py-2 d-flex card-header justify-content-between align-items-center">
         <h4 class="header-title">My Alerts</h4>
     </div>
     <div class="py-1 card-body">
         <div class="birthday" data-simplebar style="max-height: 250px;">
             <h5>Birthdays Today</h5>
             <div class="list-group list-group-flush">
                 @forelse ($birthdayUsers as $user)
                     <a href="#" class="py-1 list-group-item " aria-disabled="true">
                         <img class="me-1 rounded-circle" src="{{ asset($user->profile_photo_url) }}" alt="user"
                             width="20" height="20">
                         {{ $user?->full_name }}
                         @can('authorize', \App\Helpers\AppConstants::POST_WISH)
                             <i class="ri-cake-2-line float-end text-primary"
                                 wire:click="$dispatchTo('dashboard.dashboard.modals.birthday-wish-modal', 'showModalEvent',{ employee_id: {{ $user->id }}, type:'birthday' })"></i>
                         @endcan
                     </a>
                 @empty
                     <div class="py-1 list-group-item" aria-disabled="true">
                         No birthdays today.
                     </div>
                 @endforelse
             </div>
         </div>
         <div class="birthday" data-simplebar style="max-height: 250px;">
             <h5>Anniversary Today</h5>
             <div class="list-group list-group-flush">
                 @forelse ($anniversaryUsers as $user)
                         <a href="javascript:void(0);" class="py-1 list-group-item" aria-disabled="true">
                             <img class="me-1 rounded-circle" src="{{ $user->profile_photo_url }}" alt="user"
                                 width="20" height="20">
                             {{ $user?->full_name }}
                             @can('authorize', \App\Helpers\AppConstants::POST_WISH)
                                 <i class="ri-gift-line text-primary float-end"
                                     wire:click="$dispatchTo('dashboard.dashboard.modals.birthday-wish-modal', 'showModalEvent',{ employee_id: {{ $user->id }}, type: '{{ App\Helpers\AppConstants::ANNIVERSARY }}' })"></i>
                             @endcan
                         </a>
                     @empty
                         <div class="py-1 list-group-item" aria-disabled="true">
                             No Anniversary today.
                         </div>
                 @endforelse
             </div>
         </div>
     </div>
 </div>
