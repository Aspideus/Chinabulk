<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="Балкерные, грузоперевозки, международные перевозки, балк, брейк-балк, обычный балк">
    <meta name="description" content="МЕЖДУНАРОДНЫЕ БАЛКЕРНЫЕ ГРУЗОПЕРЕВОЗКИ - НАДЕЖНО, ВЫГОДНО, ЭКОНОМИЧНО" />
    <link rel="icon" type="image/png" href="favicon.png" sizes="25x25" />
    <title>Международные балкерные перевозки</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <div class="wrapper">
        <div id="container">
            <header id="header">
                <div class="header_body">
                    <div class="header_block_left">
                        <img src="./img/logo.svg" alt="Обновите страницу"/>
                    </div>
                    <div class="header_menu">
                        <div class="header_menu_left">
                            <a href="tel:+79149617765">+7 (914) 961-77-65</a>
                        </div>
                        <div class="header_menu_right">
                            <a href="https://www.vlogistic.ru/" target="_blank">Перейти на сайт компании</a>
                            <br><br>
                            <a href="mailto:vostok@vlogistic.ru">vostok@vlogistic.ru</a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="main_block">
                <div id="video-bg" class="">
                </div>
                <div class="main_block_info">
                    <div class="main_text_block">
                        <h1 class="h1_title">МЕЖДУНАРОДНЫЕ <br> БАЛКЕРНЫЕ <br> ГРУЗОПЕРЕВОЗКИ</h1>
                        <div class="h1_subtitle">НАДЕЖНО, ВЫГОДНО, ЭКОНОМИЧНО</div>
                    </div>
                    <div class="main_form_block">
                        <form action="javascript:void(null);" onsubmit="$('#parent_popup').show(); call();" id="form_box" method="POST"
                        >
                            <div class="form_h1">РАССЧИТАТЬ СТОИМОСТЬ</div>
                            <div class="form_h2">Пожалуйста, заполните форму. В ближайшее время с вами свяжутся специалисты ТЛК Восток Логистик.</div>
                            <div class="form_block_inside">
                                <div class="form_block_left">
                                    <div class="form_i_one">
                                        <div> ОТКУДА*</div>
                                        <input type="text" required name="form_from" placeholder="порт КНР">
                                    </div>
                                    <div class="form_i_two">
                                        <div>
                                            <div>ОБЩИЙ ВЕС, КГ*</div>
                                            <input type="text" required name="form_m" placeholder="1">
                                        </div>
                                        <div>
                                            <div>ОБЩИЙ ОБЪЕМ,  М3*</div>
                                            <input type="text" required name="form_v" placeholder="1">
                                        </div>
                                    </div>
                                    <div class="form_i_one">
                                        <div class="">ГАБАРИТЫ ОДНОГО МЕСТА (ДхШхВ), М*</div>
                                        <input type="text" name="form_p" onchange="dimension_changed();" placeholder="0,1 х 0,1 х 0,1" value="0,1 х 0,1 х 0,1">
                                    </div>
                                    <div class="form_i_one">
                                            <div>ФИО*</div>
                                            <input type="text" required name="form_name" placeholder="Иванов Иван Иванович">
                                    </div>
                                    <div class="form_i_one">
                                        <div>ТЕЛЕФОН*</div>
                                        <input type="text" required name="form_tel" pattern="\+7-[0-9]{10}" placeholder="+7 (___) ___-__-__">
                                    </div>
                                </div>
                                <div class="form_block_right">
                                    <div class="form_i_one">
                                        <div> КУДА</div>
                                        <input type="text" name="form_to" readonly value="Владивосток">
                                    </div>
                                    <div class="form_i_two">
                                        <div>
                                            <div>ТАРА (УПАКОВКА)</div>
                                            <input type="text" name="form_box" placeholder="Вид упаковки">
                                        </div>
                                        <div>
                                            <div>КОЛИЧЕСТВО, ШТ</div>
                                            <input type="text" name="form_cap" placeholder="1">
                                        </div>
                                    </div>
                                    <div class="form_i_two">
                                        <div>
                                            <div>ВЕС ОДНОГО МЕСТА, КГ</div>
                                            <input type="text" name="form_one" placeholder="1">
                                        </div>
                                        <div>
                                            <div>ДАТА ГОТОВНОСТИ</div>
                                            <input type="text" name="form_ready" placeholder="с __/__/__ по">
                                        </div>
                                    </div>
                                    <div class="form_i_one">
                                        <div>КОМПАНИЯ</div>
                                        <input type="text" name="form_company" placeholder="ООО “Ромашка”">
                                    </div>
                                    <div class="form_i_one">
                                        <div>E-MAIL*</div>
                                        <input type="email" required name="form_email" placeholder=" ">
                                    </div>
                                </div>
                            </div>
                            <div class="req_field_label">
                                <span>*</span> ПОЛЕ, ОБЯЗАТЕЛЬНОЕ ДЛЯ ЗАПОЛНЕНИЯ
                            </div>
                            <div style="text-align:left;">
                                <input type="checkbox" required id="personal_data" class="custom-checkbox">
                                <label for="personal_data"> Я согласен на обработку персональных данных </label>
                            </div>
                            <br>
                            <button class="form_submit" type="submit"> <div>ПОЛУЧИТЬ РАСЧЕТ</div> </button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="description_text">Балк - навалочный груз, перевозимый на судне в трюме/твиндек/палубе <br>
                обычный балк - насыпные и негабаритные грузы <br>
                брейк-балк - груз, упакованный в тару (Мешки, бочки, ящики, биг-бэги, пачки, связки)
            </div>

                <div class="gallery_block first_gallery_block">
                    <div class="gallery_title">ВИДЫ СУДОВ</div>
                    <div class="gallery_subtitle">Сухогрузные балкеры - специализированные суда, приспособленные под сыпучие и навалочные грузы</div>
                    <div class="ar_backward" onclick="g_toggle('#gallery_1', 'backward')"> <img src="./img/ar_backward.svg" alt="Обновите страницу"/></div>
                    <div class="gallery_items" id="gallery_1">
                        <div class="gallery_item_1 gallery_item mobile_visible">
                            <img src="./img/ships/01.jpeg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_2 gallery_item">
                            <img src="./img/ships/02.jpeg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_3 gallery_item">
                            <img src="./img/ships/03.jpeg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_4 gallery_item" style="display: none;">
                            <img src="./img/ships/04.jpeg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_5 gallery_item" style="display: none;">
                            <img src="./img/ships/05.jpg" alt="Обновите страницу">
                        </div>
                    </div>
                    <div class="ar_forward" onclick="g_toggle('#gallery_1', 'forward')"> <img src="./img/ar_forward.svg" alt="Обновите страницу"/></div>
                </div>
                <div class="gallery_block">
                    <div class="gallery_title">НОМЕНКЛАТУРА ГРУЗОВ</div>
                    <div class="gallery_subtitle">Удобрения, сырье для промышленности, металлопродукция, негабаритное оборудование, пиломатериалы, зерновые и прочие массовые грузы </div>
                    <div class="ar_backward" onclick="g_toggle('#gallery_2', 'backward')"> <img src="./img/ar_backward.svg" alt="Обновите страницу"/></div>
                    <div class="gallery_items" id="gallery_2">
                        <div class="gallery_item_1 gallery_item mobile_visible">
                            <img src="./img/nomen/nom01.jpeg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_2 gallery_item">
                            <img src="./img/nomen/nom02.jpeg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_3 gallery_item">
                            <img src="./img/nomen/nom03.jpeg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_4 gallery_item" style="display: none;">
                            <img src="./img/nomen/nom04.jpeg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_5 gallery_item" style="display: none;">
                            <img src="./img/nomen/nom05.jpeg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_6 gallery_item" style="display: none;">
                            <img src="./img/nomen/nom06.jpeg" alt="Обновите страницу">
                        </div>
                    </div>
                    <div class="ar_forward" onclick="g_toggle('#gallery_2', 'forward')"> <img src="./img/ar_forward.svg" alt="Обновите страницу"/></div>
                </div>

                <div class="gallery_block" >
                    <div class="gallery_title">ВИДЫ УПАКОВКИ (БРЕЙК-БАЛК)</div>
                    <div class="gallery_subtitle">Мешки, бочки, ящики, биг-бэги, пачки, связки </div>
                    <div class="ar_backward" onclick="g_toggle('#gallery_3', 'backward')"> <img src="./img/ar_backward.svg" alt="Обновите страницу"/></div>
                    <div class="gallery_items" id="gallery_3">
                        <div class="gallery_item_1 gallery_item mobile_visible">
                            <img src="./img/packaging/upak01.jpg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_2 gallery_item">
                            <img src="./img/packaging/upak02.jpg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_3 gallery_item">
                            <img src="./img/packaging/upak03.jpg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_4 gallery_item" style="display: none;">
                            <img src="./img/packaging/upak04.jpeg" alt="Обновите страницу">
                        </div>
                        <div class="gallery_item_5 gallery_item" style="display: none;">
                            <img src="./img/packaging/upak05.jpeg" alt="Обновите страницу">
                        </div>
                    </div>
                    <div class="ar_forward" onclick="g_toggle('#gallery_3', 'forward')"> <img src="./img/ar_forward.svg" alt="Обновите страницу"/></div>
                </div>

                <div id="parent_popup">
                    <div class="close_window" onclick="$('#parent_popup').hide()"><span></span></div>
                    <br>
                    <div class="contact_title">ВАША ЗАЯВКА ОТПРАВЛЕНА</div>
                    <div class="contact_subtitle">В БЛИЖАЙШЕЕ ВРЕМЯ С ВАМИ СВЯЖУТСЯ СПЕЦИАЛИСТЫ ТЛК ВОСТОК ЛОГИСТИК</div>

                </div>

            <footer id="footer">
                <div class="footer_body">
                    <div class="footer_text">
                        <a href="tel:+79149617765">+7 (914) 961-77-65</a>
                        <a href="mailto:vostok@vlogistic.ru">vostok@vlogistic.ru</a>
                        <a href="https://www.instagram.com/vlogistic.ru/" target="_blank"><img src="./img/insta.svg" alt="Обновите страницу" /></a>
                        <a href="#"><img src="./img/tik tok.svg" alt="Обновите страницу" /></a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script async src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script>
		$(document).ready(function()
		{
		    $.fn.setCursorPosition = function(pos) {
              if ($(this).get(0).setSelectionRange) {
                $(this).get(0).setSelectionRange(pos, pos);
              } else if ($(this).get(0).createTextRange) {
                var range = $(this).get(0).createTextRange();
                range.collapse(true);
                range.moveEnd('character', pos);
                range.moveStart('character', pos);
                range.select();
              }
            };
		    $('input[name="form_tel"]').click(function(){
                $(this).setCursorPosition(3);

            }).mask("+7-9999999999",{autoclear: false});

            $('input[name="form_p"]').click(function(){
                $(this).setCursorPosition(0);

            }).mask("9,9 x 9,9 x 9,9",{autoclear: false});
		});
    </script>
</body>
</html>
