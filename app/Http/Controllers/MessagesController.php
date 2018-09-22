<?php

namespace App\Http\Controllers;

use DB;
use App\Message;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MessagesController extends Controller
{
    function __construct(){
        $this->middleware('auth', ['except' => ['create','store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $con_mensajes = DB::table('messages')->get();
        $con_mensajes = Message::all();

        return view('messages.index',compact('con_mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('messages')->insert([
        //     'tNombre' => $request->input('tNombre'),
        //     'tCorreo' => $request->input('tCorreo'),
        //     'tMensaje' => $request->input('tMensaje'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
        // Model::unguard();
        // $message = Message::create($request->all());

        // if (auth()->check()) {
        //     auth()->user()->messages()->save($message);
        // }
        auth()->user()->messages()->create($request->all());  

        return redirect()->route('mensajes.create')->with('info','Hemos recibido tu mensaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $mensaje = DB::table('messages')->where('id', $id)->first();

        // $mensaje = Message::find($id);
        $mensaje = Message::findOrFail($id);

        return view('messages.show',compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $mensaje = DB::table('messages')->where('id', $id)->first();
        $mensaje = Message::findOrFail($id);
        return view('messages.edit',compact('mensaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // DB::table('messages')->where('id',$id)->update([
        //     'tNombre' => $request->input('tNombre'),
        //     'tCorreo' => $request->input('tCorreo'),
        //     'tMensaje' => $request->input('tMensaje'),
        //     'updated_at' => Carbon::now()
        // ]);

        $mensaje = Message::findOrFail($id)->update($request->all());

        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('messages')->where('id',$id)->delete();

        $mensaje = Message::findOrFail($id)->delete();
        
        return redirect()->route('mensajes.index');
    }
}
