<div class="side-bar">
    <div class="d-flex flex-column gap-4 w-100">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <div class="side-bar-links">
            <a href="#"><span><i class="fas fa-home"></i> Dashboard</span></a>
            <a href="statupdb.php" <?php if($menu=="statupdb.php") echo 'class="active"'; ?>><span><i class="fa-solid fa-inbox"></i> Startup DB</span></a>
            <a href="dealflow.php" <?php if($menu=="dealflow.php") echo 'class="active"'; ?>><span><i class="fa-solid fa-box-open"></i> Deal Flow</span></a>
            <a href="mydrive.php" <?php if($menu=="mydrive.php") echo 'class="active"'; ?>><span><i class="fa-regular fa-folder"></i> My Drive</span></a>
            <a href="compare.php" <?php if($menu=="compare.php") echo 'class="active"'; ?>><span><i class="fa-solid fa-code-compare"></i> Compare</span> <small>3</small></a>
            <a href="#"><span><i class="fa-solid fa-users"></i> Users</span></a>
            <a href="#"><span><i class="fa-regular fa-circle-question"></i> Help</span></a>
        </div>
    </div>

    <div class="w-100 d-flex justify-content-end flex-column gap-3">
        <div class="side-bar-links">
            <a href="#"><span><i class="fa-regular fa-bell"></i> Notifications</span> <small>2</small></a>
            <a href="#"><span><i class="fa-solid fa-gear"></i> Settings</span></a>
            <a href="index.php"><span><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</span></a>
        </div>

        <div class="d-flex justify-content-start gap-2">
            <div>
                <img src="img/user.png" class="border rounded-5" alt="">
            </div>
            <div>
                <h6 class="p-0 m-0">Sota Tsutsuki</h6>
                <small class="p-0 m-0">sota.tsutsuki@eneosusa.com</small>
            </div>
        </div>

        <!-- <select class="select-box" name="language">
            <option value="en">English</option>
            <option value="jp">Japanesh</option>
            <option value="fr">French</option>
            <option value="de">German</option>
            <option value="ru">Russian</option>
            <option value="it">Italian</option>
        </select> -->

        <div id="google_translate_element"></div>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement(
                    {pageLanguage: 'en'},
                    'google_translate_element'
                );
            }
        </script>
    
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </div>
</div>