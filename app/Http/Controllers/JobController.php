<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();

        return response()->json(['jobs' => $jobs] , 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'work_condition' => 'required',
            'category' => 'required',
            'location' => 'required',
        ]);

        $job = Job::create($job);

        return response()->json(['message' => "Job Added Successfully"] , 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        if($job){
            return response()->json(['jobs' => $job] , 200);
        }else{

            return response()->json(['message' => 'No Record Found'] , 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'name' => 'required',
            'type' => 'required',
            'work_condition' => 'required',
            'category' => 'required',
            'location' => 'required',
        ]);
        $job = Job::find($id);

        if($job){
            // $job->update($request->all());
            $job->name = $request->name;
            $job->type = $request->type;
            $job->work_condition = $request->work_condition;
            $job->category = $request->category;
            $job->location = $request->location;
            $job->update();

            return response()->json(['message' => "Job Updated Successfully"] , 200);
        }else{
            
            return response()->json(['message' => 'No Record Found'] , 404);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);

        if($job){
            $job->delete();
            return response()->json(['message' => 'Job Deleted Successfully'] , 200);
        }else{
            
            return response()->json(['message' => 'No Record Found'] , 404);
        }
        
    }
}
