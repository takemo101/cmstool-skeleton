# CMS Tool Project

## 概要

このツールは、ヘッドレス CMS のフロントページを管理するためのツールです。  
このツールを使用することで、ヘッドレス CMS のフロントページの作成、編集、削除ができます。

## サポートしているヘッドレス CMS

現在は MicroCMS のみサポートしています。

## 必須環境

| 環境 |           バージョン            |
| :--: | :-----------------------------: |
| PHP  |            8.2 以上             |
|  OS  | MacOS, Linux （Windows 未対応） |

## インストール（composer create-project）

以下は`composer create-project`コマンドを使用して、プロジェクトを作成する方法です。

#### 1. プロジェクトの作成

```bash
$ composer create-project takemo101/cmstool-skeleton cms-tool
```

> composer がインストールされていない場合は、[こちら](https://getcomposer.org/download/)からインストールしてください。

#### 2. プロジェクトのディレクトリに移動

```bash
$ cd cms-tool
```

#### 3. プロジェクトのセットアップ

`console` コマンドを使用して、プロジェクトのセットアップを行います。

```bash
# 環境変数設定のため、.env.example を .env にコピー
$ cp .env.example .env

# .env の APP_KEY に割り当てる暗号キーの生成
$ php console generate:key

# storage ディレクトリのシンボリックリンクの生成
$ php console storage:link
```

#### 4. プロジェクトの起動

docker を使用して、apache や nginx などの環境を構築する場合は、ドキュメントルートを`/public`に設定してください。

また、docker を使用しない場合は、以下コマンドでビルトインサーバーを起動してください。

```bash
$ php console serve
```

ビルトインサーバーの起動後、ブラウザで http://localhost:8080 にアクセスすると、ブラウザからインストールを始めることが出来ます。

ちなみに、ビルトインサーバーのポート番号などを変更したい場合は`.env`ファイルを以下のように編集してください。

```dotenv
SERVER_PORT=ポート番号
SERVER_HOST=ホスト名
SERVER_SCRIPT=/public/index.php # ドキュメントルート
```

#### 5. インストールに必要なもの

MicroCMS の API キーとサービス ID が必要になります。

#### 6. インストール後の設定

インストール作業を完了すると、`http://localhost:8080/system/login`から管理画面にログインすることが出来ます。  

管理画面からは、SEO・外観テーマ・公開/非公開・アカウント・API の設定などを行うことが出来ます。

サイトの公開設定については、インストール直後は非公開になっていますので、公開する場合は管理画面ダッシュボードの「公開する」ボタンから公開を行ってください。

## インストール（microCMS テンプレート）

以下は、microCMS テンプレートを使用して、プロジェクトを作成する方法です。

作成されたプロジェクトのディレクトリに移動して、以下のコマンドを実行して必要なパッケージをインストールしてください。

```bash
$ composer install
```

> composer がインストールされていない場合は、[こちら](https://getcomposer.org/download/)からインストールしてください。

パッケージをインストールしたら、上記のインストール手順の 3. 以降の手順を実行してください。


## テーマについて

管理画面からテーマを変更することで、外観を変更することが出来ます。  
現状は、初期テーマとして「Simply」というブログテーマが設定されていますが、テーマの内容を編集したい場合は、一度複製してから編集する必要があります。  
テーマの複製は、管理画面の「テーマ」詳細から「複製」ボタンを押すことで複製することが出来ます。

複製したテーマは、`/themes`ディレクトリ以下に保存されますので、そのディレクトリ内のテンプレートなどを編集して、編集したテーマを管理画面から選択することで使用することが出来ます。

> 複製したテーマファイルには、`README.md`が含まれていますので、ご確認ください。

## キャッシュについて

ヘッドレス CMS から取得したデータは、キャッシュに保存されます。  
ただ、テーマの編集などを行った場合は、キャッシュをクリアする必要がありますので、以下のコマンドを実行してください。

```bash
$ php console cache:clean
```

常にキャッシュを無効にした場合は、`.env`ファイルの`CACHE_ENABLE`を`false`に設定してください。

キャッシュは、有効期限が切れた場合に自動的に削除されますが、Webhook を設定している場合は、Webhook が実行されたタイミングでキャッシュが削除されます。

> Webhook については、管理画面に記載されている URL をヘッドレス CMS の Webhook 設定に登録してください。

## アップデートについて

このプロジェクトでは、`takemo101/cms-tool`というパッケージを利用しており、以下の composer コマンドでパッケージをアップデートすることが出来ます。

```bash
$ composer update takemo101/cms-tool
```
