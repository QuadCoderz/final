<?php

namespace App\Http\Controllers;

use App\events;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;


class addEventController extends Controller
{


    public function d( Request $req){

        if(!(Session::has('user') && Session::has('pass') && $req->session()->get('pass')!=""&& $req->session()->get('user')!="")){

            return redirect('/admin');


        }
        else
            return view('add_event');


    }




    public function add(Request $request)
    {



        $target_dir = "pub"; //elfolder ely h7ot feh elswr
        $target_file = $target_dir."/" . basename($_FILES["fileToUpload"]["name"]); //elpath kolo 3la b3do
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);  //holds file extension

// Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
// Check file size
       /* if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }*/
// Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "PNG" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {

            notify()->flash('sorry !','success',[
                'text' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.',
            ]);
            return redirect('/show');
        }

// if everything is ok, try to upload file
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {   //bnwdy elfile l elfolder
                // ely e7na 3mleno "pub"

            } else {

                notify()->flash('sorry !','success',[
                    'text' => 'Sorry, there was an error uploading your file.',
                ]);
                return redirect('/show');
            }

        }

        /////////////////////////////////////////////////////////////////////

        $st_date=$request->sdate;
        $en_date=$request->edate;
        $st_time=$request->stime;
        $en_time=$request->etime;
        $fees=$request->fees;
        $desc=$request->desc;
        $title=$request->title;


        $arr=array("sdate"=>$st_date,"edate"=>$en_date,"stime"=>$st_time,"etime"=>$en_time,"fees"=>$fees,"tit"=>$title,'desc'=>$desc,"im_path"=>$target_file);


        if($this->check($request)) {
            $event = new events();

            $event->title = $title;
            $event->desc = $desc;
            $event->imagePath = $target_file;
            $event->starting_date = $st_date;
            $event->ending_date = $en_date;
            $event->starting_time = $st_time;
            $event->ending_time = $en_time;
            $event->fees = $fees;

            $event->save();
            notify()->flash('yees !','success',[
                'text' => 'event added',
            ]);
            return redirect('/admin');


        }


        else{

            notify()->flash('sorry !','success',[
                'text' => 'you entered something wrong',
            ]);
            return redirect('admin');

        }







    }


    public function update(Request $req){



        $target_dir = "pub"; //elfolder ely h7ot feh elswr
        $target_file = $target_dir."/" . basename($_FILES["fileToUpload"]["name"]); //elpath kolo 3la b3do
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);  //holds file extension

// Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
// Check file size
        /* if ($_FILES["fileToUpload"]["size"] > 500000) {
             echo "Sorry, your file is too large.";
             $uploadOk = 0;
         }*/
// Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
                && $imageFileType != "GIF" ) {

            notify()->flash('sorry !','success',[
                'text' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'
            ]);
            return redirect('/show');
        }

// if everything is ok, try to upload file
        if ($uploadOk == 1) {
            if (!(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))) {   //bnwdy elfile l elfolder
                // ely e7na 3mleno "pub"

                notify()->flash('sorry !','success',[
                    'text' => 'Sorry, there was an error uploading your file.',
                ]);
                return redirect('/show');

            }
        }


        if($this->check($req)) {
            $event = events::find($req->id);
            $event->starting_date = $req->sdate;
            $event->ending_date = $req->edate;
            $event->starting_time = $req->stime;
            $event->ending_time = $req->etime;
            $event->title = $req->title;
            $event->desc = $req->desc;
            $event->fees = $req->fees;
            $event->imagePath = $target_file;
            $event->save();
            notify()->flash('yees !','success',[
                'text' => 'event updated',
            ]);
            return redirect('view_events');
        }

        else{

            notify()->flash('sorry !','success',[
                'text' => 'you entered something wrong',
            ]);
            return redirect('view_events');

        }




    }


    public function setId($id)
    {
        session(['admin_event_id'=>$id]);

        return redirect('/edit');

    }

        public function ret(Request $req){

            if(Session::has('admin_event_id')) {


                $prv=events::find($req->session()->get('admin_event_id'));
                $arr=array("sdate"=>$prv->starting_date,"edate"=>$prv->ending_date,"stime"=>$prv->starting_time,"etime"=>$prv->ending_time,"fees"=>$prv->fees,"tit"=>$prv->title,'desc'=>$prv->desc,"im_path"=>$prv->imagePath,"id"=>$prv->id);


                // echo $prv->imagePath;
                return view('edit_event',$arr);



            }


    }


    public function check(Request $req){

        if (!(($req->sdate > $req->edate) || ($req->stime > $req->etime) || ($req->fees < 0))) {

            return true;

        } else
            return false;



    }



}
