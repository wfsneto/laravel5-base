<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Repository\Region;
use App\Http\Requests\Region\SaveRequest;

class RegionsController extends Controller
{
    public function __construct(Region $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function index()
    {
        return view('admin/regions/index')->with( 'regions', $this->repository->all() );
    }

    public function create()
    {
        return view('admin/regions/create')->with( 'region', $this->repository->init() );
    }

    public function store(SaveRequest $request)
    {
        $stored = $this->repository->store( $request->all() );

        if ($stored->success()) {
            return redirect(action('Admin\RegionsController@index'))->with('success', $stored->message);
        }
        else {
            return redirect(action('Admin\RegionsController@index'))->with('error', $stored->message);
        } # endif;
    }

    public function edit($id)
    {
        $region = $this->repository->find( $id );

        if (empty($region)) {
            return redirect(action('Admin\RegionsController@index'))->with('error', 'No region found');
        }
        else {
            return view('admin/regions/edit')->with( 'region', $region );
        }
    }

    public function update($id, SaveRequest $request)
    {
        $updated = $this->repository->update( $id, $request->all() );

        if ($updated->success()) {
            return redirect(action('Admin\RegionsController@index'))->with('success', $updated->message);
        }
        else {
            return redirect(action('Admin\RegionsController@index'))->with('error', $updated->message);
        } # endif;
    }

    public function destroy($id)
    {
        $destroyed = $this->repository->destroy( $id );

        if ($destroyed->success()) {
            return redirect(action('Admin\RegionsController@index'))->with('success', $destroyed->message);
        }
        else {
            return redirect(action('Admin\RegionsController@index'))->with('error', $destroyed->message);
        } # endif;
    }
}
