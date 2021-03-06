# Message Board
一個具有會員系統、發表留言、回覆留言和按讚功能的留言板
## Getting Started
mysql建立資料庫
```
mysql> create database board;
```

複製env.php內容並修改參數設定：
```
cp env.example.php env.php
```

安裝illuminate/database和events
```
composer require illuminate/database illuminate/events
```
將composer.json的裡定義的autoload檔案
加入vendor/composer/autoload_files和autoload_classmap中
```
composer dump-autoload
```

建置資料表：
```
php create-table.php
```
開啟server：
```
php -S localhost:8000
```
網址列輸入:http://localhost:8000
或直接輸入: http://35.229.218.102/ (不用執行以上步驟)
就會進入註冊畫面，註冊或登入成功後會自動導向主畫面
![](https://i.imgur.com/8zkSzeN.png)


主畫面：顯示所有留言
使用者可在每則留言下進行回覆或按讚，也可點選
點選右上角ADD POST可進行留言(必須先註冊或登入)
![](https://i.imgur.com/SGB3ZbF.png)



編輯留言畫面
![](https://i.imgur.com/2DoPdfg.png)


按讚後，會進入到此畫面，可以看到所有按過這篇留言讚的人，也可以在此收回讚
![](https://i.imgur.com/508Q1kH.png)



針對留言的回覆再做回覆
![](https://i.imgur.com/Gfu2IN4.png)


送出回覆後，會顯示針對這則回覆的所有回覆
![](https://i.imgur.com/DehydjX.png)



點選左上角的BACK可回到上一頁

## Author

* **阿寶** 