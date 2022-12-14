<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreClientsRequest;
use App\Http\Requests\Admin\UpdateClientsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class ClientsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Client.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('client_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('client_delete')) {
                return abort(401);
            }
            $clients = Client::onlyTrashed()->get();
        } else {
            $clients = Client::all();
        }

        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating new Client.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('client_create')) {
            return abort(401);
        }
        return view('admin.clients.create');
    }

    /**
     * Store a newly created Client in storage.
     *
     * @param  \App\Http\Requests\StoreClientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientsRequest $request)
    {
        if (! Gate::allows('client_create')) {
            return abort(401);
        }

        //dd($request->all());


        if($request->hasFile('file'))
        {
            $request['image']=uploadImage($request,'',100);

        }
        $client = Client::create($request->all());




        return redirect()->route('admin.clients.index');
    }


    /**
     * Show the form for editing Client.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('client_edit')) {
            return abort(401);
        }
        $client = Client::findOrFail($id);

        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update Client in storage.
     *
     * @param  \App\Http\Requests\UpdateClientsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientsRequest $request, $id)
    {
        if (! Gate::allows('client_edit')) {
            return abort(401);
        }

        $client = Client::findOrFail($id);
        if($request->hasFile('file'))
        {
            $request['image']=uploadImage($request,'',100);

        }
        $client->update($request->all());


        return redirect()->route('admin.clients.index');
    }


    /**
     * Display Client.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('client_view')) {
            return abort(401);
        }
        $client = Client::findOrFail($id);

        return view('admin.clients.show', compact('client'));
    }


    /**
     * Remove Client from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('client_delete')) {
            return abort(401);
        }
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('admin.clients.index');
    }

    /**
     * Delete all selected Client at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('client_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Client::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Client from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('client_delete')) {
            return abort(401);
        }
        $client = Client::onlyTrashed()->findOrFail($id);
        $client->restore();

        return redirect()->route('admin.clients.index');
    }

    /**
     * Permanently delete Client from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('client_delete')) {
            return abort(401);
        }
        $client = Client::onlyTrashed()->findOrFail($id);
        $client->forceDelete();

        return redirect()->route('admin.clients.index');
    }
}
