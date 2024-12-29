<div>
    <div class="text-center" x-data = "{
        init() {
            $('#birthday-calendar').jalendar({
                dateType: 'yyyy-mm-dd'
            });
        }
    }">
        <div id="birthday-calendar" class="jalendar w-100">
            @forelse ($users??[] as $user)
            <div class="added-event have-event"
            data-date="{{$user->date_of_birth}}"
            data-title="BirthDay: {{$user->first_name.' '.$user->last_name}}"
            data-id="{{$user->rcl_number}}">
            </div>
            <div class="added-event have-event"
            data-date="{{$user->date_of_joining}}"
            data-title="Anniversary: {{$user->first_name.' '.$user->last_name}}"
            data-id="{{$user->rcl_number}}">
            </div>
            @empty

            @endforelse
        </div>
    </div>
</div>
