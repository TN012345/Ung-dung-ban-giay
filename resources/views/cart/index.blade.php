@extends('layouts.app')
@section('title','Cart')
@section('content')
<h2>Giỏ hàng</h2>
@if(empty($cart))
    <p>Giỏ hàng trống</p>
@else
    <form method="POST" action="{ route('cart.update') }">
        @csrf
        <table>
            <tr><th>Image</th><th>Name</th><th>Price</th><th>Qty</th><th>Subtotal</th><th>Action</th></tr>
            @php $total = 0; @endphp
            @foreach($cart as $id => $item)
                @php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; @endphp
                <tr>
                    <td><img src="{ asset($item['image'] ?: 'https://via.placeholder.com/80') }" style="width:80px;height:80px;object-fit:cover"></td>
                    <td>{ $item['name'] }</td>
                    <td>{ number_format($item['price'],0,',','.') }</td>
                    <td><input type="number" name="quantities[{ $id }]" value="{ $item['quantity'] }" min="1"></td>
                    <td>{ number_format($subtotal,0,',','.') }</td>
                    <td>
                        <form method="POST" action="{ route('cart.remove') }">
                            @csrf
                            <input type="hidden" name="product_id" value="{ $id }">
                            <button type="submit">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <p>Tổng: { number_format($total,0,',','.') } VND</p>
        <button type="submit">Cập nhật</button>
    </form>
    <a href="{ route('cart.checkout') }">Thanh toán</a>
@endif
@endsection
