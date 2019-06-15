<?php

namespace App\Http\Controllers;
use App\managers;
use Illuminate\Http\Request;

class crudManagers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managers = managers::all();
        return view('manager.index', compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'm_nom'=>'required',
            'm_prenom'=> 'required',
            'm_tel' => 'required'
        ]);


        $managers = new managers([
            'm_nom' => $request->get('m_nom'),
            'm_prenom' => $request->get('m_prenom'),
            'm_tel' => $request->get('m_tel'),
            'm_adresse' => $request->get('m_adresse'),
            'm_reglement' => $request->get('m_reglement')
        ]);
        $managers->save();
        return redirect('/manager')->with('success', 'Manager enregistré!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $manager = managers::find($id);
        return view('manager.edit',compact('manager'));
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
         $request->validate([
            'm_nom'=>'required',
            'm_prenom'=> 'required',
            'm_tel' => 'required'
        ]);

        $managers = managers::find($id);
        $managers->m_nom =  $request->get('m_nom');
        $managers->m_prenom = $request->get('m_prenom');
        $managers->m_tel = $request->get('m_tel');
        $managers->m_adresse = $request->get('m_adresse');
        $managers->m_reglement = $request->get('m_reglement');
        $managers->save();

        return redirect('/manager')->with('success', 'Mise à jour Manager effectuée!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $managers = managers::find($id);
        $managers->delete();
        return redirect('/manager')->with('success', 'Suppression Manager effectuée');
    }
}
