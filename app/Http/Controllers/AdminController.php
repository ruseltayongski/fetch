<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents;

class AdminController extends Controller
{
    public function index() {
        $user = auth()->user();
        $documents = Documents::select(
            "Users.firstname",
            "Users.lastname",
            "Users.address",
            "Documents.request_type",
            "Documents.status",
            "Documents.created_at",
            "Documents.sitio",
            "Documents.purpose",
            "Documents.id as document_id",
            "Users.id as created_by",
            "Events.start"
            
        )
        ->leftJoin("Users","Users.id","=","Documents.request_by")
        ->leftJoin("Events","Events.created_by","=","Documents.request_by")
        ->get();
                     
        return view('admin.admin',compact('user','documents'));
    }

  
   /*  public function adminLogout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    } */
}
