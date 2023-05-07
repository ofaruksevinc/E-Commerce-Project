<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    button {
        padding: 4px 8px;
        border-radius: 6px;
        cursor: pointer;
        color: #fff;
        transition: background-color 0.3s ease;
    }

    button.approve-button {
        background-color: #617A55;
    }

    button.reject-button {
        background-color: #d9534f;
    }

    button:hover {
        background-color: #8c8c8c;
    }

    /* Responsive Tasarım */
    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }

        button {
            padding: 3px 6px;
        }
    }
</style>

<table>
    <thead>
        <tr>
            <th>Ad-Soyad</th>
            <th>Numara</th>
            <th>Adres</th>
            <th>Ürün Adı</th>
            <th>Fiyat</th>
            <th>Adet</th>
            <th>İşlemler</th>
            <th>Adet</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order as $orders)
        <tr align="center">
            <td style="padding:30px;">{{$orders->name}}</td>
            <td style="padding:30px;">{{$orders->phone}}</td>
            <td style="padding:30px;">{{$orders->address}}</td>
            <td style="padding:30px;">{{$orders->product_name}}</td>
            <td style="padding:30px;">{{$orders->price}}</td>
            <td style="padding:30px;">{{$orders->quantity}}</td>
            <td style="padding:30px;">{{$orders->status}}</td>
            <td style="padding:30px;"><a class="btn btn-success" href="{{url('orderconfirm',$orders->id)}}">Sipraişi Onayla</a></td>
            <td style="padding:30px;"><a class="btn btn-danger" href="{{url('ordercancel',$orders->id)}}">Sipraişi İptal Et</a></td>
        </tr>
        @endforeach
    </tbody>
</table>