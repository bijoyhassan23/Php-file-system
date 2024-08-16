<pre>
<?php

$file = 'dummy.txt';

// file_exists($file); // check file exist or not
// echo readfile($file); // read file
// copy("test.json", "newfile2.txt"); // copy file
// rename("newfile2.txt", "oldfile.txt"); // rename file
// unlink("oldfile.txt"); // delet file

// mkdir("textfiles"); // create folder
// rmdir("textfiles"); // remove folder
// filesize($file); // get the file size
// filetype($file); // check the file type
// print_r(pathinfo($file)); // file full info, it will return an array
// print_r(realpath($file)); // it will return the main path of the file
// print_r(pathinfo(realpath($file))); // file full info, it will return an array
// print_r(pathinfo(realpath($file), PATHINFO_DIRNAME)); // it will give the directory path
// print_r(pathinfo(realpath($file), PATHINFO_EXTENSION)); // it will give the extention
// print_r(pathinfo(realpath($file), PATHINFO_FILENAME)); // it will give file name
// echo basename($file);  // it will return the file name
// echo basename($file, ".txt");  // it will return the file name without extention

// echo dirname($file); // it will return the paren directory
// echo dirname($file); // it will return the paren directory

// var_export(file($file)); // It will give each line in a array












/**
 * "r" Read only. Starts at the beginning of the file
 * "r+" Read/Write. Starts at the beginning of the file
 * "w" Write only. Opens and truncates cates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
 * "w+" Read/Write. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
 * "a" Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist
 * "a+" Read/Write. Preserves file content by writing to the end of the file
 * "x" Write only. Creates a new file. Returns FALSE and an error if file already exists
 * "x+" Read/Write. Creates a new file. Returns FALSE and an error if file already exists
 * "c" Write only. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
 * "c+" Read/Write. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
 */

 /**
 * "r" Read only. Starts at the beginning of the file
 * "r+" Read/Write. Starts at the beginning of the file and it will replace the line, this don't remove the existing content, just replace the content from the start
 * "w" Write only. it will remove existing content and add new content
 * "w+" Read/Write. it will remove existing content and add new content.
 * "a" Write only. it don't remove the previous content end of the previous content it added new content
 * "a+" Read/Write. Preserves file content by writing to the end of the file
 * "x" Write only. Creates a new file. Returns FALSE and an error if file already exists
 * "x+" Read/Write. Creates a new file. Returns FALSE and an error if file already exists
 * "c" Write only. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
 * "c+" Read/Write. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
 */




// $file_f = fopen($file, "a+"); 

// var_export(fread($file_f, filesize($file))); // read file
// var_export(fgets($file_f)); // read Frist line
// var_export(ftell($file_f)); // File cursor position
// var_export(fgets($file_f)); // read Second line


// fseek($file_f, 15); // move the file cursor
// var_export(fgets($file_f)); // cursor position to end of the current line
// var_export(fpassthru($file_f)); // cursor position to end of the current file

// rewind($file_f); // move cursor cposition to start
// var_export(fgets($file_f)); // check the new postion



/*
// It will read line one by one
while(! feof($file_f)){
    $line = fgets($file_f);
    echo $line .  "<br>";
}
*/


// var_export(fgetc($file_f)); // Read each letter


// fwrite($file_f, "Here is the new content"); // write in the file
// fputs($file_f, "this is f puts"); // write in the file
// ftruncate($file_f, 10); // it will take that much of charecter and rest of the charecter will be removed

// fclose($file_f); // clsoe the file






// var_dump(is_dir($file)); // check this is folder
// var_dump(is_file($file)); // check this is file
// var_dump(is_readable($file)); // check readable or not
// var_dump(is_writable($file)); // check file or folder is writable or not
// var_dump(is_writeable($file)); // check file or folder is writable or not
// var_dump(is_executable($file)); // check excutable or not (.exe)


// var_dump(fileperms($file)); // it will return the file permission
// chmood($file, 0600); //edit permission, give the permission in octal number












/**
 * open write close everything in one function
 * there is two mood
 * "FILE_APPEND" previous data will not delet new data will add end of the previous data
 * "LOCK_EX" security purpose  
 * file_put_contents(filename, data, mode, context)
 */

// var_dump(file_put_contents($file, "This is testting text")); // it will remove the previous data and add new data
// var_dump(file_put_contents($file, "This is new text", FILE_APPEND)); // this will add new text end of the previous content
// var_dump(file_put_contents($file, "Another new text", FILE_APPEND | LOCK_EX)); // This will lock the file untill the edit is completed
// var_dump(file_put_contents($file, "Another new text", FILE_APPEND | LOCK_EX)); // This will lock the file untill the edit is completed

/**
 * Open read in one function
 * file_get_contents(filename, include_path, context, start, max_length)
 */

//  var_dump(file_get_contents($file)); // it will return the content of the file
//  var_dump(file_get_contents($file, FALSE, NULL, 50, 100)); // it will return the content of the file








/**
 * File and folder searching
 * glob(pattern, flags)
 */

// print_r(glob("*")); // it will return all the file and folder on this file
// print_r(glob("css/*")); // it will return all the file and folder inside the css folder
// print_r(glob("*.php"));  // it will show a particular formate file
// print_r(glob("t*"));  // it will return all the fils and folder start with t
// print_r(glob("*", GLOB_MARK));  // it will add a slash after folder
// print_r(glob("k*", GLOB_NOCHECK));  // if there is no file and folder it will return the search
// print_r(glob("*", GLOB_ONLYDIR));  // it will return only folders
// print_r(glob("{*.php,*.txt}", GLOB_BRACE));  // it can use multiple search pattern






/**
 * Directory functions
 * "." means the current folder
 */
// var_dump(getcwd()); // it will return current directory path

// chdir("css"); // change currenct directory
// var_dump(getcwd()); // check after changin the directory

// print_r(scandir(".")); // it will return all the files name 
// print_r(scandir("css/")); // it will return all the files name 
// print_r(scandir(getcwd())); // we can also use this
// print_r(scandir(getcwd(), 1)); // change the order


/**
 * This is also another system to read directory
 * open close read
 */
//  $dir = "."; // get current directory
//  if(is_dir($dir)){
//     if($d = opendir($dir)){
//         while($filedir = readdir($d)){
//             echo "filename : " . $filedir ."<br>";
//         }
//         $close($d);
//     }
//  }


?>
</pre>
