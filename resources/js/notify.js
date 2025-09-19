import Notify from 'laravel-notify';

document.addEventListener('alpine:init', () => {
    window.Alpine.plugin(Notify);
});
