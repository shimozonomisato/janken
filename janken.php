<?php
//エスケープを関数で定義
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$choice = $_POST['choice'];

h($choice);

//プレイヤーの手を配列に入れる
if ($choice == "グー") {
     $choice_temp = 0;
  } elseif ($choice == "チョキ") {
     $choice_temp = 1;
  } elseif ($choice == "パー") {
     $choice_temp = 2;
  }

// 0=>グー、1=>チョキ、2=>パーを代入
$hand = array('グー','チョキ','パー');

//コンピューターの手
$com =array_rand($hand);

if ($com == 0) {
    $com_t = 'グー';
  } elseif ($com == 1 ) {
    $com_t = 'チョキ';
  } elseif ($com == 2 ) {
    $com_t = 'パー';
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
//じゃんけん関数
//$playerと$comが等しければあいこ
//$player + 1 を3で割った余りと$comが等しければ$comの勝ち
//それ以外は$playerの勝ち
//--------------------------
function janken($choice_f, $com_f) {
  //結果
  $result = array('あいこです<br>','あなたの勝ちです<br>','あなたの負けです<br>');

  if ($choice_f == $com_f){
    echo $result[0];
 } elseif ((($choice_f +1) %3) == $com_f) {
   echo $result[1];
  } else {
    echo $result[2];
  }
}
