<?php 
//$_POST from <form> already global var no need to insert to function, just execute method

//include libraries
include('lib/database.class.php');
include('lib/activity.class.php');
include('lib/tags.class.php');
include('lib/users.class.php');

//instantiates
$db = new database();
$Activity = new Activity($db);
$Tags = new Tags($db);
$Users = new Users($db);



//check users if existing in array tags
//if not, proceed,
//if yes, extract users from array, and insert to new array

//$UserList = $Users->Get_User_Names();

$Acty_LastID = $Activity->Execute_Insert();
$Tags->Acty_LastID = $Acty_LastID; //insert last ActyID

$Tags->Acty_LastID = $Acty_LastID; //insert last ActyID
$Tags->Insert_Tags(); // execute


echo "$Acty_LastID";

//$Acty_LastID = $Activity->Execute_Insert();









//echo $Acty_LastID;




















































// echo "title: ".$_POST['title'];
// echo "---";

// echo "textarea: ".$_POST['textarea'];
// echo "---";


// echo "sev: ".$_POST['severity'];
//  echo "---";

// echo "tags: ".print_r($_POST['tag']);
// echo "---";


// echo "date: ".$_POST['acty_date'];
// echo "----";




//echo "category: ".$_POST['category'];
//echo "----";





 ?>