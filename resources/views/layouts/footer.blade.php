<div class="footer-bg">
    <div class="center-footer">
        
         <div class="footer-row1">
            <div>
                <p class="get-notify">Get notified when we launch</p>
                <p class="stayup">Stay up to date with the latest news, announcements, and articles.</p>
            </div>
            <form action="{{ route('subscription') }}" method="POST">
                @csrf
                <div class="footer-email">
                    <div class="input-container">
                        <img class="email-icon" src="assets/images/email_icon.svg">
                        <input class="email-form" type="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="mobile-subscription">
                        <button type="submit" class="subscription">
                            <span>
                                Subscribe
                            </span>
                        </button>
                    </div>
                </div>
            </form>
         </div>

         <div class="footer-line"></div>

         <div class="footer-row2">
            <div>
                <p class="copyright">© METAFinX 2023. All rights reserved.</p>
            </div>
            <div style="display:flex;width:auto;flex-wrap: wrap;gap:10px">
                <div>
                    <p class="tnc-word">
                        Terms
                    </p>
                </div>
                <div>
                    <p class="tnc-word">
                        Privacy
                    </p>
                </div>
                <div>
                    <p class="tnc-word">
                        Cookies
                    </p>
                </div>
                <div style="display: flex;justify-content:space-between;align-items: center;">
                    <div><p class="language-word">English</p></div>
                    <div>
                        <i class="mdi mdi-menu-down"></i>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>