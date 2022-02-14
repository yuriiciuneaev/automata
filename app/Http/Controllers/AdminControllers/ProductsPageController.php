<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\ProductsModel;
use Illuminate\Support\Facades\File;

class ProductsPageController extends Controller
{
    public function getProducts()
    {
        $this->products = ProductsModel::select('id', 'name', 'description', 'image')
            ->orderBy('created_at', 'asc')
            ->paginate(10);

        return view('admin.pages.manageProducts', ['data' => $this->products]);
    }
    public function createProducts(Request $request){

        if ($request->isMethod('put')) {

            $request->validate([
                'edit_name' => 'required',
                // 'edit_file' => 'required',
                'edit_description' => 'required',
            ]);          

            $product = ProductsModel::findOrFail($request->product_id);

            if (isset($request->edit_file)) {

                $filename = $request->edit_file->getClientOriginalName();
                $filename = pathinfo($filename, PATHINFO_FILENAME);
                $filetype = $request->edit_file->extension();
                $filename = $filename . '_'  . time() . '.' . $filetype;

                if (!File::exists(public_path('images/Products/' .  $filename))){
                    $request->edit_file->move((public_path('images/Products/')), $filename);
                    $helper = new Helper;
                    $helper->ResizeImages('images/Products/' .$filename, $filename, 'images/Products/Resized250/', 250);
                    $helper->ResizeImages('images/Products/' .$filename, $filename, 'images/Products/Resized600/', 600);
                }
                $product->image = $filename;
            }
            $product->name = $request->edit_name;
            $product->description = $request->edit_description;
            $product->save();

            return view('admin.pages.manageProducts', ['message' => 'Product Updated Succesfully', 'status' => '1']);

        } else {
            $request->validate([
                'name' => 'required',
                'file' => 'required',
                'description' => 'required',
            ]);

            $filename = $request->file->getClientOriginalName();
            $filename = pathinfo($filename, PATHINFO_FILENAME);
            $filetype = $request->file->extension();
            $filename = $filename . '_'  . time() . '.' . $filetype;

            if (isset($request->file)) {
                if ($filetype == 'jpg' or $filetype == 'png') {
                    $request->file->move((public_path('images/Products/')),  $filename);
                    $data = ([
                        'name' => $request->name,
                        'description' => $request->description,
                        'image' =>  $filename,
                    ]);
                } else {
                    return view('admin.pages.manageProducts', ['message' => 'File type not supported', 'status' => '0']);
                }
                if (ProductsModel::create($data)) {
   
                    $helper = new Helper;
                    $helper->ResizeImages('images/Products/' .$filename, $filename, 'images/Products/Resized250/', 250);
                    $helper->ResizeImages('images/Products/' .$filename, $filename, 'images/Products/Resized600/', 600);

                    return view('admin.pages.manageProducts', ['message' => 'Product added succesfully', 'status' => '1']);
                } else {
                    return view('admin.pages.manageProducts', ['message' => 'Ooops, Something went wrong', 'status' => '0']);
                }
            }
        }
    }
    public function destroy(Request $request)
    {

        $data = [
            'message' => 'Product Deleted Succesfully',
            'status' => '1'
        ];

        // if (File::exists(public_path('images/Products/' . $request->filename))) {
        //     File::delete(public_path('images/Products/' . $request->filename));
        //     File::delete(public_path('images/Products/Resized250' . $request->filename));
        //     File::delete(public_path('images/Products/Resized600' . $request->filename));
        //     $data['message'] = 'Product Deleted Succesfully';
        //     $data['status'] = '1';
        // } else {
        //     $data['message'] = 'Ooops, Something went wrong';
        //     $data['status'] = '0';
        // }
        ProductsModel::where('id', '=', $request->id)->delete();

        return $data;
    }
}
