<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LibraryController extends Controller
{
    //$library = new Library();

    #showing individual student's library
    public function show_library(){
		/*		 $a_library;
        if ($student->email =="abc@gmail.com" && $student->deviceUID == "002724"){
            $books = $library->$get_books();
						$a_library = $books;
            #return $books;
        }*/
        echo 'this is lirary';
        //return \View::make('library', compact('a_library');
    }
}
=======
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class LibraryController extends Controller{
private var $library = new Library();

    #showing individual student's library
    public function $show_library($student){

        if ($student->email =="abc@gmail.com" && $student->deviceUID == "002724"){
            $books = $library->$get_books();

            return $books;
        }
        return null;
    }

    #add books to library
    public function $addBook($book){
        $book= $library->$add_book($book);
        return $book;
    }
    #set books
    function $setBooks($books){
        $library->$set_books($books);
    }


?>
>>>>>>> origin/master
