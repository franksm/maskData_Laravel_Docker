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
                    $("#mask").empty();
                    $("#mask").append(
                        "<tr><th>店名</th>"+
                        "<th>地址</th>"+
                        "<th>成人口罩</th>"+
                        "<th>孩童口罩</th>"+
                        "<th>電話</th><tr>"
                    );
                    $.each(data,function(index,item){                     
                        $("#mask").append(
                            "<tr id=tableData align='center' valign='middle'><td>" + item.name + "</td>" +
                            "<td>" + item.address + "</td>"+
                            "<td>" + item.adult_count + "</td>"+
                            "<td>" + item.child_count + "</td>"+
                            "<td>" + item.phone + "</td></tr>"
                        );
                    })     
				},
				error:function(xhr, ajaxOptions, thrownError){
					alert("API錯誤");
                }
			});
        }
    </script>
    <script type="text/javascript">
        var maskSection = function(){
            var area = document.getElementById("area").value; 
            if(area == ""){
                area = "123";
            }
            $.ajax({
                url: "http://laravel.test/api/mask_address?address="+area,
                method:"GET",
                    //成功處理
                success: function(data){
                    if(data.length==0){
                        alert("查無資料");
                    }
                    else{
                        var mask = document.getElementById("mask");
                        mask.style.display="block";
                        $("#mask").empty();
                        $("#mask").append(
                            "<tr><th>店名</th>"+
                            "<th>地址</th>"+
                            "<th>成人口罩</th>"+
                            "<th>孩童口罩</th>"+
                            "<th>電話</th><tr>"
                        );
                        $.each(data,function(index,item){
                            $("#mask").append(
                                "<tr id=tableData align='center' valign='middle'><td>" + item.name + "</td>" +
                                "<td>" + item.address + "</td>"+
                                "<td>" + item.adult_count + "</td>"+
                                "<td>" + item.child_count + "</td>"+
                                "<td>" + item.phone + "</td></tr>"
                            );
                        })
                    }
                },
                error:function(xhr, ajaxOptions, thrownError){
                    alert("API錯誤");
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
    </table>
</body>
</html>
