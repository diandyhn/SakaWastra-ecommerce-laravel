{{-- @props([
    'user' => null,
    'role' => null,
    'dashboardUrl' => null,
])
@if (auth()->check())
    @php
        $user = auth()->user();
        $role = $user->getRoleNames()->first() ?? 'user';
        $dashboardUrl = $role === 'admin' ? '/admin' : '/app';
    @endphp
@endif
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('build/images/logo.png') }}" class="h-8" alt="{{ config('app.name') }}" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                {{ Str::upper(config('app.name')) }}</span>
        </a>


        <div class="items-center hidden justify-between w-full  lg:flex lg:w-auto" id="navbar-cta">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                {!! app(App\Services\MenuService::class)->buildMenu() !!}
            </ul>
        </div>

        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            @if (auth()->check())
                <a href="{{ $dashboardUrl }}"
                    class="hover:text-blue-700 px-3 py-2 rounded-md text-sm font-medium lg:hidden">
                    {{ ucfirst($role) }} Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="hover:text-blue-700 px-3 py-2 rounded-md text-sm font-medium">Login</a>
                <a href="{{ route('register') }}"
                    class="hover:text-blue-700 px-3 py-2 rounded-md text-sm font-medium ml-2">Register</a>
            @endif

            <button id="menuToggleButton" data-collapse-toggle="menuToggle" type="button"
                class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="menuToggle" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        @if (auth()->check())
            <a href="{{ $dashboardUrl }}"
                class="hover:text-blue-700 px-3 py-2 rounded-md text-sm font-medium hidden lg:block">
                {{ ucfirst($role) }} Dashboard
            </a>
        @endif
    </div>

    <div class="hidden lg:hidden" id="menuToggle">
        <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            {!! app(App\Services\MenuService::class)->buildMenu() !!}
        </ul>
    </div>
</nav>

<script>
    document.getElementById('menuToggleButton').addEventListener('click', function() {
        var menuToggle = document.getElementById('menuToggle');
        menuToggle.classList.toggle('hidden');
    });
</script> --}}
<header class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full bg-roseOfSharon-700 fixed">
    <nav class="relative max-w-[66rem] w-full md:flex md:items-center md:justify-between md:gap-3 mx-auto px-4 sm:px-6 lg:px-8 py-2">
      <!-- Logo w/ Collapse Button -->
      <div class="flex items-center justify-between">
        <a class="flex-none font-semibold text-xl text-roseOfSharon-100 focus:outline-none focus:opacity-80" href="/" aria-label="Brand">{{ config('app.name') }}</a>
  
        <!-- Collapse Button -->
        <div class="md:hidden">
          <button type="button" class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-white/50 text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none" id="hs-base-header-collapse" aria-expanded="false" aria-controls="hs-base-header" aria-label="Toggle navigation" data-hs-collapse="#hs-base-header">
            <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
            <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            <span class="sr-only">Toggle navigation</span>
          </button>
        </div>
        <!-- End Collapse Button -->
      </div>
      <!-- End Logo w/ Collapse Button -->
  
      <!-- Collapse -->
      <div id="hs-base-header" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-base-header-collapse">
        <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
          <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
          {!! app(App\Services\MenuService::class)->buildMenu() !!}
 
  
            <div class="relative flex flex-wrap items-center gap-x-1.5 md:ps-2.5 mt-1 md:mt-0 md:ms-1.5 before:block before:absolute before:top-1/2 before:-start-px before:w-px before:h-4 before:bg-white/30 before:-translate-y-1/2">
              <a class="p-2 w-full flex items-center text-sm text-white/80 hover:text-white focus:outline-none focus:text-white" href="#">
                <svg class="shrink-0 size-4 me-3 md:me-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" ><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" /></svg>
                Cart
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>