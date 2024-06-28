@props(['event', 'type' => 'success'])

<div x-data="{ show: false, type: '{{ $type }}', message: '' }" class="position-fixed" style="right: 20px; top: 20px; z-index: 1000;">
    <div :class="type === 'success' ? 'alert-success' : 'alert-danger'"
         x-show="show" x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="transform translate-x-full opacity-0"
         x-transition:enter-end="transform translate-x-0 opacity-100"
         x-init="
             window.addEventListener('{{ $event }}', event => {
                 show = true;
                 type = event.detail.type || '{{ $type }}';
                 message = event.detail.message;
                 setTimeout(() => show = false, 2000);
             });
             @if(session()->has($event))
                 show = true;
                 type = '{{ session($event . '_type', $type) }}';
                 message = '{{ session($event) }}';
                 setTimeout(() => show = false, 2000);
             @endif
         "
         class="alert alert-dismissible fade show" role="alert" style="display: none; text-align: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            {{ $slot }}
        </div>
    </div>
</div>
