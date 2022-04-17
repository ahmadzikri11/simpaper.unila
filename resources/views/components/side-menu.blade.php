<nav class="side-nav">
    <ul>

        <li>

            <a href=" {{ route('dashboard') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('profile') }}" class="side-menu">
                <div class="side-menu__icon"> <i data-feather="user"> </i> </div>
                <div class="side-menu__title"> Update Profile</div>
            </a>
        </li>
        @if (auth()->user()->role == 'user')
            <li>
                <a href="{{ route('transcation/user_transaction') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="edit"></i></i> </div>
                    <div class="side-menu__title"> Submission </div>
                </a>
            </li>
            <li>
                <a href="{{ route('transcation.status') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="monitor"></i></i> </div>
                    <div class="side-menu__title"> Status </div>
                </a>
            </li>
        @endif
        @if (auth()->user()->role == 'admin')
            <li>
                <a href="{{ route('request.list') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="side-menu__title"> Submitted </div>
                </a>
            </li>
            <li>
                <a href="{{ route('account.list') }}" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                    <div class="side-menu__title"> Users </div>
                </a>
            </li>
        @endif
    </ul>
</nav>
