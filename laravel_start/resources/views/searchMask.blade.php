<html>
<head>
    <title>口罩查詢</title>
    <script src="https://code.jquery.com/jquery-1.8.2.js"></script>
    <script type="text/javascript">
        var maskAll = function(){
            $.ajax({
				url: "http://laravel.test/api/mask",
				method:"GET",
					//成功處理
				success: function(data){
                    var mask = document.getElementById("mask");
                    mask.style.display="block";
                    $.each(data,function(index,item){                     
                        $("#mask").append(
                            "<tr align='center' valign='middle'><td>" + item.name + "</td>" +
                            "<td>" + item.address + "</td>"+
                            "<td>" + item.adult_count + "</td>"+
                            "<td>" + item.child_count + "</td>"+
                            "<td>" + item.phone + "</td></tr>"
                        );
                    })     
				},
				error:function(xhr, ajaxOptions, thrownError){
					alert("!!!");
                }
			});
        }
    </script>
    <script type="text/javascript">
        var maskSection = function(){
            var area = document.getElementById("area").value;
            $.ajax({
                url: "http://laravel.test/api/mask_address?address="+area,
                method:"GET",
                    //成功處理
                success: function(data){
                    var mask = document.getElementById("mask");
                    mask.style.display="block";
                    $.each(data,function(index,item){
                        $("#mask").append(
                            "<tr align='center' valign='middle'><td>" + item.name + "</td>" +
                            "<td>" + item.address + "</td>"+
                            "<td>" + item.adult_count + "</td>"+
                            "<td>" + item.child_count + "</td>"+
                            "<td>" + item.phone + "</td></tr>"
                        );
                    })
                },
                error:function(xhr, ajaxOptions, thrownError){
                    alert("!!!");
                }
            });
        }
    </script>
</head>
<body>
    <h1>口罩剩餘數量查詢</h1>
    <span>欲查詢的地區：</span>
    <input id="area" type="text" name="area">
    <input type="button" value="查詢" onclick="maskSection();">
    <input type="button" value="全部" onclick="maskAll();">
    <table id="mask" style="display:none;">
        <tr>
            <th>店名</th>
            <th>地址</th>
            <th>成人口罩</th>
            <th>孩童口罩</th>
            <th>電話</th>
        </tr>
    </table>
</body>
</html>
