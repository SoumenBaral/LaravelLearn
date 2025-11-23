<?php
echo "Hello World\n"; //single or double quotes can be used
echo 'Hello World I am from PHP';//usually double quotes are used 
//if we use single quotes then we cannot use escape sequences like \n or \t

//variables in PHP it's a container to store data
//types of variables in PHP . This variables are also called primitive data types. 
//1. String
//2. Integer
//3. Float
//4. Boolean
//5. Array
//6. Object
//7. NULL
$name = "John Doe"; //string
$age = 25; //integer
$height = 5.9; //float
$is_student = true; //boolean Snake case convention is used in PHP
$isMale = true; //camel case convention
// Don't mix both conventions in a single project . never Mix them.
$fruits = array("Apple", "Banana", "Orange"); //array
echo "\n" ,$name;
$name = "Jane Doe"; //reassigning variable
echo "\n".$name;

echo "Hay I am {$name}. I am {$age} years old.\n"; //variable interpolation

//When we use variables in double quotes, PHP will replace the variable with its value.and the best practice is to use curly braces {} around. 


// No need to write end tag in php files