<?php
//エスケープ
//function h($s) {
//  return htmlspecislchars($s, ENT_QUOTES, 'UTF-8');
//}
//h($choice);

echo ("途中経過1-0[".$_POST["choice"]."]<br>");
$choice = $_POST['choice'];
echo ("途中経過1-1[".$choice."]<br>");

//プレイヤーの手を配列に入れる
if ($choice == "グー") {
   echo ("途中経過1-21<br>");
    echo $choice_temp = 0;
  } elseif ($choice == "チョキ") {
    echo ("途中経過1-22<br>");
    echo $choice_temp = 1;
  } elseif ($choice == "パー") {
    echo ("途中経過1-23<br>");
    echo $choice_temp = 2;
  }else{
    echo ("途中経過1-24<br>");
    echo 'X';
}

echo '自分'.$choice_temp;

echo ("途中経過1[".$choice."]<br>");
echo $choice."<br>";
var_dump($choice_temp)."<br>";

// 0=>グー、1=>チョキ、2=>パーを代入
$hand = array('グー','チョキ','パー');
echo ("途中経過1-2<br>");



echo ("途中経過1-3<br>");


//コンピューターの手
$com =array_rand($hand);

if ($com == 0) {
    echo $com_t = 'グー';
  } elseif ($com == 1 ) {
    echo $com_t = 'チョキ';
  } elseif ($com == 2 ) {
    echo $com_t = 'パー';
  }

janken($choice_temp,$com);

//結果表示
echo 'あなたは ['. $choice. '] を出しました。'. "<br>";

if ($choice == $com_t) {
    echo 'コンピュータも ['. $com_t. '] を出しました。'. "<br>";
  } else {
    echo 'コンピュータは ['. $com_t. '] を出しました。'. "<br>";
}

echo 'おしまい'."<br>";




//--------------------------
//じゃんけんプログラム
//$playerと$comが等しければあいこ
//$player + 1 を3で割った余りと$comが等しければ$comの勝ち
//それ以外は$playerの勝ち
//--------------------------
function janken($choice_f, $com_f) {
  //結果
  $result = array('あいこです<br>','あなたの勝ちです<br>','あなたの負けです<br>');

  echo ("途中経過2-01[".$choice_f."]<br>");
  echo ("途中経過2-02[".$com_f."]<br>");
  if ($choice_f == $com_f){
    echo ("途中経過2<br>");
    echo $result[0];
 } elseif ((($choice_f +1) %3) == $com_f) {
   echo ("途中経過4<br>");
   echo $result[1];
  } else {
    echo ("途中経過3<br>");
    echo $result[2];
  }
}
