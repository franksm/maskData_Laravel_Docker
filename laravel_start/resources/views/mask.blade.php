<html>
<head>
    <title>口罩查詢</title>
</head>
<body>
    <div>
        <h1 align='center'>口罩剩餘數量</h1>
        <table style="width:100%">
            <tr>
                <th>店名</th> 
                <th>地址</th>
                <th>成人口罩</th>
                <th>孩童口罩</th>
                <th>電話</th>
            </tr>
    
            @foreach ($data as $value)
            <tr>
                <td align='center' valign='middle'>{{$value['name']}}</td>
                <td align='center' valign='middle'>{{$value['address']}}</td>
                <td align='center' valign='middle'>{{$value['adult_count']}}</td>
                <td align='center' valign='middle'>{{$value['child_count']}}</td>
                <td align='center' valign='middle'>{{$value['phone']}}</td>
            <tr>
            @endforeach
        </table>
    </div>
</body>
</html>
