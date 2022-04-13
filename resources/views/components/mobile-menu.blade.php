<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">

        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-2 py-5 hidden">
        <li>
            <a href="{{ route('dashboard') }}" class="menu menu--active">
                <div class="menu__icon"> <i data-feather="home"></i> </div>
                <div class="menu__title"> Dashboard </div>
            </a>
        </li>
        <li>
            <a href="{{ route('profile') }}" class="menu">
                <div class="menu__icon"> <i data-feather="user"></i> </div>
                <div class="menu__title"> Update Profile </div>
            </a>
        </li>
        <li>
            <a href="{{ route('transcation/user_transaction') }}" class="menu">
                <div class="menu__icon"> <i data-feather="edit"></i> </div>
                <div class="menu__title"> Submission </div>
            </a>
        </li>
        <li>
            <a href="{{ route('transcation/status') }}" class="menu">
                <div class="menu__icon"> <i data-feather="monitor"></i> </div>
                <div class="menu__title"> Status </div>
            </a>
        </li>
        @if (auth()->user()->role == 'admin')
            <li>
                <a href="{{ route('request.list') }}" class="menu">
                    <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="menu__title"> Submitted </div>
                </a>
            </li>
            <li>
                <a href="{{ route('account.list') }}" class="menu">
                    <div class="menu__icon"> <i data-feather="users"></i> </div>
                    <div class="menu__title"> Users </div>
                </a>
            </li>
        @endif
    </ul>
</div>
