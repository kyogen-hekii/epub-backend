# epubs

## 概要
epub形式のリーダーwebアプリです。
https://www.kyoge.xyz

機能は以下の通りです。
- 一覧機能
- epub閲覧機能

## 使用技術(バックエンド)
- 言語: PHP
- フレームワーク: Laravel
- DB: mysql
- Webサーバ: nginx
- その他
  - Docker使用
  - 本番環境はAWS使用

## 本番環境について
### 主な使用サービス
- EC2
- ALB
- CloudFront
- S3
### コメント
最低限、SSL化をするための構成として
CloudFront -> ELB -> EC2
としています。

## その他
- フロントエンド https://github.com/kyogen-hekii/epub-app
