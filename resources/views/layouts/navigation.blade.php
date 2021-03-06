<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                @notifyCss
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('new-post')" :active="request()->routeIs('new-post')">
                        {{ __('Add New Post') }}
                    </x-nav-link>
                    <x-nav-link :href="route('posts')" :active="request()->routeIs('posts')">
                        {{ __('All Posts') }}
                  </x-nav-link>
                  <x-nav-link :href="route('rooms.index')" :active="request()->routeIs('rooms.index')">
                    {{ __('Group Chat') }}
                 </x-nav-link>
                 <x-nav-link :href="route('chat')" :active="request()->routeIs('chat')">
                    {{ __('Private Chat') }}
                 </x-nav-link>
                  <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                    {{ __('Profile') }}
                 </x-nav-link>
                  @role('admin')
                  <x-nav-link :href="route('adminpost')" :active="request()->routeIs('adminpost')">
                    {{ __('Admin Posts') }}
              </x-nav-link>
              <x-nav-link :href="route('admin')" :active="request()->routeIs('admin')">
                {{ __('User Permission') }}
             </x-nav-link>
                 @endrole
                 </div>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; right:90px; border-radius:50%;">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <form method="GET" action="{{ route('welcome') }}">
                            @csrf
                         <x-dropdown-link :href="route('welcome')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Home') }}
                             </x-dropdown-link>
                        </form>

                    <form method="GET" action="{{ route('dashboard') }}">
                            @csrf
                         <x-dropdown-link :href="route('dashboard')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Dashboard') }}
                             </x-dropdown-link>
                        </form>

                        <form method="GET" action="{{ route('new-post') }}">
                            @csrf
                         <x-dropdown-link :href="route('new-post')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Add New Post') }}
                             </x-dropdown-link>
                        </form>

                        <form method="GET" action="{{ route('posts') }}">
                            @csrf
                         <x-dropdown-link :href="route('posts')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('All Posts') }}
                             </x-dropdown-link>
                        </form>

                        <form method="GET" action="{{ route('rooms.index') }}">
                            @csrf
                         <x-dropdown-link :href="route('rooms.index')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Group Chat') }}
                             </x-dropdown-link>
                        </form>

                        <form method="GET" action="{{ route('chat') }}">
                            @csrf
                         <x-dropdown-link :href="route('chat')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Private Chat') }}
                             </x-dropdown-link>
                        </form>

                        <form method="GET" action="{{ route('profile.edit') }}">
                            @csrf
                         <x-dropdown-link :href="route('profile.edit')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Profile') }}
                             </x-dropdown-link>
                        </form>

                        @role('admin')
                        <form method="GET" action="{{ route('adminpost') }}">
                            @csrf
                         <x-dropdown-link :href="route('adminpost')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Admin Posts') }}
                             </x-dropdown-link>
                        </form>

                        <form method="GET" action="{{ route('admin') }}">
                            @csrf
                         <x-dropdown-link :href="route('admin')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('User Permission') }}
                             </x-dropdown-link>
                        </form>
                        @endrole

                        <!-- Authentication -->

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            {{-- <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> --}}
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>

                </form>
            </div>
        </div>
    </div>
</nav>
