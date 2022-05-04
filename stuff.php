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

$file = 'chidieberesamuelprospervictorjerrylazarusisrealemmanuelnn';

$replace = ['single', 'GraceOnah', 'olivia', 'confidence', 'paulina', 'winne', 'jayne', 'chisom', 'j', 'tooMuch'];

libxml_use_internal_errors(true);
$dom = new DomDocument();
$dom->preserveWhiteSpace = true;
$dom->loadHTML($file, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
$xpath = new DOMXPath($dom);

$replaceMe = [];
$numberofwords = 0;


for ($i = 0; $i < $xpath->query('//text()')->length; $i++) {
  $node = $xpath->query('//text()')->item($i);


  $input = $node->nodeValue;


  $replaceMe[] =  str_word_count($input, 1);;
  // foreach ($replaceMe[$i] as $newreplace) {
  //   $numberofwords++;
  // }
}

// purge the array from stuff that is not a word
function purgeArrayWords($array)
{
  return array_values(array_filter($array));
}
echo '<pre>';

foreach (purgeArrayWords($replaceMe) as $key) {
  foreach ($key as $singleWord) {
    $numberofwords = $numberofwords + str_word_count($singleWord);

    $node->nodeValue = str_replace($singleWord . " ", $replace[$numberofwords - 1], $node->nodeValue);
  }
}

echo '<pre>';
echo   $node->nodeValue;
echo '</pre>';

// I will use this code in fututre or later
// while ($numberofwords > 0) {
//   $numberofwords--;
//   $random = rand(0, count($replaceMe) - 1);
//   $random2 = rand(0, count($replaceMe[$random]) - 1);
//   echo $replaceMe[$random][$random2] = $replace[$numberofwords] . " ";
// }

// // replace node text with new text (replaceMe)

// while ($numberofwords > 0) {
//   $numberofwords--;
//   $words_to_replace = purgeArrayWords($replaceMe);
//   $keys = count($words_to_replace); // random number between 0 and the number of words in the array
//   $node->nodeValue = str_replace($words_to_replace[$keys][$numberofwords],  $replace[$numberofwords], $node->nodeValue);
// }

// echo '<pre>';
// echo $node->nodeValue;
// echo '</pre>';

//rules
//remove null values
//notes:
//all the replacing words must be equal or more than the words you want to replace else you run into issues
// what I did
//I had to use array_filters() to remove empty arrays
//array_filters will preserve the original array keys so I had to use array_values() to reindex the array keys.//coding is fun 
echo $dom->saveHTML();
// echo $node->nodeValue = str_replace('nice', "notnice", $node->nodeValue);

// echo $dom->saveHTML();


// echo '<pre>';
// print_r( $replaceMe[0][0]);
// echo '</pre>';

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