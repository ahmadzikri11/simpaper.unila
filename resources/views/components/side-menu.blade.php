<nav class="side-nav">
    <ul>

        <li>

            <a href=" {{ route('dashboard') }}"
                class="side-menu {{ request()->routeIs('dashboard') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('dashboard') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>


        @if (auth()->user()->role == 'user')
            <li>
                <a href="{{ route('profile') }}"
                    class="side-menu {{ request()->routeIs('profile') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('profile') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="user"> </i> </div>
                    <div class="side-menu__title"> Update Profile</div>
                </a>
            </li>
            <li>
                <a href="{{ route('view_skbp') }}"
                    class="side-menu {{ request()->routeIs('view_skbp') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('view_skbp') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="file-text"></i></i> </div>
                    <div class="side-menu__title"> SKBP</div>
                    {{-- <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>

                            <form method="POST" action="#" role="none">
                                <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                              </form>
                        </div>
                    </div> --}}
                            
                    {{-- <div class="side-menu__title"><a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a></div>
                    <div class="side-menu__title"><a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a></div> --}}
                </a>
            </li>

        
            
 {{-- <div class="relative inline-block text-left">
    <div>
      <button type="button" class="inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100" id="menu-button" aria-expanded="true" aria-haspopup="true">
        Options
        <!-- Heroicon name: mini/chevron-down -->
        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>
  
    <!--
      Dropdown menu, show/hide based on menu state.
  
      Entering: "transition ease-out duration-100"
        From: "transform opacity-0 scale-95"
        To: "transform opacity-100 scale-100"
      Leaving: "transition ease-in duration-75"
        From: "transform opacity-100 scale-100"
        To: "transform opacity-0 scale-95"
    -->
    <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
      <div class="py-1" role="none">
        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Support</a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
        <form method="POST" action="#" role="none">
          <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
        </form>
      </div>
    </div>
  </div> --}}
  
        


            <li>
                <a href="{{ route('transcation/user_transaction') }}"
                    class="side-menu {{ request()->routeIs('transcation/user_transaction') || request()->routeIs('transcation.status') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('transcation/user_transaction') || request()->routeIs('transcation.status') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="layers"></i></i> </div>
                    <div class="side-menu__title"> Digilib </div>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('get_repository') }}"
                    class="side-menu {{ request()->routeIs('get_repository') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('get_repository') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="external-link"></i></i> </div>
                    <div class="side-menu__title"> Upload Link Repositori</div>
                </a>
            </li> --}}

            <li>
                <a href="{{ route('user.helpdesk') }}"
                    class="side-menu {{ request()->routeIs('user.helpdesk') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('user.helpdesk') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="message-square"></i></i> </div>
                    <div class="side-menu__title"> Helpdesk </div>
                </a>
            </li>

            {{-- <li>
                <a href="{{ route('transcation.status') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="monitor"></i></i> </div>
                    <div class="side-menu__title"> Status </div>
                </a>
            </li> --}}
        @endif
        @if (auth()->user()->role == 'admin')
            <li>
                <a href="{{ route('profile_admin') }}"
                    class="side-menu {{ request()->routeIs('profile_admin') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('profile_admin') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="user"> </i> </div>
                    <div class="side-menu__title"> Perbarui Profile</div>
                </a>
            </li>
            <li>
                <a href="{{ route('request.list') }}"
                    class="side-menu
                    {{ request()->routeIs('request.list') || request()->routeIs('validation') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('validation') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                    <div class="side-menu__title"> Digilib </div>
                </a>
            </li>
            <li>
                <a href="{{ route('list.skbp') }}"
                    class="side-menu {{ request()->routeIs('list.skbp') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('list.skbp') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="side-menu__title"> Validasi SKBP </div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.helpdesk') }}"
                    class="side-menu {{ request()->routeIs('admin.helpdesk') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('admin.helpdesk') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                    <div class="side-menu__title"> Helpdesk </div>
                </a>
            </li>

            <li>
                <a href="{{ route('account.list') }}"
                    class="side-menu {{ request()->routeIs('account.list') || request()->routeIs('edit.account') ? 'side-menu--active' : '' }}"class="side-menu {{ request()->routeIs('account.list') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title"> Pengguna </div>
                </a>
            </li>
        @endif
    </ul>
</nav>
