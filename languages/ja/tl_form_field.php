<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * フォームの項目
 */
$GLOBALS['TL_LANG']['FFL']['lText'] = array('テキスト入力(文字変換)', '文字変換処理の拡張を加えたテキスト入力欄です。');
$GLOBALS['TL_LANG']['FFL']['lTextArea'] = array('テキストエリア(文字変換)', '文字変換処理の拡張を加えたテキストエリアです。');


/**
 * 項目
 */
$GLOBALS['TL_LANG']['tl_form_field']['conversion']    = array('入力文字列の変換', '入力文字列の変換処理を行います、すなわちUnicodeの正規化や日本語の全角文字と半角文字の変換を設定にしたがって行います。');
$GLOBALS['TL_LANG']['tl_form_field']['normalize']    = array('Unicodeの正規化', 'Unicodeの正規化を行います。');
$GLOBALS['TL_LANG']['tl_form_field']['convert_alpha']    = array('英文字の変換', '英文字を全角文字または半角文字に変換します。');
$GLOBALS['TL_LANG']['tl_form_field']['convert_digit']    = array('数字の変換', '数字を全角文字または半角文字に変換します。');
$GLOBALS['TL_LANG']['tl_form_field']['convert_alnum']    = array('英数記号文字の変換', '英数記号文字を全角文字または半角文字に変換します。全角に変換するときは以下の記号は変換しません: &quot; &#39; &#92; &#126;');
$GLOBALS['TL_LANG']['tl_form_field']['convert_space']    = array('スペースの変換', 'スペースを全角文字または半角文字に変換します。');
$GLOBALS['TL_LANG']['tl_form_field']['hKatakana']    = array('半角片仮名の変換', '半角片仮名を全角片仮名または全角平仮名に変換します。');
$GLOBALS['TL_LANG']['tl_form_field']['hDakuten'] = array('半角片仮名の濁点・半濁点を結合', '半角片仮名を全角片仮名または全角平仮名に変換するときに濁点と半濁点を結合します。');
$GLOBALS['TL_LANG']['tl_form_field']['fKatakana']    = array('全角片仮名の変換', '全角片仮名を全角平仮名または半角片仮名に変換します。');
$GLOBALS['TL_LANG']['tl_form_field']['fHiragana']    = array('全角平仮名の変換', '全角平仮名を全角片仮名または半角片仮名に変換します。');

/**
 * 見出し
 */
$GLOBALS['TL_LANG']['tl_form_field']['conversion_legend'] = '入力文字列の変換';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_form_field']['none'] = array('なし', '正規化を行いません。');
$GLOBALS['TL_LANG']['tl_form_field']['NFD']  = array('正規分解(NFD)', '正規等価な合成文字を結合文字列に分解します。');
$GLOBALS['TL_LANG']['tl_form_field']['NFC']  = array('正規分解して正規結合(NFC)', '正規等価な合成文字を結合文字列に分解して、正規等価な合成文字に合成します。');
$GLOBALS['TL_LANG']['tl_form_field']['NFKC'] = array('互換分解して正規結合(NFKC)', '互換等価な合成文字を結合文字列に分解して、正規等価な合成文字に合成します。');
$GLOBALS['TL_LANG']['tl_form_field']['NFKD'] = array('互換分解(NFKD)', '互換等価な合成文字を結合文字列に分解します。');
$GLOBALS['TL_LANG']['tl_form_field']['toFullwidth'] = '全角文字に変換';
$GLOBALS['TL_LANG']['tl_form_field']['toHalfwidth'] = '半角文字に変換';
$GLOBALS['TL_LANG']['tl_form_field']['toFKatakana'] = '全角片仮名に変換';
$GLOBALS['TL_LANG']['tl_form_field']['toFHiragana'] = '全角平仮名に変換';
$GLOBALS['TL_LANG']['tl_form_field']['toHKatakana'] = '半角片仮名に変換';
$GLOBALS['TL_LANG']['tl_form_field']['email-noidn'] = 
    array('非国際化電子メールアドレス', 
          '入力が国際化ドメインを使用しない電子メールアドレスかどうか(US-ASCIIだけ使用していることを)確認します。');
$GLOBALS['TL_LANG']['tl_form_field']['url-noidn'] = 
    array('非国際化URL', '入力が国際化ドメインを使用しないURLかどうか(US-ASCIIだけ使用していることを)確認します。');

?>
