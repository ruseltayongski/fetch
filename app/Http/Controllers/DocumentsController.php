<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DocumentsController extends Controller
{
    public function sendRequest(Request $request) {
        $user = auth()->user();

        $documents = new Documents();
        $documents->request_type = $request->request_type;
        $documents->request_by = $user->id;
        $documents->sitio = $request->sitio;
        $documents->purpose = $request->purpose;
        $documents->status = "pending";
        $documents->save();

        if ($documents) {
            Alert::success('Request Sent!', 'Please wait on 1-2 working days, Thank you!');
            return back();
        }
        else {
            Alert::error('Failed');
            return back();
        }
        
    }

    public function manage() {
        return view('homepage.manage', [
            'document' => Documents::all()
        ]);
    }

    public function documentUpdate(Request $request) {
        Documents::find($request->document_id)->update([
            'status' =>	$request->status
        ]);
    }

    public function destroy(Request $request) {
        Documents::find($request->document_id)->delete();
    
    }

    public function cancelRequest(Documents $documents) {
        $document = $documents->delete();

        if($document) {
            Alert::success('Success', 'You\'ve sucessfully cancel your request');
            return redirect('/manage');
        }
    }

    public function documentApproved() {
        $user = auth()->user();
        $documents = Documents::where("request_by",$user->id)
                        ->where(function($query) {
                            $query->where("status","approved")
                                    ->orWhere("status","disapproved");
                        })
                        ->orderBy("updated_at","desc")
                        ->limit("5")->get();

        $response = [
            "html" => (String)view('users.notification-content', ['documents' => $documents]),
            "count_document" => count($documents)
        ];                

        return $response;                
    }

    public function documentFirebase($document_id) {
        $user = auth()->user();
        $document = Documents::find($document_id);
        $count_document = Documents::where("request_by",$user->id)
                        ->where(function($query) {
                            $query->where("status","approved")
                                    ->orWhere("status","disapproved");
                        })
                        ->count();
        $response = [
            "html" => (String)view('users.notification-append',['document' => $document]),
            "count_document" => $count_document
        ];
        return $response;
    }

}
