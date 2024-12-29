import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
// import Alpine from 'alpinejs';
// import focus from '@alpinejs/focus';
import intersect from '@alpinejs/intersect'
import { Calendar }  from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';
import interactionPlugin from '@fullcalendar/interaction';
window.FullCalendar = { Calendar, dayGridPlugin,timeGridPlugin, listPlugin, interactionPlugin };
// Alpine.plugin(focus);
Alpine.plugin(intersect)

// Alpine.start();
// window.Livewire = Livewire;
Livewire.start();
