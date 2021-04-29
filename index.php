<?php

include_once 'UrlHelper.php';
include_once 'FormBuilder.php';
include_once 'SqlBuilder.php';
//$urlHelper = new UrlHelper();
//echo '<pre>';
//var_dump($urlHelper);
//$urlHelper->port;

$menuItems = ['about-us', 'contacts', 'blog', 'shop'];
//
//foreach ($menuItems as $item) {
//    $urlHelper->buildUrl($item);
//
//    echo '<div>';
//    if ($item == 'about-us') {
//
//        $urlHelper->setParams([
//            'page' => 2,
//            'scroll_to' => '#contacts'
//        ]);
//
//    }
//    echo $urlHelper->getUrl();
//    echo '</div>';
//}
//echo '------------------------';
//$form = new FormBuilder('post', 'index.php');
//$form->input('name', 'text', '', 'Name')
//    ->input('email', 'text', '', 'Email')
//    ->input('password', 'password', '', '*********');
//echo $form->get();



$db = new SqlBuilder();
$db->select('id, name')->from('products')->where('id',4);
$db2 = new SqlBuilder();
//$db2->select()->from('user')->where('id', 1);
$db->insert('user')->values([
    'name'=> 'arnoldas',
    'email' => 'email@email.com',
    'password' => 'admin123'
]);
$db->exec();
$db->update('user')->set(['password'=>'admin12312'])->where('id',3);
$db->exec();
//$db->delete()->from('user')->where('id',1);
//$db->exec();
//$db->update()->exec(); //pilna
//$db->delete()->exec(); //pilna
//print_r($db2->get());


