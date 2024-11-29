<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán qua ZaloPay</title>
    <style>
        .qr-container {
            text-align: center;
            margin-top: 50px;
        }
        .qr-code {
            width: 200px;
            height: 200px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Thanh toán qua ZaloPay</h2>
    {{-- <h2>{{Auth::user->id}}</h2> --}}

    <div class="qr-container">
        <p>Quét mã QR để thanh toán với Ngân Hàng VpBank</p>
        @if ($visibleQrImages->isNotEmpty())
        @foreach ($visibleQrImages as $qr)
            <img src="{{ Storage::url($qr->qr_code) }}" alt="{{ $qr->qr_code }}"  style="width: 500px">
        @endforeach
    @else
        <p>Không có ảnh nào tồn tại</p>
    @endif


    </div>
</body>
</html>
