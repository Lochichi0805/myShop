# My Shop
此專案為課外自學程式之練習，並透過Laravel的框架製作成的購物網站。

專案線上展示：https://first-app-0702.herokuapp.com/

## 執行環境
- PHP 8.0.13
- MYSQL 5.7.36
- Apache 2.4.51
- Laravel 9
## 建置環境需求
- WampServer
- Composer
## 建置開發環境
- 本專案是透過WampServer來建立開發環境

### 下載專案程式到WampServer
```
cd / wamp64/ www & git clone git@github.com:lochichi0805/myShop.git
```
### 設定 v-host
在 www 後面多加 /myShop/public
```
DocumentRoot "${INSTALL_DTR}/myShop/public"
```
### 環境變數
```
cp .env.example .env
```
### 金鑰
```
php artisan key:genarate
```
### composer 安裝
```
composer install
```
### 執行資料表
```
composer install
```
### 執行資料表
```
php artisan migrate
```
### 瀏覽器預覽
```
http://127.0.0.1/
```
### 網站畫面
- 首頁
![home](/image/home.png)
- 商品頁面
![product](/image/product.png)
- 商品資訊
![productdetail](/image/productdetail.png)
- 購物車
![cart](/image/cart.png)
- 訂單頁面
![order](/image/order.png)
- 聯絡資訊頁面
![contract](/image/contract.png)
- 管理後臺
![admin](/image/admin.png)
- 商品管理
![productlist](/image/productlist.png)
- 新增商品
![create](/image/create.png)
- 編輯商品
![edit](/image/edit.png)