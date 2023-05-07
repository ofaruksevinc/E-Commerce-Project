<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
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
    button.edit-button {
        background-color: #428bca;
    }
    button.delete-button {
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
            <th>Fotoğraf</th>
            <th>Fiyat</th>
            <th>Açıklama</th>
            <th>Miktar</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
        <tr>
            <td><img src="/productimage/{{ $product->image }}" alt="Ürün Fotoğrafı" style="max-width: 100px;"></td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <button class="edit-button"><a href="{{url('updateproductview', $product->id)}}">Güncelle</a></button>
                <button class="delete-button"><a href="{{url('deleteproduct', $product->id)}}">Sil</a></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
