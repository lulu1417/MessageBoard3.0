# Message Board
一個具有會員系統、發表留言、回覆留言和按讚功能的留言板
## Getting Started
參數設定：
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

網址列輸入：http://localhost:8000
就會進入註冊畫面，註冊成功後會自動導向主畫面
![](https://i.imgur.com/ZcIriUA.png)

主畫面：顯示所有留言
使用者可在每則留言下進行回覆或按讚，也可點選
點選右上角ADD POST可進行留言
![](https://i.imgur.com/ZRizkyl.png)


編輯留言畫面
![](https://i.imgur.com/oQ0i7Jp.png)

按讚後，會進入到此畫面，可以看到所有按過這篇留言讚的人，也可以在此收回讚
![](https://i.imgur.com/KUDk1ZR.png)


針對留言的回覆再做回覆
![](https://i.imgur.com/e459rLg.png)

送出回覆後，會顯示針對這則回覆的所有回覆
![](https://i.imgur.com/NnX4kfK.png)

點選右上角的ALL POST可再回到留言板主畫面

## Author

* **阿寶** 