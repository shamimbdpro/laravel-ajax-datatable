<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $customers = Customer::all();
            return datatables()->of($customers)
                ->addColumn('action', function ($row) {
                    $html = '<a href="'.route('customers.edit', $row->id).'" class="btn btn-secondary btn-edit">Edit</a> ';
                    $html .= '<button data-rowid="' . $row->id . '" class="btn btn-danger btn-delete">Del</button>';
                    return $html;
                })->toJson();
        }

        return view('customers');
    }


    public function edit($id){

         $edit = Customer::find($id);

            echo "<pre>";

            print_r($edit);

            exit();

    }

    public function store(Request $request)
    {
        // do validation
        Customer::create($request->all());
        return ['success' => true, 'message' => 'Inserted Successfully'];
    }

    public function show($id)
    {
        return;
    }

    public function update($id)
    {
        // do validation
        Customer::find($id)->update(request()->all());
        return ['success' => true, 'message' => 'Updated Successfully'];
    }

    public function destroy($id)
    {
        Customer::find($id)->delete();
        return ['success' => true, 'message' => 'Deleted Successfully'];
    }
}