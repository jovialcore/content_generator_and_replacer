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

$file = 'index.html';

$replace =["ensouls","flaggers","commodifies","leachiest","heiling","intimidate","catmint","unabashedly","toxigenic","he","analysed","puttyroots","mordant","rubbishes","remonetized","cometary","bevel","distractive","sabbed","faddisms","nudities","animosities","hoars","gutsily","singsongy","midsole","pastoriums","ligulated","mainliners","peony","titrable","descendant","taborin","ambulatories","truckmasters","smiercases","penuriousnesses","uintahite","slatches","cautioners","dragonfly","rattail","token","imperialistic","pikestaff","pharmacodynamic","compilation","skean","trancelike","radiometry","localizer","snarkily","treacherously","rears","flashcards","divisivenesses","colonists","flexuose","blusterer","infield","harks","unsociableness","unparted","niobium","parasexuality","commodious","bettors","precomputed","fremituses","garottes","begloomed","birdman","agonistes","melongene","weatherglasses","reenacting","dragees","dairy","fudged","milty","imagining","dourahs","confectioneries","humanely","belatedness","intension","pakora","datival","luller","postlaunch","wambly","intercalating","dermatologic","shabbatot","ascendency","exempt","aider","glycyl","floorless","dodder","circumstantiate","curries","boxwood","dirling","ichthyofaunae","fraternizations","defoams","ascendible","fueler","catcaller","morpheme","gelatinizations","redliners","entreating","samshus","periodicities","absolvents","woofs","gimleted","iffinesses","derm","ichnite","shortstops","kinesthesia","fadeins","schlockiest","neutralises","unmade","theatricality","budlike","discography","leching","idealogy","subgenus","deco","radish","becrowding","noncelebrities","slatterns","brecciated","mignonette","greenishnesses","foreshowed","sinopie","repass","acetified","bogyism","mussel","illogicality","emeritas","gradualness","bosket","educable","grounder","prothoraxes","jeremiad","concatenations","blamed","yeah","unrecognized","manure","threw","refs","diarrheic","countermarching","misbelieved","oiler","scungillis","galvanometers","laminae","flapjacks","befooling","illinium","playboys","tympana","paraboloidal","compromised","trained","airmails","clepsydra","consociating","lividity","speleological","shakoes","calquing","retrodiction","chemisettes","drum","betattering","anosmic","mesmerist","reexposures","benightednesses","maiasaurs","glabrate","ripsnorting","ilexes","timelessly","grot","truckage","splashboards","fellowshipped","exits","check","glassily","revenant","dirk","palooka","scandalised","enoughs","melodeon","elegist","arsenous","lounged","isogeneic","outreckon","slipslop","krewe","lasses","ducktails","obscurest","promisingly","dollar","mucidity","preloading","diobol","jiggier","refinishers","desexualization","blackgum","recalibration","pulverizer","pourparlers","kumyses","grinned","traitor","fumeless","proctitides","cousinries","roundup","anaemic","wires","percipiently","grumpily","dilemmas","instructress","surgeries","turbocar","mulcting","attributional","burrito","radicands","spermatocytes","houseparent","overprogramed","outwore","pupfish","inquisitors","cirsoid","resurgences","mimes","synecdochically","galvanize","squiggling","farfels","unremembered","multigroup","inexactness","feezes","rhododendrons","pensee","uncurably","gawkies","refounds","phenoxy","chewer","knappers","burb","deviousness","teutonizing","dairymaids","dolomitic","subgum","complicacy","viticulturists","rouleau","salient","remixes","punctual","skunked","cardamons","veils","protostelic","approximately","grittily","misleading","spades","enophiles","bibliophilic","realer","hobnobbing","saloons","crimped","pecten","charted","detribalized","printheads","quoit","lunges","valise","countersunk","overstimulated","fontina","pollywogs","earnest","pettifoggery","overanxieties","pleather","subdwarfs","barographs","begloom","bights","prefabricating","osteoses","turbary","braving","discotheques","quarreled","echidnae","whereunto","sobered","plasticizations","wolfram","puerilities","marshmallowy","beats","cranes","occidents","signs","adept","shinier","honeying","honeycreeper","stoutly","boughs","haulage","remuneration","bureaucratized","auctorial","tardier","rerewards","presolves","alexia","deuces","triplet","yapok","effectuate","objurgations","quotability","waterproofers","unending","crypt","diestrums","epoxies","gaucherie","fidget","piteousness","agency","reactivenesses","gitted","luminesced","mannishness","gloria","oscillate","founts","incomings","nonoral","inhabitations","dibenzofurans","harborers","whoever","bedriveled","reminiscence","dona","reconstructible","superablenesses","hermetists","chlamydes","korun","galumphing","overseers","hypostatization","hookworms","illuviating","copolymer","customising","downhaul","myelines","decimally","beshrewed","courtliest","champignons","plumose","sterilants","eggbeater","radiographed","lacquered","hypoblast","condylomata","donnas","amounts","acceptableness","larrikin","cirrocumuli","pedantically","squall","pourboire","umpired","unoccupied","overhonoring","crossbeams","unpressed","esterase","shipped","serosa","popinjays","synchronisation","monometallic","electroplating","auction","beedi","queueing","unclarified","nonpolitically","pastorals","sympathize","copalm","horseshoe","syren","helming","hafter","haphtarot","vicegerent","intertroop","fidgeted","squamulose","millepeds","alphabetical","teleshop","martyrize","surrogated","nonintercourses","avariciousness","lances","suzerainties","piked","sleepwalked","adzuki","wasts","dethronements","limo","zeolites","desulfurs","poignance","amercers","emoluments","vigorishes","gracilis","seesaws","ineffablenesses","desalts","stegodons","ionosondes","sniggles","nonindigenous","docketing","newsreel","bibulousnesses","overnourished","hydrogenate","polynomials","translators","seized","reincorporated","atlatl","silicons","medicos","outbulges","dodging","chlamydospores","elenchi","etude","clauses","nastiness","circumcircles","punchinello","lancet","alterable","lambed","redefying","evitable","czarevnas","misbalanced","eruditions","bleariest","franklinite","aggressor","genderized","chubs","conferred","pilaus","favism","requiem","teleshopped","feuilletons","majestically","endearingly","subtlest","paparazzo","horribly","shoebox","divinatory","nonminorities","overprice","mel","goaltenders","envenoms","roistering","imaginary","nicker","reflew","thiabendazole","nondomestic","thingumajig","radicchio","ensigncies","rehandling","scummily","carted","exonucleases","underbidding","outpunched","sclerotial","pedophilias","prebidding","lyingly","seedman","cenobites","autographies","cholates","cyclosis","flowered","causewaying","ginner","warmongering","bioethical","severer","glutathiones","kheths","physicals","uncontracted","masticatory","pumpkins","attainability","passepieds","safes","thrillers","sissy","clues","couch","foxy","preview","tryptamine","kiwifruit","chivalrously","panfishes","envelopment","coneys","reposition","cooperies","stammering","unambitious","monodists","jauking","nazified","peins","resaluted","interflows","hosing","resailed","rifles","options","retentiveness","disquisition","commonweal","misraised","robustest","bituminizes","disc","herringbones","brazes","omophagia","knuckler","pteridine","wheelworks","coderives","antiquity","colone","porticoes","acariasis","southernnesses","crankcases","herblike","unappetizingly","qat","expediters","sailfishes","nonrival","legislate","debilities","terrifies","retreatants","noncyclical","dehumidify","intracardiac","waterfall","lauwine","concubine","expressionistic","ductile","sunups","orientals","sharia","macromere","undersign","surgeonfish","linkslands","monosomic","carnivory","capstone","withholds","rotatable","ruthfully","accidence","arboreta","centillions","humdrum","handstamp","complaisances","snooty","adjoined","intracellular","scrabbled","leukons","tannoys","positivist","blites","nescient","reassail","retentivenesses","unburied","withal","kindlers","concealing","hirers","aneuploidies","malihini","honking","workably","spritzers","antilogarithm","pantalets","powerless","childhood","buffed","details","inflows","hysteresis","sequela","dogsbodies","disincline","hilariously","reconviction","bogie","circumlocution","unissued","reproach","schmeered","syenite","nugatory","chromaticisms","pantalone","bacteremia","gallerygoer","upturned","telecommuting","apertured","gramicidins","city","spasms","proclaims","reinterpret","hypocycloid","keratoplasties","menhirs","overman","elegy","dueling","reprography","judging","ovalnesses","kerne","contamination","barfed","pompadoured","toploftical","meltingly","iontophoretic","straighter","uninhibitedness","westbound","continued","klephts","precocity","navigators","solemnity","laureated","biont","dumka","patronising","geekier","cinnabarine","sweltering","vestee","spinage","moviedom","intransigence","slieves","forkful","notability","demonologists","hamburg","palliator","precolonial","homestretch","mecca","psalmody","shiners","wellaway","saimin","kuru","planche","sociolinguist","histoid","crankish","extirpated","breakwall","grudging","stressful","grass","euphemizer","tirling","liposuctions","holinesses","exiles","frowzier","mayst","paleographical","exercycle","frater","hurl","bodybuilder","saleswoman","dieffenbachias","analogist","inclemencies","complement","fireplaced","chaparejos","stopoffs","misshod","aphylly","desuetude","metathetic","defeminizing","yohimbines","sandfishes","contrail","borks","delusion","vampiric","subtracts","pereons","myope","undesired","decillions","unbreachable","bastardise","forsook","flintlock","vulgarizer","didjeridoo","decontaminator","caecilian","doylies","presurvey","arthroscopic","untucked","wifeys","zinger","bubblehead","troweling","briards","literatim","efflorescing","hymnaries","medievalists","kittened","postillion","extrapolations","whaleboats","canalicular","reclusively","mutants","glycosylation","postponers","chachka","plankters","dewaxing","emmenagogue","metalworker","hyoscyamine","oaths","multiplant","colorfulnesses","kalsomines","kneesocks","grandstanded","controllers","curriers","sightseers","frizziest","micros","fauna","handsbreadths","outrange","garbed","freehandedly","insurmountably","osmiridium","riposted","hovelled","toller","modeming","pinching","metalizes","salvable","eyestone","minidresses","congregate","folksiness","overmodest","alkyls","whoredoms","misfit","ruggeder","hobbling","regressiveness","cella","ogives","frescoists","hematophagous","brave","bubalises","cloven","doggishness","obligees","servanthoods","wearish","updive","lovesick","yobboes","sourdough","infra","reigned","antetypes","turnhall","geochronologist","nettles","nascence","sentries","pokes","cistronic","doggies","figureheads","shadfly","translocated","curacoa","indecenter","tikka","seagulls","unkinks","retallies","intriguing","hear","pupils","clarinettist","concha","airport","maintain","peebeens","anarchies","phoniness","tensible","datebook","hollo","extirpator","thecodont","strewing","downbeats","saintlike","carbonizations","reemphasis","nest","geladas","emmets","cladogram","stonishing","wits","resprings","talced","materiality","dissociability","gurgling","curtsy","decerebrate","teethe","asyndeton","espousers","denounces","linearizing","livelihoods","clapped","noncandidacy","symbolising","ethylenic","lithospheric","washrooms","gastroduodenal","woolgatherings","ademptions","evulsed","jazzer","embroidered","guileless","orienters","commingled","dominical","unwasheds","irrefragability","bemaddened","arrogate","melodias","syllogize","gnathal","unparliamentary","dahlia","recommitment","echolocations","faggoted","costar","regurgitated","agnostics","anorexy","andradites","grapier","precancellation","contrivers","glyceride","pitchblendes","roundworm","mollusca","momma","souvenirs","hangnails","copyreads","officiation","millenarianisms","agly","peaceniks","underseas","formatters","especial","munches","monounsaturates","hairstyling","broider","bullfrog","foreordinations","zilch","grueler","mutations","outboxes","disjunctures","lethargy","pontificals","resid","leftover","girthed","whooplas","psychogenesis","jocks","extradition","antitheses","palets","cellulite","busynesses","vex","trones","brattiest","hardboards","padnag","didjeridus","tristfully","mountaineers","abysses","diarrhea","defalcated","votive","superstar","cloddishnesses","pugginesses","missionization","mooches","nonathletes","psychotics","helicline","holistically","cambist","tearstain","precognitive","wallpapering","wifely","sayyid","equivocalnesses","xyloid","hibernated","preordinations","relativity","acclivity","caramelise","formalizing","preconcerting","thymy","faraday","intertidal","kennelled","beefeaters","knawels","epical","stillmen","forasmuch","heliports","neumatic","subduals","satcheled","apprenticing","quinines","kvas","lusty","hydrozoans","fewness","monocled","custard","misrelied","umiack","solarium","rousing","murmurs","recemented","anyway","accessorised","calderas","obsolescences","neglects","rapid","agnation","affiliate","timbrelled","signages","princeliest","qualmishness","surveillance","communards","villeins","virilize","intending","concentered","mueddins","depeople","yarding","civility","revengefully","pulverizations","tromped","gonorrheas","rhinestone","predatisms","floppy","spaceward","innumerable","sparger","emanator","sputtering","empathized","downlight","grabbling","jounces","enfevered","secantly","bouldering","beverage","paeons","postembryonic","pseudomorphs","underactive","birefringence","unstuffy","arborization","hemodilution","credenzas","guiltier","frugged","freeware","tabulable","leucins","subassemblies","copublished","crackback","heterophil","baited","toxophily","fluviatile","cavalierly","walkout","silicifying","ungarbed","circumscription","rebilled","nonvolatile","misalter","jukes","daikering","scathing","trudgeons","inscription","eponymy","clockers","prospected","fiberfill","allowances","reproducibles","pinbone","bandy","moisturizer","inthrall","bookmark","atropins","oligodendrocyte","idly","strapped","shingles","sleeted","characters","shock","merchandizing","initiative","reticulate","simonists","headend","simulate","flytiers","polity","chinning","oilcamps","lyophilizations","overattention","embonpoint","quaestor","schoolmarm","bucolics","wos","strontians","wreathe","tarweeds","limbo","lamellicorns","freshen","pepperers","nigrosins","kaleyards","harpsichords","ultrasharp","creviced","agapai","refilled","machinates","cockleshells","coleoptiles","superably","intermontane","begalls","confidingly","uxoricide","tendriled","pulmonates","specificity","unteaches","orismological","penname","hyperhidroses","trudgers","wimpishnesses","grubbiest","obstetrician","severs","belatednesses","locksmithings","skunking","horizons","sulkier","bullyboys","roughriders","asyllabic","orienting","striction","cheerless","discs","outbarked","eschatological","reinstatements","downhauls","colby","houseperson","embracive","arrogator","gematrias","yodh","beclamors","vagotonias","reiterates","paella","harbored","miracle","teaberry","frizz","enterics","revuist","eclipsises","oughting","doodlebugs","sloughing","monophthongs","despisers","soritic","litterers","mammocked","moldinesses","phylum","dispiriting","dunked","literately","wickings","pavlova","processional","chrysotile","clarinets","tetrahedra","latticed","borosilicate","outorganized","stylisers","picowave","avalanches","subceilings","expectable","togged","overboiled","rondelet","sustentative","poechores","outbullied","lineless","ballyhooed","selvage","coroner","presurveyed","pinnatifid","outfabled","interloops","greenmailers","spookeries","purpure","good","hiltless","salvers","peripherally","photocomposes","hypersurface","neglecters","ennoblements","evangelization","devel","burgled","terry","odorized","concessioner","trouveres","excitons","intwining","teasellers","dihedron","overcommitted","smokepots","richnesses","unrequited","spotlessness","overasserting","smallclothes","gelder","exactions","tailbones","gooseherds","azeotropes","tarantism","holeless","greenhouse","nonmoney","benign","teocalli","clachans","texas","coenamors","crenated","linurons","scarifier","cyclotomic","attestants","unslings","universals","drillers","succinylcholine","encroachments","nurd","playfellows","bursted","sailor","rostra","semigroup","deflation","unkindliest","leg","neurohumor","mesenteries","rabbets","blameful","applique","mantelshelves","spaceman","removablenesses","voidableness","siganid","icefalls","periapses","secretions","balas","superheats","baaed","eradicators","unsurpassable","silverfish","havening","disembark","platypi","reelecting","diazotizations","smirched","revocations","tininess","perkish","pastern","muckrakers","incapacitation","invigorate","hark","fetidly","wainwright","dyslexias","praetorship","wrassling","dynasts","menus","yokozuna","warlords","myeloid","variableness","psaltries","crumblier","assenters","fluctuate","shyly","bowdlerizes","depleter","shakable","boatbuildings","outpreened","conchy","recedes","embryogenesis","sennas","chromosphere","waxweeds","cambial","signallers","bullpout","runways","linebacking","constringe","zanier","fimble","mailbox","swounds","clangored","loran","unworldlier","vespertilian","enterocoele","rad","titterer","limy","infeoffed","summoners","staggerer","overcompensated","gallica","toolmaker","presurgery","intracranially","cicerone","intracardial","pterygial","detente","licencer","cladophyll","loggias","conveniencies","gamine","smothering","orthopedics","cystoscopy","overseeds","helotage","inconsiderable","dogwatches","recasts","silicones","underhairs","variates","bugginess","unbear","valuators","trichoid","helminthic","ringlet","nutation","goffered","withdrawnnesses","catties","sciolist","computerphobia","combinative","barde","hosel","maze","elongated","testicles","madness","wafflers","allotetraploid","transient","signalizations","burler","decocting","monocotyledon","eyasses","suppliant","nude","suzerain","glutaraldehyde","committeemen","jezails","worry","vimina","crackdown","abstrusenesses","visoring","pneumonectomy","seismographer","aulic","extralogical","hotting","seining","repeg","homebody","combinatory","multiplies","arsons","sling","tousling","what","espionage","payolas","smalls","autacoid","unavoidable","hoglike","multicurie","unfavorableness","sameks","shunnable","starker","anthraquinones","trimethoprims","leakage","parroter","phytins","arthrosis","bashfulnesses","misesteeming","hellion","wagons","commercially","trophoblast","beadiness","tussehs","hypocenter","ultraradicals","tersenesses","dieffenbachia","featurettes","reformate","overfree","antisera","disparting","byrled","rubella","flocculators","thereinto","tiddlywinks","couvades","goloshes","manoeuvre","crushing","fulgurites","morels","trivial","prefixal","favorer","congruously","calamary","nonobjectivity","bacteriocin","areca","absences","airheads","mumbly","hogties","conium","ritzier","nitrocelluloses","senescences","kist","indorser","sleety","submediants","radicalising","meadowsweet","content","dekes","expiation","polemize","hierophants","conservation","crimsoning","scrapings","malapropists","firetrucks","outlawing","nicknamer","lighterage"];

libxml_use_internal_errors(true);
$dom = new DomDocument();
$dom->preserveWhiteSpace = true;
$dom->loadHTMLFile($file, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
$xpath = new DOMXPath($dom);

$replaceMe = [];
$numberofwords = 0;


for ($i = 0; $i < $xpath->query('//text()')->length; $i++) {
  $node = $xpath->query('//text()')->item($i);


  $input = $node->nodeValue;


  $replaceMe[] =  str_word_count($input, 1);
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

    $node->nodeValue = str_replace($singleWord, $replace[$numberofwords], $node->nodeValue);

  }
}

echo '<pre>';
echo  $node->nodeValue;
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
// echo $dom->saveHTML();
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