<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemsModel;
use App\Models\SlidersModel;
use Illuminate\Support\Facades\File;
use App\Helpers\Helper;


class HomePageController extends Controller
{
    public function getItems()
    {
        $this->items = ItemsModel::select('id', 'name', 'description', 'image')
            ->orderBy('created_at', 'asc')
            ->paginate(10);

        return view('admin.pages.manageItems', ['items' => $this->items]);
    }
    public function getSliders()
    {

        $this->sliders = SlidersModel::select('id', 'title', 'description', 'image', 'button_text', 'button_link')
            ->orderBy('created_at', 'asc')
            ->paginate(10);

        // echo "<pre>"; print_r($this->sliders); exit;
        return view('admin.pages.manageSliders', ['sliders' => $this->sliders]);
    }

    public function createItems(Request $request)
    {
        if ($request->isMethod('put')) {

            $request->validate([
                'edit_name' => 'required',
                // 'edit_file' => 'required',
                'edit_description' => 'required',
            ]);
            

            $product = ItemsModel::findOrFail($request->product_id);

            if (isset($request->edit_file)) {

                $filename = $request->edit_file->getClientOriginalName();
                $filename = pathinfo($filename, PATHINFO_FILENAME);
                $filetype = $request->edit_file->extension();
                $filename = $filename . '_'  . time() . '.' . $filetype;

                if (!File::exists(public_path('images/file_uploads/' .  $filename))){
                    $request->edit_file->move((public_path('images/file_uploads/')), $filename);
                    $helper = new Helper;
                    $helper->ResizeImages('images/file_uploads/' .$filename, $filename, 'images/Homepage/Resized250/', 250);
                    $helper->ResizeImages('images/file_uploads/' .$filename, $filename, 'images/Homepage/Resized600/', 600);
                }
                $product->image = $filename;

            }
            
            $product->name = $request->edit_name;
            $product->description = $request->edit_description;
            
            $product->save();

            return view('admin.pages.manageItems', ['message' => 'Updated Succesfully', 'status' => '1']);

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
                    $request->file->move((public_path('images/file_uploads/')),  $filename);
                    $data = ([
                        'name' => $request->name,
                        'description' => $request->description,
                        'image' =>  $filename,
                    ]);
                } else {
                    return view('admin.pages.manageItems', ['message' => 'File type not supported', 'status' => '0']);
                }
                if (ItemsModel::create($data)) {
   
                    $helper = new Helper;
                    $helper->ResizeImages('images/file_uploads/' .$filename, $filename, 'images/Homepage/Resized250/', 250);
                    $helper->ResizeImages('images/file_uploads/' .$filename, $filename, 'images/Homepage/Resized600/', 600);

                    return view('admin.pages.manageItems', ['message' => 'Added succesfully', 'status' => '1']);
                } else {
                    return view('admin.pages.manageItems', ['message' => 'Ooops, Something went wrong', 'status' => '0']);
                }
            }
        }
    }
    public function createSlider(Request $request)
    {
        if ($request->isMethod('put')) {

            $request->validate([
                'edit_title' => 'required',
                // 'edit_file' => 'required',
                'edit_description' => 'required',
            ]);
            $slider = SlidersModel::findOrFail($request->slider_id);
            $slider->title = $request->edit_title;
            $slider->description = $request->edit_description;
            $slider->button_text = $request->edit_button_text;
            $slider->button_link = $request->edit_button_link;

            if (isset($request->edit_file)) {
                $filename = $request->edit_file->getClientOriginalName();
                $filetype = $request->edit_file->extension();

                if ($filetype == 'jpg' or $filetype == 'png') {
                    $slider->image = $filename;

                    if (!File::exists(public_path('images/sliders/' . $slider->image))) {
                        $request->edit_file->move((public_path('images/sliders/')), $filename);
                        $helper = new Helper;
                        $helper->ResizeImages('images/sliders/' .$filename, $filename, 'images/sliders/Resized320/', 320);
                        $helper->ResizeImages('images/sliders/' .$filename, $filename, 'images/sliders/Resized960/', 960);
                    }
                } else {
                    return view('admin.pages.manageSliders', ['message' => 'File type not supported', 'status' => '0']);
                }
            }
            $slider->save();
            return view('admin.pages.manageSliders', ['message' => 'Slider Updated Succesfully', 'status' => '1']);
        } else {
            $request->validate([
                'title' => 'required',
                'file' => 'required',
                'description' => 'required',
            ]);

            $filename = $request->file->getClientOriginalName();
            $filetype = $request->file->extension();

            if (isset($request->file)) {
                if ($filetype == 'jpg' or $filetype == 'png') {
                    $request->file->move((public_path('images/sliders/')),  $filename);
                    $data = ([
                        'title' => $request->title,
                        'description' => $request->description,
                        'image' =>  $filename,
                        'button_text' => $request->button_text,
                        'button_link' => $request->button_link
                    ]);
                } else {
                    return view('admin.pages.manageSliders', ['message' => 'File type not supported', 'status' => '0']);
                }
                if (SlidersModel::create($data)) {
                    $helper = new Helper;
                    $helper->ResizeImages('images/sliders/' .$filename, $filename, 'images/sliders/Resized320/', 320);
                    $helper->ResizeImages('images/sliders/' .$filename, $filename, 'images/sliders/Resized960/', 960);

                    return view('admin.pages.manageSliders', ['message' => 'Product added succesfully', 'status' => '1']);
                } else {
                    return view('admin.pages.manageSliders', ['message' => 'Ooops, Something went wrong', 'status' => '0']);
                }
            }
        }
    }
    public function destroyItem(Request $request)
    {

        $data = [
            'message' => 'Product Deleted Succesfully',
            'status' => '1'
        ];

        // if (File::exists(public_path('images/Homepage/' . $request->filename))) {
        //     File::delete(public_path('images/Homepage/' . $request->filename));
        //     $data['message'] = 'Product Deleted Succesfully';
        //     $data['status'] = '1';
        // } else {
        //     $data['message'] = 'Ooops, Something went wrong';
        //     $data['status'] = '0';
        // }
        ItemsModel::where('id', '=', $request->id)->delete();

        return $data;
    }
    public function destroySlider(Request $request)
    {

        $data = [
            'message' => 'Deleted Succesfully',
            'status' => '1'
        ];

        SlidersModel::where('id', '=', $request->id)->delete();

        return $data;
    }
}
