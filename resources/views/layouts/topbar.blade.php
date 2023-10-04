<div class="blackboard">
    <div class="center-top">
        <div class="bar">
            <nav class="nav">
                <div>
                    <li class="nav-img nav-border">
                        <a href="{{ route('overview') }}">
                            <img src="/assets/images/logo_full.svg">
                        </a>
                    </li>
                </div>
                <div class="route-content">
                    <li class="nav-border-items {{ Route::is(['overview', 'home']) ? 'active' : '' }}" >
                        <a class="cool-link" href="{{ route('overview') }}">
                            <span class="nav-wording" style="{{ Route::currentRouteName() === 'overview' ? 'color: var(--White, #FFF);' : '' }}">Overview</span>
                        </a>
                    </li>
                    <li class="nav-border-items {{ Route::currentRouteName() === 'ipoproject' ? 'active' : '' }}">
                        <a class="cool-link" href="{{ route('ipoproject') }}">
                            <span class="nav-wording" style="{{ Route::currentRouteName() === 'ipoproject' ? 'color: var(--White, #FFF);' : '' }}">IPO Project</span>
                        </a>
                    </li>
                    <li class="nav-border-items {{ Route::currentRouteName() === 'iposcheme' ? 'active' : '' }}" >
                        <a class="cool-link" href="{{ route('iposcheme') }}">
                            <span class="nav-wording" style="{{ Route::currentRouteName() === 'iposcheme' ? 'color: var(--White, #FFF);' : '' }}">IPO Scheme</span>
                        </a>
                    </li>
                    <li class="nav-border-items {{ Route::currentRouteName() === 'aboutus' ? 'active' : '' }}">
                        <a class="cool-link" href="{{ route('aboutus') }}">
                            <span class="nav-wording" style="{{ Route::currentRouteName() === 'aboutus' ? 'color: var(--White, #FFF);' : '' }}">About Us</span>
                        </a>
                    </li>
                </div>
                <div class="sign-content">
                    <li class="nav-border-items">
                        <a href="#">
                            <span class="nav-wording">Login</span>
                        </a>
                    </li>
                    <li class="nav-border-sign">
                        <a href="#">
                            <button class="sign-up-btn">
                                <span>Sign Up</span>
                            </button>
                        </a>
                    </li>
                </div>
            </nav>
        </div>
    </div>
</div>


<div class="mobile-topbar">
    <div class="small-nav-img">
        <img src="assets/images/logo3.svg">
    </div>
    <div class="small-nav-toggle" onclick="toggleNav()">
        <img src="/assets/images/nav-icon.svg">
    </div>
</div>

<div class="small-nav" style="display: none">
    <nav class="nav2">
        <ul>
            <li class="smallnav-act {{ Request::is('overview') ? 'active' : ''}}" style="{{ Route::currentRouteName() === 'overview' ? 'border-bottom: 2px solid var(--Pink, #FF2D55);' : '' }}">
                <a href="{{ route('overview') }}" style="{{ Request::is('overview') ? 'color: #BD00FF;' : '' }}">
                    <span class="mobile-nav-wording" style="{{ Route::currentRouteName() === 'overview' ? 'color: var(--White, #FFF);' : '' }}">Overview</span>
                </a>
            </li>
            <li class="smallnav-act {{ Request::is('ipoproject') ? 'active' : ''}}" style="{{ Route::currentRouteName() === 'ipoproject' ? 'border-bottom: 2px solid var(--Pink, #FF2D55);' : '' }}"><a href="{{ route('ipoproject') }}" style="{{ Request::is('ipoproject') ? 'color: #BD00FF;' : '' }}">
                <span class="mobile-nav-wording" style="{{ Route::currentRouteName() === 'ipoproject' ? 'color: var(--White, #FFF);' : '' }}">IPO Project</span>
            </a></li>
            <li class="smallnav-act {{ Request::is('iposcheme') ? 'active' : ''}}" style="{{ Route::currentRouteName() === 'iposcheme' ? 'border-bottom: 2px solid var(--Pink, #FF2D55);' : '' }}"><a href="{{ route('iposcheme') }}" style="{{ Request::is('iposcheme') ? 'color: #BD00FF;' : '' }}">
                <span class="mobile-nav-wording" style="{{ Route::currentRouteName() === 'iposcheme' ? 'color: var(--White, #FFF);' : '' }}">IPO Scheme</span>
            </a></li>

            <li class="smallnav-act {{ Request::is('aboutus') ? 'active' : ''}}" style="{{ Route::currentRouteName() === 'aboutus' ? 'border-bottom: 2px solid var(--Pink, #FF2D55);' : '' }}"><a href="{{ route('aboutus') }}" style="{{ Request::is('aboutus') ? 'color: #BD00FF;' : '' }}">
                <span class="mobile-nav-wording" style="{{ Route::currentRouteName() === 'aboutus' ? 'color: var(--White, #FFF);' : '' }}">About Us</span>
            </a></li>
        </ul>

        <div style="display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;">
            <div>
                <button class="mobile-signup-btn">
                    <span>Sign Up</span>
                </button>
            </div>

            <ul style="height: auto">
                <li>
                    <a href="#">
                        <span class="mobile-nav-wording">Log In</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>


