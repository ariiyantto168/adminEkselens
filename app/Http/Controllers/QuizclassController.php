<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classes;
use App\Models\Quizclass;
use App\Models\Classquiz;
use App\Models\ClassquizDetails;
use Illuminate\Support\Facades\Auth;


class QuizclassController extends Controller
{
    public function index()
    {
        $contents = [
            'classquiz' => Classquiz::with(['users','class'])->get(),
        ];

        // return $contents;
        
        $pagecontent = view('contents.quiz.class.index', $contents);

    	//masterpage
        $pagemain = array(
            'title' => 'Quiz Class',
            'menu' => 'quiz',
            'submenu' => 'quizclass',
            'pagecontent' => $pagecontent,
        );

        return view('contents.masterpage', $pagemain);
    
    }

    public function create_page()
    {
        $contents = [
            'class' => Classes::all(),
        ];

        $pagecontent = view('contents.quiz.class.create', $contents);

    	//masterpage
        $pagemain = array(
            'title' => 'Created Quiz Class',
            'menu' => 'quiz',
            'submenu' => 'quizclass',
            'pagecontent' => $pagecontent,
        );

        return view('contents.masterpage', $pagemain);
    }

    public function create_save_classquiz(Request $request, Classquiz $classquiz)
    {

        $saveQclas = new Classquiz;
        $saveQclas->idclass = $request->idclass;
        $saveQclas->nilai = $request->nilai;
        $saveQclas->idusers = Auth::user()->idusers;
        $saveQclas->save();
        
        $detail = [];
        for ($i=0; $i < count($request->question) ; $i++) { 
            $saveDetail = new ClassquizDetails;
            $saveDetail->idclassquiz = $saveQclas->idclassquiz;
            $saveDetail->question =  $request->question[$i];
            $saveDetail->answer =  $request->answer[$i];
            $saveDetail->save();
            array_push($detail,$saveDetail);
        }

         return redirect('quiz/quizclass/detail/'.$saveQclas->idclassquiz);
    }

    public function quizclass_detail(Classquiz $classquiz)
    {
        $clsquiz = Classquiz::with([
                    'users',
                    'class',
                    // 'classquizdetails'
                   ])
                    ->where('idclassquiz',$classquiz->idclassquiz)
                    ->first();

        $contents = [
            'clsquiz' => $clsquiz,
            'classquiz' => $classquiz
        ];

        // return $contents;

        $pagecontent = view('contents.quiz.class.detail', $contents);

        //masterpage
        $pagemain = array(
            'title' => 'Detail Class Quiz',
            'menu' => 'quiz',
            'submenu' => 'quizclass',
            'pagecontent' => $pagecontent,
        );

        return view('contents.masterpage', $pagemain);
    }

    public function viewquizclass(Classquiz $classquiz)
    {
        $clsquiz = Classquiz::with(['classquizdetails'])
            ->where('idclassquiz',$classquiz->idclassquiz)
            ->first();

        $contents = [
            'clsquiz' => $clsquiz,
        ];

        // return $contents;

        $pagecontent = view('contents.quiz.class.view', $contents);

        //masterpage
        $pagemain = array(
            'title' => 'Detail Class Quiz',
            'menu' => 'quiz',
            'submenu' => 'quizclass',
            'pagecontent' => $pagecontent,
        );

        return view('contents.masterpage', $pagemain);
    }
}
