<?php
permission_user();
//load model
require_once('admin/models/posts.php');
if (!empty($_POST)) {
    page_update();
}

if (isset($_GET['post_id'])) $post_id = intval($_GET['post_id']);
else $post_id = 0;
$title = 'Sửa trang';
$post = get_a_record('posts', $post_id);
require('admin/views/page/edit.php');
