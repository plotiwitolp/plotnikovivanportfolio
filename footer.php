</main>
<footer class="footer">
    <div class="container">
        <div class="section">
            <div class="footer__inner">
                <div class="footer__top">
                    <div class="footer__item">
                        <dl>

                            <dt>
                                Работаю удаленно:
                            </dt>
                            <dd>
                                по всему миру.
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                Территориально нохожусь здесь:
                            </dt>
                            <dd>
                                <address>
                                    Грузия, Кутаиси (GMT+4)
                                </address>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                Мое местное время:
                            </dt>
                            <dd>
                                <?php
                                $offset = 4 * 60 * 60;
                                $dateFormat = "H:i" . " (d.m.Y)";
                                $timeNdate = gmdate($dateFormat, time() + $offset);

                                echo $timeNdate;
                                ?>
                            </dd>
                        </dl>
                    </div>
                    <div class="footer__item">
                        <dl>
                            <dt>
                                <a href="#">
                                    Telegram:
                                </a>
                            </dt>
                            <dd>
                                <a href="#">
                                    <i class="fa fa-telegram" aria-hidden="true"></i>
                                </a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="#">
                                    Whatsapp:
                                </a>
                            </dt>
                            <dd>
                                <a href="#">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                </a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <a href="mailto:">
                                    Email:
                                </a>
                            </dt>
                            <dd>
                                <a href="mailto:">
                                    info@ivanplotnikov.pro
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </a>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="footer_bottom">
                    ©️ 2022 - <?php echo date("Y"); ?> Все права защищены. Информация на сайте, не является публичной офертой. Копирование материалов сайта запрещено.
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<style>
    html {
        margin-top: 63px !important;
    }

    html:has(.customize-support) {
        margin-top: 95px !important;
    }

    html:has(.customize-support) .header_fixed {
        top: 32px;
    }
</style>
</body>

</html>