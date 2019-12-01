<?php

// require_onceは指定したファイルを読み込む。requireとほぼ同じ。ファイルが既に読み込まれているかをPHPがチェックする
// requireは渓谷があるとスクリプトは停止する。includeとほぼ同じ。
// includeは警告はあってもスクリプトの処理は続ける
// https://www.php.net/manual/ja/function.require-once.php

require_once 'dog.php';
require_once 'cat.php';

echo getCrying();

// 実行
// http://localhost:8080/call.php
// Fatal error: Cannot redeclare getCrying() (previously declared in /Users/mm/Documents/project/php_basic/dog.php:4) in /Users/mm/Documents/project/php_basic/cat.php on line 5

// 同じ関数名を定義することは出来ない
// 名前空間を使うことで解決することができる
