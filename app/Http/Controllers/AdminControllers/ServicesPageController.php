<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\ServicesModel;
use Illuminate\Support\Facades\File;

class ServicesPageController extends Controller
{
    public function getServices()
    {
        $this->services = ServicesModel::select('id', 'name', 'description', 'image')
            ->orderBy('created_at', 'asc')
            ->paginate(10);

        return view('admin.pages.manageServices', ['services' => $this->services]);
    }
    public function createServices(Request $request){

        if ($request->isMethod('put')) {

            $request->validate([
                'edit_name' => 'required',
                // 'edit_file' => 'required',
                'edit_description' => 'required',
            ]);          

            $product = ServicesModel::findOrFail($request->product_id);

            if (isset($request->edit_file)) {

                $filename = $request->edit_file->getClientOriginalName();
                $filename = pathinfo($filename, PATHINFO_FILENAME);
                $filetype = $request->edit_file->extension();
                $filename = $filename . '_'  . time() . '.' . $filetype;

                if (!File::exists(public_path('images/Services/' .  $filename))){
                    $request->edit_file->move((public_path('images/Services/')), $filename);
                    $helper = new Helper;
                    $helper->ResizeImages('images/Services/' .$filename, $filename, 'images/Services/Resized250/', 250);
                    $helper->ResizeImages('images/Services/' .$filename, $filename, 'images/Services/Resized600/', 600);
                }
                $product->image = $filename;
            }
            $product->name = $request->edit_name;
            $product->description = $request->edit_description;
            $product->link = $request->edit_link;
            $product->save();

            return view('admin.pages.manageServices', ['message' => 'Service Updated Succesfully', 'status' => '1']);

        } else {
            $request->validate([
                'name' => 'required',
                'file' => 'required',
                'description' => 'required'
            ]);

            $filename = $request->file->getClientOriginalName();
            $filename = pathinfo($filename, PATHINFO_FILENAME);
            $filetype = $request->file->extension();
            $filename = $filename . '_'  . time() . '.' . $filetype;

            if (isset($request->file)) {
                if ($filetype == 'jpg' or $filetype == 'png') {
                    $request->file->move((public_path('images/Services/')),  $filename);
                    $data = ([
                        'name' => $request->name,
                        'description' => $request->description,
                        'image' =>  $filename
                    ]);
                } else {
                    return view('admin.pages.manageServices', ['message' => 'File type not supported', 'status' => '0']);
                }
                if (ServicesModel::create($data)) {
   
                    $helper = new Helper;
                    $helper->ResizeImages('images/Services/' .$filename, $filename, 'images/Services/Resized250/', 250);
                    $helper->ResizeImages('images/Services/' .$filename, $filename, 'images/Services/Resized600/', 600);

                    return view('admin.pages.manageServices', ['message' => 'Service added succesfully', 'status' => '1']);
                } else {
                    return view('admin.pages.manageServices', ['message' => 'Ooops, Something went wrong', 'status' => '0']);
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
       
        // if (File::exists(public_path('images/Services/' . $request->filename))) {
        //     File::delete(public_path('images/Services/' . $request->filename));
        //     File::delete(public_path('images/Services/Resized250' . $request->filename));
        //     File::delete(public_path('images/Services/Resized600' . $request->filename));
        //     $data['message'] = 'Product Deleted Succesfully';
        //     $data['status'] = '1';
        // } else {
        //     $data['message'] = 'Ooops, Something went wrong';
        //     $data['status'] = '0';
        // }
        // $result =  ServicesModel::findOrFail($request->id);
        $result = ServicesModel::where('id', '=', $request->id)->delete();
        // echo $result; exit;
        return $data;
    }
}
