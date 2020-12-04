<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Siparişler</h2>

<table>
    <tr>
        <th>Adi</th>
        <th>Ürün</th>
        <th>Fiyatı</th>


    </tr>
    @foreach($user_product as $user_)
        <tr>
            <td>{{$user_->ad }}</td>
            <td>{{$user_->name}}</td>


            <td>{{$user_->price}}</td>

        </tr>
        @endforeach
        </tr>
</table>

</body>
</html>
