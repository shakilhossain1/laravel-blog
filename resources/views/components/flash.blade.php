@if (session()->has('success'))
    <div x-data="{show: true}"
        x-show="show"
        x-init="setTimeout(() => show = false, 3000)"
        class="fixed bottom-3 right-3 bg-blue-500 rounded-md shadow text-white p-2">
        <p>{{ session('success') }}</p>
    </div>
@endif
