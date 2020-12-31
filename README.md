# Laravel 8 Livewire 分享環境設定敏感資訊

讓其他開發者知道有哪些環境變數需要設定，隨時同步環境設定是有助於開發的。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行安裝 Laravel Mix 引用的依賴項目，並執行所有 Mix 任務。
```sh
$ npm install && npm run dev
```
- 執行第一次應用程式設置指令後，可以輕鬆地再次同步環境設定。
```sh
$ npx envault
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/setup` 來進行註冊。

----

## 畫面截圖
![](https://i.imgur.com/LWypZQQ.png)
> 建立新的帳號

![](https://i.imgur.com/hYNeyuQ.png)
> 環境變數通常以大寫字元來表示