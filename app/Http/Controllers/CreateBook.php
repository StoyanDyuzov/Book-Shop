<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Books;

class CreateBook extends Controller
{
    public function createBook(Request $request){

        
        $validatedData = $request->validate([
            "author"=>"required|string|max:255",
            "title"=>"required|string|max:255"//максималния размер 10MB
        ]);

         
         $pdfFile = $request->file('pdf_data');

         // Read the PDF file content into a binary string
         $pdfData = file_get_contents($pdfFile->getRealPath());

         $book = Books::create([
            "admin_id"=>Auth::user()->id,
            "author"=>$validatedData["author"],
            "title"=>$validatedData["title"],
            "pdf_data"=>$pdfData
         ]);

        if($book){
            return redirect()->route("adminCreateBook")->with("error","Book created!");
        }
        else{
            return redirect()->route("adminCreateBook")->with("error","Errorrr!");
        }
    }
}
