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
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>[Ad-Soyad]</td>
            <td>[Numara]</td>
            <td>[Adres]</td>
            <td>[Ürün Adı]</td>
            <td>[Fiyat]</td>
            <td>[Adet]</td>
            <td>
                <button class="approve-button">Onayla</button>
                <button class="reject-button">Reddet</button>
            </td>
        </tr>
    </tbody>
</table>
