<!-- Navigation Links -->
<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
    
    <x-nav-link :href="route('admin.produk.index')" :active="request()->routeIs('admin.produk.*')">
        {{ __('Produk') }}
    </x-nav-link>
    
    <x-nav-link :href="route('admin.kategori.index')" :active="request()->routeIs('admin.kategori.*')">
        {{ __('Kategori') }}
    </x-nav-link>
</div>
