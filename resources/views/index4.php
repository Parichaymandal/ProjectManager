<?php
include 'simple_html_dom/simple_html_dom.php';
include 'class.database.php';
ini_set('max_execution_time', 300);
ini_set('memory_limit', '2048M');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "b";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,'SET CHARACTER SET utf8');
mysqli_query($conn,"SET SESSION collation_connection ='utf8_general_ci'");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





// $database   = new dataBase('user', 'password', 'database', 'host');



$html = new simple_html_dom();
$details = new simple_html_dom();
$innerhtml = new simple_html_dom();

// Load from a string
$main_url = 'http://www.prothom-alo.com';
$html->load( file_get_contents($main_url) );

//foreach($html->find('li.menu_color_') as $single_link):
//
//    if( 'http://eprothomalo.com/' == $single_link->find('a', 0)->href ) continue;
//
//    $innerhtml->load( file_get_contents( $main_url.$single_link->find('a', 0)->href ) );
//
//    echo '<h1>'.$single_link->find('a', 0)->plaintext.'</h1>';
//
//    # get an element representing the second paragraph
//    foreach($innerhtml->find('div.each') as $element):
//        echo isset($element->find('span.title', 0)->plaintext) ? $element->find('span.title', 0)->plaintext.'<br>' : null;
//        echo isset($element->find('div.summery', 0)->plaintext) ? $element->find('div.summery', 0)->plaintext.'<br>' : null;
//        echo isset($element->find('a.link_overlay', 0)->href) ? $main_url.'/'.$element->find('a.link_overlay', 0)->href.'<br>' : null;
//        $detail_link = isset($element->find('a.link_overlay', 0)->href) ? $main_url.'/'.$element->find('a.link_overlay', 0)->href:null;
//        echo isset($element->find('img', 0)->src) ? 'http:'.$element->find('img', 0)->src.'<br>' : null;
//        $detail->load(file_get_contents($detail_link));
//
//        foreach ($detail->find('p.alignfull') as $d):
//            echo isset($d->plaintext)? $d->plaintext:null;
//        endforeach;
//
//
//        echo '---------------------------------------------------------------------<br>';
//    endforeach;
//
//    // $insert_status = $database->query('write mysql here');
//
//endforeach;
$category_page = new simple_html_dom();
$sub_category_page = new simple_html_dom();

$paper_name = "প্রথম-আলো";
$category_id = 4;

$categories = $html -> getElementById('13');


foreach ($categories -> find('a.dynamic') as $category):

    echo $category->plaintext.'<br>'.'<br>';
    $category_link =  $main_url.'/'.$category->href;
    echo $category_link.'<br>'.'<br>';


    $category_page -> load(file_get_contents($category_link));

    $sub_categories = $category_page -> getElementById('secondary_menu');

    foreach ($sub_categories -> find('a.static') as $sub_category):

        echo $sub_category -> plaintext.'<br>'.'<br>';
        $sub_category_link = $main_url.'/'.$sub_category->href;
        $sub_category_page -> load(file_get_contents($sub_category_link));

        foreach($sub_category_page->find('div.each') as $element):

            echo isset($element->find('span.title', 0)->plaintext) ? $element->find('span.title', 0)->plaintext.'<br>' : null;
            $english_title = $element->find('span.title', 0)->plaintext;

            echo isset($element->find('div.summery', 0)->plaintext) ? $element->find('div.summery', 0)->plaintext.'<br>' : null;
            echo isset($element->find('a.link_overlay', 0)->href) ? $main_url.$element->find('a.link_overlay', 0)->href.'<br>' : null;
            $detail_link = isset($element->find('a.link_overlay', 0)->href) ? $main_url.'/'.$element->find('a.link_overlay', 0)->href:null;

            echo isset($element->find('img', 0)->src) ? 'http:'.$element->find('img', 0)->src.'<br>' : null;
            $image_path = $element->find('img', 0)->src;

            $details->load(file_get_contents($detail_link));

            $detail = $details -> find('div.right_part',0);
            $english_description = "";

            foreach($detail->find('p') as $d):
                echo isset($d->plaintext)? $d->plaintext:null;
                $english_description = $english_description.$d->plaintext;

            endforeach;

            $sql = "INSERT IGNORE INTO news (Paper_Name, category_id, english_heading, english_description,image_path) VALUES ('$paper_name', '$category_id', '$english_title', '$english_description', '$image_path')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }


            echo '<br>'.'---------------------------------------------------------------------<br>';
        endforeach;
        echo '<br>';


    endforeach;
endforeach;

$conn->close();


