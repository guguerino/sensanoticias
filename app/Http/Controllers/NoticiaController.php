<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticia;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Carbon\Carbon;
/**
 * Class NoticiaController.
 *
 * @author  The scaffold-interface created at 2019-01-07 10:01:31pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - noticia';
        $noticias = Noticia::paginate(6);
        return view('noticia.index',compact('noticias','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - noticia';
        
        return view('noticia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new Noticia();

        
        $noticia->Titulo = $request->Titulo;

        
        $noticia->Conteudo = $request->Conteudo;

        
        $noticia->Noticas = Carbon::now();
        
        $noticia->save();

        return redirect('noticia/'.$noticia->id);
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - noticia';

        if($request->ajax())
        {
            return URL::to('noticia/'.$id);
        }

        $noticia = Noticia::findOrfail($id);
        return view('noticia.show',compact('title','noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - noticia';
        if($request->ajax())
        {
            return URL::to('noticia/'. $id . '/edit');
        }

        
        $noticia = Noticia::findOrfail($id);
        return view('noticia.edit',compact('title','noticia'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $noticia = Noticia::findOrfail($id);
    	
        $noticia->Titulo = $request->Titulo;
        
        $noticia->Conteudo = $request->Conteudo;
        
        $noticia->Noticas = $request->Noticas;
        
        
        $noticia->save();

        return redirect('noticia');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/noticia/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$noticia = Noticia::findOrfail($id);
     	$noticia->delete();
        return URL::to('noticia');
    }
}
