<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;

class OrdersController extends Controller
{
    public function index(Request $request)
    {
        $listData = Orders::orderBy('id', 'desc')->get();
        $data['activePage'] = 'orders';
        $data['title'] = 'Orders';
        $data['listData'] = $listData;
        return view('pages.orders', $data);
    }
    public function form($mode, $id=0, Request $request)
    {
        $data['activePage'] = 'orders';
        $data['title'] = 'Orders';
        $data['formData'] = false;
        if ($id) {
            $data['formData'] = Orders::find($id);
        }
        return view('form.orders', $data);
    }
    public function save(Request $request)
    {
        $dataForm = $request->all();
        if (isset($dataForm['id'])) {
            $dataUpdate = Orders::find($dataForm['id']);
            $dataUpdate->id_parent = $dataForm['id_customer'];
            $dataUpdate->label = $dataForm['type'];
            $dataUpdate->link = $dataForm['name'];
            $dataUpdate->image = $dataForm['address'];
            $dataUpdate->image = $dataForm['email'];
            $dataUpdate->image = $dataForm['phone'];
            $dataUpdate->image = $dataForm['total_item'];
            $dataUpdate->image = $dataForm['total_price'];
            $dataUpdate->image = $dataForm['description'];
            $dataUpdate->image = $dataForm['status'];
            $dataUpdate->save();
            $doSave = true;
        } else {
            $doSave = Orders::create($dataForm);
        }
        if ($doSave) {
            return redirect('/orders')->with('success', 'Data Telah Disimpan');
        } else {
            return redirect('/orders')->with('error', 'Data Gagal Disimpan');
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        if ($id) {
            $dataDelete = Orders::find($id);
            $dataDelete->delete();
            return redirect('/orders')->with('success', 'Data Telah Dihapus');
        } else {
            return redirect('/orders')->with('error', 'Tidak ada data yang dihapus, data tidak ditemukan');
        }
    }
}