<?php

//include_once 'UrlHelper.php';
//include_once 'FormBuilder.php';
//$urlHelper = new UrlHelper();
////echo '<pre>';
////var_dump($urlHelper);
////$urlHelper->port;
//
//$menuItems = ['about-us', 'contacts', 'blog', 'shop'];
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
//$cars = [
//    1 => "volvo",
//    2 => "VW",
//    3 => "BMW"
//];
//$form = new FormBuilder('post', 'index.php');
//$form->input('name', 'text', '', 'Name', '', '', '')
//    ->input('email', 'text', '', 'Email', '', '', '')
//    ->input('password', 'password', '', '*********', '', '', '')
//    ->select('name', 'cars', $cars, 'Cars')
//    ->textarea('name', '', '4', 50);
//echo $form->get();


include_once 'SqlBuilder.php';


$db = new SqlBuilder();
$db ->select('id' , 'name')->from('products')->where('id','4');
$db2 = new SqlBuilder();
$db2->delete()->from('products')->where('id' , '5');

$db3 = new SqlBuilder();

$values = [
    'name' => 'Batai',
    'sku' => '123',
    'price' => '12',
    'cost' => 4
];

$db3->update('products' )->set($values)->where('id',5);



$db4 = new SqlBuilder();

$db4 ->insert('products')->values($values);
echo $db4->getSql();