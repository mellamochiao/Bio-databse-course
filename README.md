# 生物資料庫簡介與實作

本專案為成功大學大學「生物資料庫簡介與實作」之課程紀錄，內容涵蓋 HTML 、 PHP 、 MySQL 之練習，目的是熟悉網頁前後端互動與處理生物資料的程式能力。

## 專案內容

| 類別       | 檔案名稱                        | 說明                           |
|------------|----------------------------------|--------------------------------|
|HTML基礎語法|`html_basic.html`, `self_introduction.html`|練習HTML語法、架設自我介紹網站|
|PHP基礎語法|`php_basic.php`, `loop_practice.php`, `while_practice.php`| 練習 PHP 語法 |
|網頁前後端操作|`counting.php`, `counting_html`|建立表單讓使用者輸入數字，送出表單輸出計算結果|
|DNA序列處理| `DNA_count_form.html`, `DNA_count_form.php`, `DNA_reverse.html`, `DNA_reverse.php` | 建立表單讓使用者輸入 DNA 序列，計算鹼基出現次數、輸出反股DNA序列 |
|資料查詢|`gene_search.html`, `gene_search.php`|建立表單讓使用者輸入基因名稱並顯示相關資訊|
|連結MySQL資料庫|`student_list.html`, `student_list.php`|將使用者輸入之資料存入MySQL內，並能查看MySQL表格內之資料|


## 使用技術
- **HTML**：撰寫前端頁面與表單介面
- **PHP**：處理表單資料、進行邏輯運算
- **MySQL**：資料儲存與讀取（透過 PHP 連結）
- **Linux Server（Ubuntu）**：於實驗室伺服器部署與執行
- **Apache**：網站伺服器軟體，用於提供 PHP/HTML 網頁服務
- **SSH**：遠端登入伺服器並操作檔案

## 執行環境說明
本專案部署於成功大學熱植所PBMBLab伺服器（Ubuntu Linux 24.04），由 Apache 伺服器執行 PHP/HTML 程式。由於伺服器僅開放校內網路存取，因此僅能在校園網域中使用網頁功能。
範例網址格式：http://140.116.56.72/~H24121206/檔名


## 作者
- 周子喬
