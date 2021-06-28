<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>augury</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       こんにちは."".さん！<br>
        <div class="omikuji">   
           今日の運勢は…<br>
           <h3>大吉！</h3>
           <?php
           $omikuji = rand(1,8);
           if($omikuji ==1){
                echo "運気は絶好調。身近な人のお手伝いをするとさらに運気アップ♪";
            }elseif($omikuji ==2){
                echo "今日のあなたは大吉です。笑顔を忘れずに　いってらっしゃい！";
            }elseif($omikuji ==3){
                echo "何気ない発言がトラブルを引き起こしそう……。誠意が大切です";
            }elseif($omikuji==4){
                echo "晴耕雨読。だいじょうぶです、焦らずじっくり取り組みましょう";
            }elseif($omikuji==5){
                echo "疲れ知らずの一日。でも油断は禁物、しっかり食べてよく寝よう";
            }elseif($omikuji==6){
                echo "じゃんけんみたいに運は巡るもの。ラッキードリンクはコーヒー";
            }elseif($omikuji==7){
                echo "発想の転換が吉。高いように見える壁、じつは薄っぺらいかも？";
            }elseif($omikuji==8){
                echo "ノリと勢い。怖がらずに挑戦してみると意外な発見があるかも！";
            }
            ?>
            <button><a href="/augury">もう一度おみくじを引く</a></button>
        </div>
        
        ――月――日生まれの
        <div class="stone">
            誕生石は…
            /*もし1月1日生まれだったら〇〇、1月2日生まれだったら〇〇…を365日分紐づける*/
        </div>
        <div class="color">
            誕生色は…
            //stoneと同様に
        </div>
        <div class="sign">
            星座は…
            //
        </div>

    </body>
</html>
