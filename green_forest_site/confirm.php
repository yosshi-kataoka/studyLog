<?php

require_once __DIR__ . '/lib/escape_function.php';

session_start();
$form = $_SESSION['form'];

$title = '「お問い合わせ内容の確認|ガーデニングショップGREEN FOREST GARDENING(グリーンフォレストガーデニング)」';
$contents = __DIR__ . '/views/confirm.php';
include __DIR__ . '/views/layout.php';
