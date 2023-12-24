<?php
session_start();

/******* Дані для Telegram бота | https://api.telegram.org/botTOKEN/getUpdates ********/
$token = "token";  // токен телеграм
$chat_id = "chatID";                                     // id чату
$product = 'tovar';                                         // назва товару

if ($_REQUEST['phone'] === '0976909618') {
    echo "Перевірте правильність вказаного номеру телефону та залишіть заявку ще раз.";
    exit;
}


/******* Початок відправки в telegram *******/
$arr = array(
//    '<b>→ ЗАМОВЛЕННЯ НА</b>' => $_SERVER['HTTP_REFERER'], // повне посилання
    '<b>→ ЗАМОВЛЕННЯ НА</b>' => $_SERVER['SERVER_NAME'],    // тільки домен 
    '💁🏻‍♂️ Імʼя: ' => $_REQUEST['name'],
    '📱 Телефон: ' => $_REQUEST['phone'],
    '📦 Товар: ' => $product,
    '🛍️ Кількість: ' => $_REQUEST['counter'], 
    '📅 Час відправки: ' => date('Y-m-d H:i:s'),   
    '📍 IP: ' => $_SERVER['REMOTE_ADDR'],      
//    '📌 UTM Source: ' => $_SESSION['utms']['utm_source'],
//    '📌 UTM Medium: ' => $_SESSION['utms']['utm_medium'],
//    '📌 UTM Term: ' => $_SESSION['utms']['utm_term'],
//    '📌 UTM Content: ' => $_SESSION['utms']['utm_content'],
//    '📌 UTM Campaign: ' => $_SESSION['utms']['utm_campaign'],     
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$send = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1036961987630391');
fbq('track', 'PageView');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1036961987630391&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


</head>


   <meta name="viewport" content="width=device-width">

 </head><body><div class="block_success">
            <h2 style="text-transform: uppercase;">Дякуємо за заявку!</h2>

            <h3 class="success">
                </h3><h4 class="success">
                <p class="fail success">Ми зателефонуємо вам протягом 30 хвилин, щоб дізнатись деталі замовлення.</a></p> <br>
             </h4>


            <div class="success">
                <ul class="list_info">

				 </ul>
                <br><span id="submit"></span>
            </div>
            <p class="fail success">Повернутися на <a href="index.html">головну</a></p>
		</div>



<br>
	<title>Вітаємо! Ваше замовлення прийнято!</title>



	    <style type="text/css">
            body {
                line-height: 1;
                height: 100%;
                font-family: Arial;
                font-size: 15px;
                color: #313e47;
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;

            }
            h2 {
                margin: 0;
                padding: 0;
                font-size: 36px;
                line-height: 44px;
                color: #313e47;
                text-align: center;
                font-weight: bold;
            }
            a {
                color: #69B9FF;
            }
            .list_info li span {
                width: 150px;
                display: inline-block;
                font-weight: bold;
                font-style: normal;
            }
            .list_info {
               text-align: left;
               display: inline-block;
               list-style: none;
               margin-top: -10px;
               margin-bottom: -11px;
            }
            .list_info li {
                margin: 11px 0px;
            }
            .fail {
                margin: 10px 0 20px 0px;
                text-align: center;
            }
            .email {
                position: relative;
                text-align: center;
                margin-top: 40px;
            }
            .email input {
                height: 30px;
                width: 200px;
                font-size: 14px;
                padding-right: 10px;
                padding-left: 10px;
                outline: none;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 1px solid #B6B6B6;
                margin-bottom: 10px;
            }
            .block_success {
                max-width: 960px;
                padding: 70px 30px 70px 30px;
                margin: -50px auto;

            }
    .success {
                text-align: center;
            }
            .man .block-1 .top-title>div {
        background: url(success/phone-icon-2-lighter.png) center bottom no-repeat;
    }
    .dashed_frame {
        border: 1px dashed grey;
        border-radius: 10px;
        opacity: 1;
        background: none;
        top: 0;
        height: auto;
        padding: 15px 20px;
        width: 90%;
        margin-bottom: 20px;
    }
    .dashed_frame h2 {
        font-weight: 900;
        text-align: center;
        text-transform: uppercase;
    }
    .present {
        background-color: #eff2fa;
        border-radius: 10px;
        padding: 20px !important;
        height: 510px !important;
        border: 1px solid #e2dfe9;
    }
    .offer-head {
        left: -40px;
        position: relative;
    }
    .mail-box .head {
        font-family: sans-serif;
        font-size: 18px;
        font-style: italic;
        text-align: center;
        margin: 20px 0;
    }
    .mail-box .email_ss_holder {
        float: none;
        width: 100%;
        padding: 45px 10px 15px;
        text-align: center;
    }
    .mail-box .email_cc_input {
        border: 1px solid #dcdada;
        background-color: rgba(204, 204, 204, 0.16);
        width: 258px;
        color: #000;
    }
    .mail-box .btn_ss_holder {
        float: none;
        margin: 0;
        width: 100%;
        text-align: center;
    }
    .mail-box .desc_cc_desc {
        margin: 45px 0px 0;
        color: #7b7b7b;
        font-size: 14px;
    }
    .present-descr {
        width: 58%;
        float: left;
    }
    .present1 {
        float: left;
        text-align: center;
        width: 30%;
        margin: 0 5px;
    }
    .present1.last:after {
        clear: both;
    }
    .mail-box {
        background: url("//static.best-gooods.ru/upsells/img/mail-box.png") center top no-repeat;
        width: 42%;
        float: left;
        padding: 1px 45px;
        height: 375px;
    }
    .tov-gal-big {
        margin-top: 45px !important;
        border: 1px solid lightgrey;
    }
    .tov-gal-list {
        margin-top: 45px !important;
    }
    .tov-left-cont {
        width: 420px !important;
    }
    .thanks {
        margin: 43% auto;
        font-size:28px;
        text-align:center;
        line-height:36px
    }
    .thanks span {
        font-size:20px;
    }
    @media (max-width: 960px){
        .mail-box, .present-descr {
            float: none;
            width: 100%;
        }
        .present {
            height: 100% !important;
        }
        .present-descr {
            height: 375px;
        }
        .offer-head {
            left: -40px;
        }
        .thanks {
            width: 55%;
            margin: 25% auto;
        }
    }
    @media (max-width: 640px){
        .present1 {
            margin: 0 3px;
        }
        .present, .mail-box .head, .mail-box .desc_cc_desc {
            font-size: 80%;
        }
        .present-descr {
            height: 300px;
        }
        .mail-box .email_ss_holder {
            padding: 45px 0 15px;
        }
        .mail-box .email_cc_input {
            width: 100%;
        }
        .mail-box {
            height: 330px;
            background-size: contain;
        }
        .mail-box .head {
            margin: 15px 0;
        }
        .top-title-c {
            top: 0 !important;
        }
        .thanks {
            font-size: 18px;
            line-height: 30px;
            width: 100%;
            margin: 55% auto;
        }
        .thanks span {
            font-size: 14px;
        }
    }
        </style>

</body></html> 