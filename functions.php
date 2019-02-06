<?php
// サイト上部の空白をなくす
// メニューがデフォルトである為
add_filter( 'show_admin_bar', '__return_false' );