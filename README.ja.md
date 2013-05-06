# Form Text Converters

## はじめに

Form Text ConvertersはContao Open Source CMSの機能拡張です。

## 機能

この機能拡張はフォームジェネレーターのテキスト入力とテキストエリアに、いくつかの文字変換の機能を追加します。

* Unicodeの正規化
* 様々な日本語の文字変換

後者はPHPのmbstring拡張が有効な場合にだけ使用できますが、データベースのフィールドは無条件に追加します。

### Unicodeの正規化

Unicodeの正規化は、PHPのPEARのI18N_UnicodeNormalizerパッケージを使用して実装していて、以下の変換を提供しています:

* NFD: 正規分解で、正規等価な合成文字を結合文字列に分解します。
* NFC: 正規分解して正規結合で、正規等価な合成文字を結合文字列に分解して、正規等価な合成文字に合成します。
* NFKC: 互換分解して正規結合で、互換等価な合成文字を結合文字列に分解して、正規等価な合成文字に合成します。
* NFKD: 互換分解で、互換等価な合成文字を結合文字列に分解します。

すべての変換が実用的とは限りませんが、データの正規化に便利かもしれません。

ここでは、これらの変換内容についての詳細は書きません。[Wikipedia](http://ja.wikipedia.org/wiki/Unicode%E6%AD%A3%E8%A6%8F%E5%8C%96 "Unicode正規化")を参照してください。

I18N_UnicodeNormalizerを標準のPEARのパッケージとしてインストールすると、`Standard`というクラス名が競合する場合があるため、I18N_UnicodeNormalizer 1.0.0をこの機能拡張に含めています。(こうすることで問題は魔法のように解決し、何が起きているかもわかっていますが、今のところどうするのが正しい解決策かはわかっていません。)


### 様々な日本語の文字変換

これはほとんどPHPのmbstring拡張にあるmb_convert_kana関数のラッパーで、日本語の文字エンコーディングの世界の状況のためにあります。すなわち、同じ文字に異なる文字コードが存在するためです。

* 平仮名: 全角 (JIS X 0208)
* 片仮名: 全角 (JIS X 0208)と半角(JIS X 0201 Kana)
* アルファベットと数字: 全角(JIS X 0208)と半角(US-ASCIIまたはJIS X 0201 ローマ字)

(文字コードでは全角や半角は正確な用語ではありませんが、ここでは慣習的な意味で使用しています。)

そして、ユーザーは仮名漢字入力システムの状態に気づかずに、電子メールやURLを全角文字で入力してしまうことが時々あります。

これらの機能を使用して、テキストを一定の形式に変換して、より広範囲なユーザーの入力データーを受け付けることができるでしょう。

以下に可能な変換を示しますが、すべての組み合わせに意味があるわけではありません。

* アルファベット文字を全角または半角に変換
* 数字を全角または半角に変換
* 英数字を全角または半角に変換、以下を除いた記号も対象: " ' \ ~
* スペース文字を全角または半角に変換
* 濁点と半濁点を結合するかどうかも含んだ、半角の片仮名を全角の平仮名または片仮名に変換、
* 全角片仮名を全角平仮名または半角片仮名に変換
* 全角平仮名を全角片仮名または半角片仮名に変換


## ライセンス

ライセンスは二条項のBSDライセンスです。


Copyright (C) 2011, 2012, 2013
Takahiro Kambe.  All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

1. Redistributions of source code must retain the above copyright
   notice, this list of conditions and the following disclaimer.
2. Redistributions in binary form must reproduce the above copyright
   notice, this list of conditions and the following disclaimer in the
   documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE AUTHOR AND CONTRIBUTORS ``AS IS'' AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
ARE DISCLAIMED.  IN NO EVENT SHALL THE AUTHOR OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS
OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
SUCH DAMAGE.
