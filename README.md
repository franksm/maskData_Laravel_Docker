# 口罩查詢

## 前置作業

1. 重建 Laravel

需要重建 Laravel 專案 <br>

```cmd
cd laravel
composer install
npm install
cp .env.example .env
php artisan key:generate
```
>[可參考此網站](https://campus-xoops.tn.edu.tw/modules/tad_book3/page.php?tbdsn=1255) 

2. 重建 Laradock

``` cmd
cd laradock
cp env.exemple .env
```

3. 建立 SQL 資料

需要建置 mysql database => laravel <br>
並且將 maskdata.csv 匯入 <br>

4. 給予 Host 設置

添加 laravel.test 來連線 <br>
``` cmd
sudo vim /etc/hosts

127.0.0.1 laravel.test
```

## 啟動

```cmd
cd /laradock
docker-compose up -d nginx mysql redis workspace
```

## 功能

### Swagger API RESTful Web
127.0.0.1/api/documentation <br>
![](https://i.imgur.com/mNXCe2x.png)

### API
127.0.0.1/api/mask <br>
127.0.0.1/api/mask_address?address="搜尋地址"<br>
![](https://i.imgur.com/4iguDG6.png)


### 網頁呈現
127.0.0.1/mask <br>
127.0.0.1/mask_address?address="搜尋地址" <br>
![](https://i.imgur.com/WSL3Hl8.png)
127.0.0.1/searchMask
![](https://i.imgur.com/eOybyDx.png)
