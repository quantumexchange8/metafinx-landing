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
                    <li class="nav-border-log">
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