# 口罩查詢

## 前置作業

1. 重建 Laravel
需要重建 Laravel 專案 <br>
>[可參考此網站](https://campus-xoops.tn.edu.tw/modules/tad_book3/page.php?tbdsn=1255) 

2. 重建 Laradock
``` cmd
cp env.exemple .env
```

3. 建立 SQL 資料
需要建置 mysql database => laravel <br>
並且將 maskdata.csv 匯入 <br>

## 功能

### Swagger API RESTful Web
/api/documentation <br>
### API
/api/mask <br>
/api/mask_address?address="搜尋地址"<br>
### 網頁呈現
/mask <br>
/mask_address?address="搜尋地址" <br>
