---
--- Table `tl_form_field`
---

CREATE TABLE `tl_form_field` (
  `conversion` char(1) NOT NULL default '',
  `normalize` varchar(4) NOT NULL default '',
  `convert_alpha` varchar(12) NOT NULL default '',
  `convert_digit` varchar(12) NOT NULL default '',
  `convert_alnum` varchar(12) NOT NULL default '',
  `convert_space` varchar(12) NOT NULL default '',
  `hKatakana` varchar(12) NOT NULL default '',
  `hDakuten` char(1) NOT NULL default '',
  `fKatakana` varchar(12) NOT NULL default '',
  `fHiragana` varchar(12) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
