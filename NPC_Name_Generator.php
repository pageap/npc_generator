<?php
$link_address1 = 'NPC_Name_Generator.php';
echo "<a href='$link_address1'>NPC_Name_Generator</a>";

$link_address2 = 'Monster_Creator.php';
echo "<a href='$link_address2'>' ' Monster_Creator</a>";

$link_address3 = "https://monsterscalingtool.pythonanywhere.com/";
echo "<a href=$link_address3> ' ' '5E Monster Scaling</a>";
/*
error_reporting(0);
if(($_POST['submit']))
{
    //this works for 1 enrtry only!
    $name1 = $_POST['name1'];
    $name2 = $_POST['name2'];
    $name3 = $_POST['name3'];
    $name4 = $_POST['name4'];
    $names = array("1" => "$name1",
                    "2" => "$name2",
                    "3" => "$name3",
                    "4" => "$name4");
    $random = rand(1,4);
}

?>
<html>
<form action= "NPC_Name_Generator.php" method="POST">
    Enter Name: <input type="text" name="name1" value"<?php echo $name1 ?>"><br>
    Enter Name: <input type="text" name="name1" value"<?php echo $name1 ?>"><br>
    Enter Name: <input type="text" name="name1" value"<?php echo $name1 ?>"><br>
    Enter Name: <input type="text" name="name1" value"<?php echo $name1 ?>"><p>

    <input type="submit" name="submit" value="Pick One!">
</form>
<?php
    echo $names["$random"];
</html>


?>
</html>

*/

?>

<?php
function randomName()
{
    $names = array(
        'John',
        'Mat',
        'Ian Hitt',
        'Cleades Simoes',
        'Kaiet Lanctot',
        'Hipponax Poulet',
        'Deigenhardus le Roux',
        'Ingelrandus Vandervliet',
        'Ilberd Zerillo',
        'Derkylos Ruge',
        'Foulque Giorgiou',
        'Costan Grandet',
        'Zeuxis Morra',
        'Canute Feitor',
        'Henriet Bock',
        'Henricus Vadeki',
        'Faldron Havelange',
        'Eiffe Van Rhyn',
        'Mourice Kronburger',
        'Conanus Di Biagio',
        'Hermeros Ruimschoot',
        'Triton Fried',
        'Ronald le Petit',
        'Sindo Buder',
        'Waldew Breinlich',
        'Simo Schuncke',
        'Chalcodon Califano',
        'Alard Settignano',
        'Speciosus Cros',
        'Cannabas Vasseur',
        'Alkiphron Muratoni',
        'Aigulf Lehnich',
        'Wy Benscheidt',
        'Godobald Bollaert',
        'Scyllias Van Vlissingen',
        'Parthenius Buytaert',
        'Sewallus Floris',
        'Bruiant Memmoli',
        'Alcaeos Soetens',
        'Hallie Larkowski',
        'Alan Getty',
        'Alison Hitt'   
    );
    ?>
    <html>
    <body>

    <p><br><b>The Name is: </b></p>
    </html>
    <?php
    return $names[rand (0 , count($names) -1)];
}
?>
<html>
<head>
<style>
body
{
    background-color: grey;
}
</style>
</head>
<body>

<form action = "NPC_Name_Generator.php" method="POST">
   <h3>Welcome to NPC Name Generator</h3>
    <img src= https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbSfzjVLijiTFd9sn2F46mdMA49xUWLljEXA&usqp=CAU ><br><br>
    <input type="submit" name="submit" value="Whos Your NPC!">

    </form>
    </body>
