<?php
//$playerと$comが等しければあいこ
//$player + 1 を3で割った余りと$comが等しければ$comの勝ち
//それ以外は$meの勝ち

$choice = $_POST ['choice'];

function janken($player, $com) {
    if ($player == $com)
    echo $result[0];
  } elseif (($player +1 %3) == $com) {
    echo $result[2];
  } else {
    echo $result[1]:
  }
}

//結果の配列
$result = array('あいこです', 'あなたの勝ちです', 'あなたの負けです',);

//出し手の配列,0=>グー、1=>チョキ、2=>パーを代入
$hand = array('グー', 'チョキ', 'パー');

//$comの出し手
$com = array_rand($hand);

//$playerの出し手
$player = $hand[];
