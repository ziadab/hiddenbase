<?php
  
  //You shouldn't ignore this part
  define('HIDDEN_PATH', 'PLUGIN_FOLDER_HERE'); //De
  include 'PLUGIN_FOLDER_HERE/.client';
  //

  $newAccount = [
    "Login" => "Hidden",
    "Password" => "123456789",
    "BirthDay" => "31 Dec",
    "Pseudo" => "Adnane Ar",
    "Email" => "mrxjokercard@gmail.com",
    "CreationDate" => date("Y-m-d H:i:s")
  ];
  
  //HIDDEN::connect('root',''); // Authentification :: get connected to the database ( Username, Password ) 
  
  //HIDDEN::getdata(); // return Authentification informations ( Username and Password )
  
  //HIDDEN::create_table("accounts"); // Create a new ( table:accounts )
  
  //HIDDEN::delete_table("accounts"); // Delete ( table:accounts )
  
  //HIDDEN::is_table("accounts"); // Check if table exists return ( false ? true )
  
  //HIDDEN::insert($newAccount, 'accounts'); // Insert new record ( Array:$newAccount ) to table ( accounts ),

  //HIDDEN::delete(0, "accounts"); // Delete record from ( Index:1 ) Where ( table:accounts ) 

  //HIDDEN::update(0, $newAccount, "accounts"); // Update record from ( index:0 ) new Value ( Array:$newAccount ) Where ( table:accounts )
  
  //HIDDEN::fetch("accounts"); // Fetch all arrays from ( table:accounts )
  
  //HIDDEN::fetch_once("accounts", 0); // Fetch Only one record Where ( table:accounts ) From ( index:0 )
  
  //HIDDEN::fetch_until_last("accounts"); // Fetch All arrays until the last one ( return last array )
  
  //HIDDEN::num_rows("accounts"); // Calcul rows from a table
  
  //HIDDEN::find_by("Email", "mrxjokercard@gmail.com", "accounts"); // Check if a value exists ( index:Email, value:mrxjokercard@gmail.com, table:accounts )
?>
