# GuestBook

主要使用 lavarel 框架來開發留言板網站，並在 Windows 上使用 XAMPP 測試，測試完後再放進 Linux 上線。

目前還不太熟悉 laravel 中 Controller 的部份，所以先完成一個基礎、可以使用的留言板

之後了解 Controller 該怎麼使用後，再來改代碼

# DB 設計
### users
- id int 自增長主鍵
- user_name char(20)
- user_pwd char(40)
- user_email char(64)
### messages
- id int 自增長主鍵
- user_name char(20)
- message char(255)
- time char(16)
- user_id int 外鍵關聯 users 的 id

# GuestBook 主要功能
1. 登入註冊登出
2. 登入時能儲存 session
3. 需要登入才能留言
