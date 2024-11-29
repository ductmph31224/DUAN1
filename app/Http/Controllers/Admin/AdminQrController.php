<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QrImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminQrController extends Controller
{
    public function showlist(){
        $listanh = QrImage::get();
        return view('admins.QR.index', compact('listanh'));
    }
    public function formedit($id){
        $qrImage = QrImage::findOrFail($id);
        return view('admins.QR.edit',compact('qrImage'));
    }
    public function them(){
        return view('admins.QR.add');
    }
    public function updateStatus(Request $request, $id)
{
    // Tìm ảnh theo ID
    $qrImage = QrImage::findOrFail($id);

    // Cập nhật trạng thái từ form (1: hiển thị, 0: ẩn)
    $qrImage->status = $request->input('status');
    $qrImage->save();

    // Chuyển hướng lại với thông báo thành công
    return redirect()->route('admins.anh.index')->with('success', 'Trạng thái của ảnh đã được cập nhật!');
}


    public function store(request $request){
        $validate = $request->validate([
            'qr_code'=> 'required|file'
        ],[
            'qr_code.required' => ' Không có file ảnh!',
            'qr_code.file' => ' Không Đúng định dạng file',

        ]);
        try {
            if ($request->hasFile('qr_code')) {
               $validate['qr_code'] = $request->file('qr_code')->store('qr_images', 'public');
               $validate['qr_code'] = Storage::put('qr_images', $request->file('qr_code'));
               QrImage::query()->create($validate);
               return redirect()
                ->route('admins.anh.index')
                ->with('success', 'thêm ảnh thành công!');
            }
        } catch (\Throwable $th) {
           return view('admins.QR.index');
        }

    }
    public function showTest() {
        // $orderId = Order::findOrFail($orderId);
        $visibleQrImages = QrImage::visible()->get();
        return view('client.layouts.partials.paymentQR',compact('visibleQrImages'));
    }
}
