<?php

$session = \Config\Services::session();
if ($session->get('username') === '') {
    $session->setFlashdata('Success', 'Ooops...Bạn chưa đăng nhập');

    return redirect()->to(base_url('login'));
}
// gabungkan semua bagian file
require_once 'head.php';
require_once 'header.php';
require_once 'menu.php';
require_once 'content.php';
require_once 'footer.php';
