# Form Text Converters

## Introduction

Form Text Converters is an extension for Contao Open Source CMS.


## Function

This extension provides several character conversion function to Text field
and Textarea form fields of Form generator.

* Unicode Normalization
* Miscellaneous Japanese character conversion

Tha latter is only available with PHP's mbstring extension although database
fields would be added unconditionally.

### Unicode Normalization

Unicode Normalization is implemented with PHP PEAR I18N_UnicodeNormalizer and
provides several conversion:

* NFD:  Normalization Form Decomposite; Canonical Decomposition.
* NFC:  Normalization Form Composite; Canonical Decomposition, followed by Canonical Composition.'
* NFKC: Normalization Form Compatible Composite; Compatibility Decomposition, followed by Canonical Composition.
* NFKD: Normalization Form Compatible Decomposite; Compatibility Decomposition.

Not all of these conversion might be useful, but it might be convenient for
data normalization.

I wouldn't describe about these conversion here and please refer [Wikipedia](http://en.wikipedia.org/wiki/Unicode_equivalence "Unicode equivalence") in detail.

And since I18N_UnicodeNormalizer installed as standard PEAR package might be
cause the conflict of class name `Standard`, this extension bundles
I18N_UnicodeNormalizer 1.0.0.  (It magically solve the problem and I know what
was happened but what is the right solution now.)


### Miscellaneous Japanese character conversion

This is almost a wrapper for mb_convert_kana function of mbstring extension
and these function is almost for the situation of Japanese character encoding
world; there are differnt character codes for the same characters.

* Hiragana: full-width (JIS X 0208)
* Katakana: full-width (JIS X 0208) and half-width (JIS X 0201 Kana)
* Alphabet and digit: full-width (JIS X 0208) and half-width (US-ASCII or JIS X 0201 Roman)

("full-width" and "half-width" isn't correct term with character codes but
here I use as idiomatic expression.)

And user sometimes input E-mail or URL with full-width characters without
knowing the state of her/his input method.

With this function, texts could be converted to common format and widely
accept user's input data.

There are several selections for conversion and not all combinations are
useful.

* Convert alphabetic characters to full-widh or half-width.
* Convert numeric characters to full-widh or half-width.
* Convert alphanumeric characters to full-widh or half-width, including symbols except: " ' \ ~
* Convert space characters to full-widh or half-width.
* Convert half-width Katakana to full-widh Hiragana or Katakana and wheather compose voiced/semi-voiced sound mark with the conversion.
* Convert full-with Kataka to full-width Hiragana or half-width Katakana.
* Convert full-with Hiragana to full-width Katakana or half-width Katakana.


##  License

License is two caluse BSD license.
