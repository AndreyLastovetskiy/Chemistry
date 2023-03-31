    <header class="header">
        <div class="header-contact">
            <div class="hc-wrapper">
                <div class="hcw-left">
                    <a href="mailto: clean@house.com" class="hcwl-a hcwl-aleft"><i class="fa-solid fa-envelope"></i> <span>clean@house.com</span></a>
                    <a href="tel: +7 (999) 999-99-99" class="hcwl-a"><i class="fa-solid fa-phone"></i> <span>+7 (999) 999-99-99</span></a>
                </div>
                <div class="hcw-right">
                    <a href="#!" class="hcwr-left"><i class="fa-brands fa-telegram fa-xl"></i></a>
                    <a href="#!"><i class="fa-brands fa-whatsapp fa-xl"></i></a>
                </div>
            </div>
        </div>
        <nav class="menu">
            <div class="menu-wrapper">
                <div class="logo">
                    <a href="./index.php">Чистый дом</a>
                </div>
                <ul class="menu-list">
                    <li class="menu-item"><a href="./catalog.php">Категории Товаров</a></li>
                    <li class="menu-item"><a href="./about.php">О компании</a></li>
                    <li class="menu-item"><a href="./contacts.php">Контакты</a></li>
                    <li class="menu-item"><a href="./history.php">История заказов</a></li>
                </ul>
                <?php 
                    if(!isset($_COOKIE["id"])) { ?>
                        <div class="login">
                            <a href="./login.php">Авторизация</a>
                        </div>
                    <?php } else { ?>
                        <div class="login">
                        <a href="./logout.php">Выйти</a>
                        </div>
                    <?php }
                ?>
            </div>
            <div class="mobile-logo">
                <div class="logo">
                    <a href="./index.php">Чистый дом</a>
                </div>
            </div>
            
            <div class="mobile-bar">
                <div class="mb-wrapper">
                    <span><img src="./img/svg/menu.svg"></span>
                </div>
            </div>
        </nav>
        
    </header>