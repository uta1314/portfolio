<?php
// エスケープ処理をe()で利用できるようにする
require_once './parts/Encode.php';
// 検証のためのクラス
require_once './parts/MyValidator.php';

$v = new MyValidator();
// 必須入力チェック
$v->requiredCheck($_POST['mail'], 'メールアドレス');
$v->requiredCheck($_POST['name'], 'お名前');
// 文字数チェック
$v->lengthCheck($_POST['mail'], 'メールアドレス', 32);
$v->lengthCheck($_POST['name'], 'お名前', 11);
$v->lengthCheck($_POST['textBox'], 'テキストボックス', 300);
// メールアドレスが正しい形式化をチェック
$v->regexCheck($_POST['mail'], 'メールアドレス', '/^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/');
$v();

// $_POSTで受け取ったい内容をエスケープ処理
$mail = e($_POST['mail']);
$name = e($_POST['name']);
$textBox = e($_POST['textBox']);

header("Content-Type:text/html; charset=UTF-8");
mb_language("japanese");
mb_internal_encoding("utf-8");

// 送信先メールアドレス
$myMail = "yuta1446689@gmail.com";
// タイトル
$sub1 = "[自動送信]送信が完了しました";
// ユーザーのメールアドレス
$mailTo = $mail;

// メール本文
$message = "送信完了のご案内\n";
$message .= "\n";
$message .= "内容の確認-------------------\n";
$message .= "\n";
$message .= "お名前: ".$name."\n";
$message .= "メールアドレス: ".$mail."\n";
$message .= "テキスト: \n";
$message .= $textBox."\n";
$message .= "\n";
$message .= "-----------------------------\n";
$message .= "\n";
$message .= "3日以内に返信がない場合は、お手数をおかけいたしますが、\n";
$message .= "下記メールアドレスまでご連絡ください。\n";
$message .= "\n";
$message .= "yuta1446689@gmail.com\n";
$message .= "\n";
$message .= "\n";
$message .= "このメールは自動送信です。\n";
$message .= "お心当たりのない方は、ご放念ください。\n";
$message .= "\n";

// mb_send_mail(送り先メアド,タイトル,メッセージ内容,"From".送り元メアド);
$success1 = mb_send_mail($mailTo, $sub1, $message, "From:".$myMail);
// 送り先メアドと送り元メアドを交換
$success2 = mb_send_mail($myMail, $sub1, $message, "From:".$mailTo);

// 送信メッセージをjsに戻す
header('Content-type: application/json');
echo json_encode("送信が完了しました");