<?php
//List Race names and put them in $race
print randomName();
function randomRace(){
    $race = array(
        ' Human ',
        ' Elf',
        ' Dwarf',
        ' Dragonborn',
        ' Gnome',
        ' Half-Elf',
        ' Halfling',
        ' Half-Orc',
        ' Tiefling',
        ' Orc of Exandria',
        ' Leonin',
        ' Satyr',
        ' Goliath',
        ' Genasi',
        ' Aarakocra',
        ' Firbolg',
        ' Bugbear'
    );
    //displays race in html text
?>
    <html>

</form>
    <body>

    <p><br><b>The Race is: </b></p>
    </html>
    <?php
    return $race[rand (0 , count($race) -1)];
}
print randomRace();
//100 different quirks and flaws from dnd beyond webpage
function randomQuirk(){
    $quirk = array(
        'You’re a vegan, and make sure everyone you meet knows.',
        'You’re obsessed with personal hygiene.',
        'You don’t like people you don’t already know. People can still make it into your good graces as you get to know them.',
        'You hate getting wet. So much so, you can’t even remember the last time you bathed.',
        'You actively avoid words with the letter S, due to a lisp you find embarrassing.',
        'You scratch your right ear whenever you lie.',
        'You can’t stand green beans/potatoes/rice, to the point where you can’t eat anything that has even touched it on the same plate.',
        'When someone makes you flustered, you punch their shoulder.',
        'Whenever something surprises you, you get hiccups.',
        'You start crying after any adrenaline drop (a fight ends, you get startled…). People mistake this for sadness, but it’s just a bodily function.',
        'If you yell more than a few words, your voice gets hoarse. You avoid yelling, therefore people just assume you are always calm and collected.',
        'You compulsively scratch (roll 1d4): 1. the nape of your neck; 2. your scalp; 3. your lower stomach; 4. your nose.',
        'You bite your fingernails/pick your nose.',
        'Whenever you cry, you try to catch the tears with your tongue.',        
        'You don’t notice the volume of your voice, often embarrassing your companions in social gatherings.',
        'You always have to one-up people when it comes to (roll 1d4): 1. how powerful you are (physically or magically); 2. your sexual prowess/achievements; 3. how good of a friend you are; 4. how bad you have/had it.',
        'You have a mother/father/sister/brother complex, and always love/hate anyone resembling them.',
        'You chew with your mouth open.',
        'You pick between your teeth for leftovers with your fingers, and flick them away.',
        'You insist you’re ambidextrous, although you clearly aren’t. You will go as far as using your off hand to ‘prove’ it, and always make vapid excuses for your shortcomings with it.',
        'You claimed to know [obscure language] once to impress someone, and now hope never to meet someone whom actually speaks it.',
        'You believe in love at first sight, and practice what you preach! You become instantly enamored with the first attractive person you see in a town.',
        'No matter how savvy you are, you can never tell when (roll 1d4): 1. someone you aren’t into is hitting on you; 2. someone rejects you politely without firmly saying no; 3. someone compliments you to be polite; 4. someone tries to change the subject of off embarrassment rather than dishonesty.',
        'You always “correct” people about the pronunciation of spells and anything related to arcana, always putting the emphasis on the wrong syllable. For example saying “Maygeek mysle” instead of magic missile.',
        'You try to fit in with other races by trying to uses their terminology and accents as well as believing in the stereotypes given to that race which just makes you come off as condescending and racist.',
        'The more people there are, the more quiet you are.',
        'You get extremely defensive when someone disagrees with you.',
        'You panic when you are suddenly put into the spotlight.',
        'You just can’t stop talking about your preferences. You always have to give your opinion, even to strangers.',
        'You can’t remember people’s faces well.',
        'You don’t have a censor, and always let people know exactly what you think.',
        'If some says any number lower than 8, your must pass a willpower check or keep counting to 8.',
        'You are very modest, and must cover everything but your head whenever possible. If someone were to see you without sleeves you would blush. If someone saw you shirtless you would be uncontrollably stuttering, and so on with levels of embarrassment.',
        'If you see a hairy mammal that is not trying to kill you, you are obligated to try to pet it, even if it is an NPC/PC.',
        'Any race smaller than you, you treat as cute. You talk to it as though it were a small pet or baby, (even goblins).',
        'You get drunk and start talking in a language other than common. Usually it is just gibberish and people who actually speak the language are offended.',
        'If there is no light or you are unable to see, while you are not sleeping. You pee yourself.',
        'You know 100 dad jokes and always say one if no one is talking or there is an awkward silence.',
        'You are very bad at eating with utensils. If you use a fork, you must pass a test, (GMs choice) or stab your tounge.',
        'You sneeze whenever someone says your name.',
        'You forget people’s names. Whenever talking to someone you must pass an int check or say the wrong name. Once you get it right without being reminded you remember the name of that person.',
        'You hate sand, because it’s course and rough and it gets everywhere.',
        'You’re extremely conscious of proper posture. You’re constantly standing or sitting up straight.',
        'You have a huge smile that never reaches your eyes.',
        'You’re constantly humming a tune, not always the same one. It’s very soft and most of the time you don’t even know you’re doing it. If asked, you will say the tune is from a particular song, but anyone who makes a DC 15 History check will know it’s not the tune from that song at all.',
        'While not knowing much of your deity, you still heavily worship them. You often with confidence misquote from scripture, or make up a quote in your head.',
        'You don’t feel comfortable unless you’re chewing on something. If you’re not eating there has to be a toothpick, stem of grass, piece of straw or a pipe in your mouth.',
        'You can’t abide having a wrinkle in your socks. If there’s something off about them you can’t concentrate on anything until you’ve taken your boots off and corrected it.',
        'You give nicknames to everyone and everything. How flattering they are depends on how you think of the person or object.',
        'You spend far too much of your free time assembling 100 item randomized tables of various things (vampire mannerisms, dragon middle names, etc).',
        'You refer to yourself in the third person. As if your body were not your own…',
        'Whenever you see a dog you immediately try to pet it. If you are attempting to resist the urge, you must pass a DC 15 Animal Handling check.',
        'You frequently try to rhyme your sentences. You are very bad at it…',
        'Before asking a question you say “more inquiry needed,” you also end conversations with “conversation over”.',
        'You absolutely refuse to stay in the second floor of any building for an extended period of time.',
        'You enjoy showing off your prowess with other languages besides common to the point of annoyance to others.',
        'Art is your passion. You feel compelled to sketch people you meet.',
        'You cannot stand the sound of people snapping their fingers.',
        'You are very forgetful about past events. You tell the same childhood story several times a day.',
        'You have memorized every holiday of the year, and will do nothing until proper celebration has been made on the days of.',
        'You have lived vicariously through your older siblings/parents. All your interesting tales are things they have done.',
        'You are illiterate, and will stop at nothing to make sure no one knows this fact.',
        'You cannot pronounce your own name correctly.',
        'Sometimes mid conversation with someone you space out or pay more attention to what’s going on around you (a bird in the distance or whatever) unless the other people are engaging you, monologues bore you.',
        'You have a tendency to spit on the floor.',
        'You always reference how your mother would feel about any topic in conversation.',
        'You never look directly into someone’s eyes, instead gazing slightly to the right or left of their face when speaking to them.',
        'Anytime someone asks a question, you ask for “the magic word”. If they DO ask the question by saying “Please”, you assume they have an ulterior motive.',
        'You know “fun facts” about everything. They are usually wrong.',
        'You are absolutely sure everyone taller than you is on stilts. You eyeball their legs and sometimes attempt to prove this fact.',
        'When drinking water, you must purify it or filter it in some way. The thought of dirty water makes you ill.',
        'You absolutely REFUSE to sleep without a trinket of some kind. (a blanket, a stuffed animal, a pillow, etc.)',
        'When you see a child’s toy, you must pass a Wis 10 save or you must play with it. You’re a child at heart and kids always make you smile.',
        'You believe the world to be flat (or cubed if it happens to actually be flat).',
        'You believe that food must have an excessive amount of spices in it…more than anybody else appreciates. You also insist on cooking.',
        'Your extremities (feet, hands) are always freezing. Either bad circulation, a family curse, or strange genes in the bloodline is the cause.',
        'Every time you sit near a candle, you try your best to put it out with your fingers. You are rarely successful.',
        'You occasionally blink really hard, rub your eyes, and then look around as if it’s the first time seeing everything around you.',
        'You are completely convinced that everyone else has the exact same prejudices as you.',
        'You are on the hunt for a familiar. Every day, you pick a new creature or NPC and follow it/get it to follow you.',
        'You tend to clinically diagnose other people’s physical and emotional flaws in front of them.',
        'You strongly identify with another species, to the point of trying to pass as them.',
        'Each night, you have a vivid prophetic dream of your own messy death the next day.',  
        'You name all of your actions as you execute them, ranging in volume from a quiet murmur to a earsplitting yell.',
        'You need to look cool at all times. You obsessively map out dramatic entrances, witty one-liners, and elaborate combat moves.',
        'You are embarrassed by the sound of your laugh, and use all your willpower to not let a single giggle escape.',
        'You are needlessly maternal, and will not rest until all of your friends (and some strangers) are well fed and cared for.',
        'You zone out whenever someone takes longer than five seconds to explain something, but pretend to have understood it perfectly.',
        'You spend all of your free time honing your skills at something extremely obscure and probably useless.',
        'You have an overly guilty conscience, and will try to make up for crimes that strangers have committed.',
        'When idle, you make neat stacks of nearby objects, including small animals and other people’s valuables.', 
        'You introduce yourself by a slightly different name every time.',
        'Your left hand often wanders without your knowledge.',
        'You often challenge people to drinking contests of your own invention.',
        'You languish under such a labyrinthine series of opinions about the world that each new topic provokes a strong emotional response. [1: Horror. 2: Rage. 3: Grief. 4: Skepticism. 5: Lust. 6: Delight.]',
        'You always speak in hypotheticals.',   
        'You have to stop whatever you are doing and look someone directly in their eyes before you talk to them.',
        'You constantly polish any metal you are holding or have on you.',
        'You adjust your glasses when you’re nervous.',
        'You overexaggerate when telling stories of your past deeds.',
    );
    //end php and display quirk in html format
    ?>
    
    <html>
    <body>

    <p><br><b>The Quirk is: </b></p>
    </html>
    <?php
    if( $User_Input_Quirk ){
        echo '<h3> Welcome Back Dungeon Master</h3>';
    }else{
        echo '<h3> Welcome to the site<h3>';
    }
    return $quirk[rand (0 , count($quirk) -1)];
}
print randomQuirk();
?>


