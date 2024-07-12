# クライアント名・プロジェクト名

| クライアント名   | 若葉保育園                                                                   |
| :--------------- | :--------------------------------------------------------------------------- |
| 顧客番号         | 0092                                                                         |
| デザイン担当者   | ヤマナカ                                                                     |
| 初期構築         | 瀬戸                                                                         |
| CMS              | WordPress                                                                    |
| ドメイン         | wakaba                                                                       |
| ドメイン管理     | 不明                                                                         |
| 本番サーバー     | 不明                                                                         |
| 本番サーバー状態 | 不明                                                                         |
| テストサーバー   | https://yohakutest.xsrv.jp/wakaba/                                           |
| Bitbucket        | https://bitbucket.org/yohaku_shimizu/wakaba-hoiku/src/master/                |
| NAS              | share > 制作中の案件 > 0092\_若葉保育園                                      |
| GoogleDrive      | https://drive.google.com/drive/u/0/folders/1n7vgtaFtTqA47cPG9CMt6fSX8BgWsLAw |

## 案件概要

サンプルテキスト

## 必須プラグイン

- Advanced Custom Fields (カスタムフィールド設定)
- Smart Custom Fields（カスタムフィールド設定）
- Custom Post Type UI (カスタム投稿設定)
- All-in-One WP Migration(移管データのエクスポート／インポート)
- All-in-One WP Migration Unlimited Extension(移管データ拡張)
- Contact Form 7 (お問い合わせフォーム)

## 投稿

## お客様更新

## 注意事項

例:セクション毎の余白が乱調です。フロントコーディングの際は注意してクラスの作成を行ってください。詳しいデザインの仕様は GoogleDrive 内の仕様書を確認してください。  
https://drive.google.com/drive/x/x/folders/XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

### セクションクラスの命名規則

セクションセレクタのクラス名は命名規則に従って付与してください。  
`.section-init`を必ずつけセクションの余白毎に`.pad-y-50`のようなクラスをつけてください。

```
// HTML記述例

<section class="section-init pad-y-50">
{{content}}
</section>
```

```
// SCSS記述

.section-init {
  // sectionの共通設定
  max-width: $break-point_xl;
  margin: auto;
  padding: 16px;

  // 上下50pxの場合
  &.pad-y-50 {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  // 上下100pxの場合
  &.pad-y-100 {
    padding-top: 100px;
    padding-bottom: 100px;
  }

  // 上50px、下100pxの場合
  &.pad-t-50-b-100 {
    padding-top: 50px;
    padding-bottom: 100px;
  }
}
```

## 修正などの対応記録

| 年月日     | 実施者 | 内容                                              |
| :--------- | :----- | :------------------------------------------------ |
| 2022/09/29 | 瀬戸   | 初期構築　プラグインのインストール・README の記述 |
