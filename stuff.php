<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



use PHPHtmlParser\Dom;
// Example 1: -----------------------------------------------------------------
// source:
// https://leanpub.com/the-essentials-of-object-oriented-php
// Context:
// Create a car object where you can fill fuel, and calculate
// the gallons left in the car if X is driven:

// class Car
// {
//   public $tank;
//   // Add gallons of fuel to the tank when we fill it
//   public function fill($float)
//   {
//     $this->tank =  $this->tank + $float;
//     return $this;
//   }
//   // subtract gallons of fuel from the tank as we ride the car
//   public function ride($float)
//   {
//     $miles = $float;
//     $gallons = $miles / 2; // one gallon per mile
//     $this->tank =  $this->tank - $gallons;
//     return $this;
//   }
// }

// class dummyReplacer
// {

//   public $file;
//   public $newcontent;



//   public function __construct($file, $newcontent = "loprem ipsum")

//   {
//     $this->file = $file;
//     $this->newcontent = $newcontent;
//   }

//   public function replace()
//   {
//     $file = $this->file;
//     $oldContent = file_get_contents($this->file);

//     $doc = new DOMDocument();
//     $doc->loadHTML($oldContent);

//     echo $doc->saveHTML();

//     file_put_contents($file, $Content);
//   }

// }



//my thoughts
//use dom to turn the html to string
//use string replace to replace the text
//use dom to turn the string back to html (?)
//use file_put_contents to write the new html to the file

//the  other libraries too are useing regex too like simpleHtmlDom
// Aparntly, looks like striping them tags using strip_tags is the best way to go about it.





// $dom = new DOMDocument();
// $dom->loadHTML("<html><body><div>hello</div><div>bye</div></body></html>");
// $nodes = $dom->getElementsByTagName("*");

// foreach( $nodes as $node ) {

//      if ($node->tagName=='div'){
//       $node->nodeValue .= " new content";
//     }
// }
// $content = $dom->saveHTML();
// echo htmlspecialchars($content);

// foreach ($nodes as $node) {
//     if ($node->tagName=='div'){
//       $node->nodeValue .= "new content";
//     }
// }

// $content = $dom->saveHTML();
// echo htmlspecialchars($content);Uncaught Error: Call to a member function getElementsByTagName() on bool in /o

$txt = '<html><body><div class='ff' >hello guys love you html is the new word I want to replace in this new way </div>salah boom<div>bye</div><div>abigail</div>fh jovaial</body> <script>It is well with my soal </script></html>';

$replace  = 'nice to meet laughter hate ugly beautiful sad ';

libxml_use_internal_errors(true);
$dom = new DomDocument();
$dom->preserveWhiteSpace = false;
$dom->loadHTML($txt, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
$xpath = new DOMXPath($dom);
// $check = [];

$replaceMe = [];
$replacer =  explode(" ", $replace);

for ($i = 0; $i < $xpath->query('//text()')->length; $i++) {
  // $node = $dom->getElementsByTagName('*')->item($i); query('//text()')

  $node = $xpath->query('//text()')->item($i);

  $input = $node->nodeValue .= " ";

  $replaceMe[] =  str_word_count($input, 1);
  foreach ($replaceMe[$i] as $newreplace) {
    echo '<pre>';
    print_r($newreplace);
    echo '</pre>';
  }


  // array_push($search,  preg_split('/ +/', $input, null, PREG_SPLIT_NO_EMPTY));


  //$dom->nodeValue =  preg_replace('/([A-Z+a-z])\w+/', $replacer[$i], $explodee);
}
// var_export(preg_split('/ +/', $input, null, PREG_SPLIT_NO_EMPTY))
// echo '********************<pre>';
// print_r($replaceMe);
// echo '</pre>';
// echo htmlspecialchars($dom->saveHTML());


// $txt = '<html><body><div>hello</div><div>bye</div></body></html>';
// $search = 'bye';
// $replace  = 'nice';

// libxml_use_internal_errors(true);
// $dom = new DomDocument();
// $dom->loadHTML($txt, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
// $xpath = new DOMXPath($dom);
// $check = [];
// for ( $i = 0; $i < $xpath->query('//text()')->length; $i++ ) {
//     $node = $xpath->query('//text()')->item($i);
//     $explodee = $node->nodeValue .= " ";

//    array_push($check,  explode(" ", $explodee)[0]);
//     if ( $node->nodeValue == $search ) {
//         $node->nodeValue = 'nice';
//     }
// }
// echo htmlspecialchars($dom->saveHTML());

// echo $check[0];


// foreach ($xpath->query('//text()') as $text ) {
//   if (trim($text->nodeValue)) {
//     $explodee = $text->nodeValue .= " ";
//     // echo  $text->nodeValue;

//     $string_to_replace = explode(" ", $explodee);


//     $text->nodeValue = str_replace($string_to_replace[$key], $replace, $text->nodeValue);
//   }
// }
// echo htmlspecialchars($dom->saveHTML());
//  $exp = 'hellobye';
//  $exp2 = strval($exp. " ");
// echo $exp2;

//next is to search any word 

//([A-Z+a-z])\w+ best match for the word

?>

<!DOCTYPE html>
<html>

<head>
  <title>PHP</title>
</head>

<body>

  <form action="" method="POST">
    <input type="file" name="file" id="file">
    <input type="submit" name="submit" value="submit">
  </form>


</body>

</html>