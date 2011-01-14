---
--- Table `tl_form_field`
---

CREATE TABLE `tl_form_field` (
  `normalize` varchar(4) NOT NULL default '',
  `alpha` varchar(12) NOT NULL default '',
  `digit` varchar(12) NOT NULL default '',
  `alnum` varchar(12) NOT NULL default '',
  `space` varchar(12) NOT NULL default '',
  `hKatakana` varchar(12) NOT NULL default '',
  `hDakuten` char(1) NOT NULL default '',
  `fKatakana` varchar(12) NOT NULL default '',
  `fHiragana` varchar(12) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
