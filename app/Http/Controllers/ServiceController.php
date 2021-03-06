<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data6 = Service::all();
        return view('service.index',compact('data6'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();
        return view('service.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create",Service::class);
        request()->validate([
            
            "icon1"=>["required","min:1" , "max:200" ],
            "link1"=>["required","min:1" , "max:200" ],
            "paragraphelink1"=>["required","min:1" , "max:200" ],
           

        ]);

        $data = new Service();
       
        $data->icon1 = $request->icon1;
        $data->link1 = $request->link1;
        $data->paragraphelink1 = $request->paragraphelink1;
        
        $data->save();
        

        return redirect()->route('service.index')->with('message',"la données a bien été creer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize("update",$service);
        request()->validate([
            
            "icon1"=>["required","min:1" , "max:200" ],
            "link1"=>["required","min:1" , "max:200" ],
            "paragraphelink1"=>["required","min:1" , "max:200" ],
           

        ]);

       
        $service->icon1 = $request->icon1;
        $service->link1 = $request->link1;
        $service->paragraphelink1 = $request->paragraphelink1;
        
        $service->save();
        

        return redirect()->route('service.index')->with('message',"la données est bien modifier");
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize("delete",$service);

        $service->delete();
        return redirect()->route('service.index')->with('message',"la données a bien été suprimer");
    }
}
