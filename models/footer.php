    <footer>
        <div class="footer">
            <div class="footer-wrapper">
                <div class="fw-first">
                    <a href="./index.php">MEIN MINER</a>
                    <p>© Mein Miner, 2022</p>
                </div>
                <div class="fw-second">
                    <div class="fws-title">
                        <p>Покупателям</p>
                    </div>
                    <div class="fws-about">
                        <a href="./catalog.php">Каталог Товаров</a>
                        <a href="./about.php">О компании</a>
                        <a href="./contacts.php">Контакты</a>
                        <a href="./history.php">История заказов</a>
                    </div>
                </div>
                <div class="fw-third">
                    <div class="fwt-title">
                        <p>категории товаров</p>
                    </div>
                    <div class="fwt-category">
                        <?php
                            $select_category = mysqli_query($link, "SELECT * FROM `category` ORDER BY `id` DESC LIMIT 6");
                            $select_category = mysqli_fetch_all($select_category);

                            foreach($select_category as $scy) { ?>
                                <a href="./product.php?id=<?php echo $scy[0]; ?>"><?php echo $scy[1]; ?></a>
                            <?php }
                        ?>
                    </div>
                    
                </div>
                <div class="fw-fouth">
                    <div class="fwf-urls">
                        <a href="#!">Публичная оферта</a>
                        <a href="#!">Политика конфиденциальности</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>