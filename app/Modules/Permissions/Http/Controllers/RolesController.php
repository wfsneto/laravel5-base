<?php

namespace App\Modules\Permissions\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Modules\Permissions\Models\Repository\Role;
use App\Modules\Permissions\Http\Requests\Role\SaveRequest;
use App\Modules\Permissions\Http\Requests\Role\DestroyRequest;

class RolesController extends Controller
{
    public function __construct(Role $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('permissions::roles/index')->with( 'roles', $this->repository->all() );
    }

    public function create()
    {
        return view('permissions::roles/create')->with( 'role', $this->repository->init() );
    }

    public function store(SaveRequest $request)
    {
        $stored = $this->repository->store( $request->all() );

        if ($stored->success()) {
            return $this->redirect_action('index')->with('success', $stored->message);
        }
        else {
            return $this->redirect_action('index')->with('error', $stored->message);
        } # endif;
    }

    public function edit($id)
    {
        $role = $this->repository->find( $id );

        if (empty($role)) {
            return $this->redirect_action('index')->with('error', \Message::not_found('permissions::roles.role','f'));
        }
        else {
            return view('permissions::roles/edit')->with( 'role', $role );
        }
    }

    public function update($id, SaveRequest $request)
    {
        $updated = $this->repository->update( $id, $request->all() );

        if ($updated->success()) {
            return $this->redirect_action('index')->with('success', $updated->message);
        }
        else {
            return $this->redirect_action('index')->with('error', $updated->message);
        } # endif;
    }

    public function destroy($id, DestroyRequest $request)
    {
        $destroyed = $this->repository->destroy( $id );

        if ($destroyed->success()) {
            return $this->redirect_action('index')->with('success', $destroyed->message);
        }
        else {
            return $this->redirect_action('index')->with('error', $destroyed->message);
        } # endif;
    }

    public function users($id)
    {
        $role = $this->repository->find( $id );

        if (empty($role)) {
            return $this->redirect_action('index')->with('error', \Message::not_found('permissions::roles.role','f'));
        }
        else {
            return view('permissions::roles/users')->with( 'role', $role );
        }
    }
}
