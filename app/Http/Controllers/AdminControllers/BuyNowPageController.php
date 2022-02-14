<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\ResellersModel;
use Illuminate\Support\Facades\File;


class BuyNowPageController extends Controller
{
    public function getResellers()
    {
        $this->resellers = ResellersModel::select('id', 'image', 'link')
            ->orderBy('created_at', 'asc')
            ->paginate(10);

        return view('admin.pages.manageResellers', ['data' => $this->resellers]);
    }

    public function createResellers(Request $request){

        if ($request->isMethod('put')) {

            $request->validate([
                // 'edit_file' => 'required',
                'edit_link' => 'required'
            ]);          

            $product = ResellersModel::findOrFail($request->product_id);

            if (isset($request->edit_file)) {

                $filename = $request->edit_file->getClientOriginalName();
                $filename = pathinfo($filename, PATHINFO_FILENAME);
                $filetype = $request->edit_file->extension();
                $filename = $filename . '_'  . time() . '.' . $filetype;

                if (!File::exists(public_path('images/Resellers/' .  $filename))){
                    $request->edit_file->move((public_path('images/Resellers/')), $filename);
                    $helper = new Helper;
                    $helper->ResizeImages('images/Resellers/' .$filename, $filename, 'images/Resellers/Resized250/', 250);
                    $helper->ResizeImages('images/Resellers/' .$filename, $filename, 'images/Resellers/Resized600/', 600);
                }
                $product->image = $filename;
            }
            // $product->name = $request->edit_name;
            // $product->description = $request->edit_description;
            $product->link = $request->edit_link;
            $product->save();

            return view('admin.pages.manageResellers', ['message' => 'Updated Succesfully', 'status' => '1']);

        } else {
            $request->validate([
                'file' => 'required',
                'link' => 'required'
            ]);

            $filename = $request->file->getClientOriginalName();
            $filename = pathinfo($filename, PATHINFO_FILENAME);
            $filetype = $request->file->extension();
            $filename = $filename . '_'  . time() . '.' . $filetype;

            if (isset($request->file)) {
                if ($filetype == 'jpg' or $filetype == 'png') {
                    $request->file->move((public_path('images/Resellers/')),  $filename);
                    $data = ([
                        'image' =>  $filename,
                        'link' => $request->link
                    ]);
                } else {
                    return view('admin.pages.manageResellers', ['message' => 'File type not supported', 'status' => '0']);
                }
                if (ResellersModel::create($data)) {
   
                    $helper = new Helper;
                    $helper->ResizeImages('images/Resellers/' .$filename, $filename, 'images/Resellers/Resized250/', 250);
                    $helper->ResizeImages('images/Resellers/' .$filename, $filename, 'images/Resellers/Resized600/', 600);

                    return view('admin.pages.manageResellers', ['message' => 'Added succesfully', 'status' => '1']);
                } else {
                    return view('admin.pages.manageResellers', ['message' => 'Ooops, Something went wrong', 'status' => '0']);
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

        // if (File::exists(public_path('images/Resellers/' . $request->filename))) {
        //     File::delete(public_path('images/Resellers/' . $request->filename));
        //     File::delete(public_path('images/Resellers/Resized250' . $request->filename));
        //     File::delete(public_path('images/Resellers/Resized600' . $request->filename));
        //     $data['message'] = 'Product Deleted Succesfully';
        //     $data['status'] = '1';
        // } else {
        //     $data['message'] = 'Ooops, Something went wrong';
        //     $data['status'] = '0';
        // }
        ResellersModel::where('id', '=', $request->id)->delete();

        return $data;
    }

}
