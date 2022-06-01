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

$text = 'index.html';

$replace = ["ensouls", "flaggers", "lighterage", "happy", "Group", "heaven"];

libxml_use_internal_errors(true);
$dom = new DomDocument();
$dom->preserveWhiteSpace = false;
$dom->loadHTMLFile($text, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
$xpath = new DOMXPath($dom);

$replaceMe = [];
$numberofwords = 0;

$input = '';

for ($i = 0; $i < $xpath->query('//text()')->length; $i++) {
  $node = $xpath->query('//text()')->item($i);

  $pattern = '/[a-z0-9\.]+/i';
  $node->nodeValue = preg_replace_callback(
    $pattern,
    function ($matches) use (&$replace) {
      return $matches[0] = $replace[array_rand($replace)];
    },
    $node->nodeValue
  );
  // echo $node->nodeValue;
}

echo $dom->saveHTML();





// echo $result;

// echo $node->nodeValue;

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