
controller 作成  
``php artisan make:controller SampleController``


## etc
- Laravel8を試したら即効でエラー「Target class [〇〇〇Controller] does not exist.」が表示された 
  - https://qiita.com/tamakiiii/items/e71040173fa0a1fcad83
    - TLDR: ``Route::get('sample/upload', [SampleController::class, 'index']);``
