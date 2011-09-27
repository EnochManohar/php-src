--TEST--
Bug #50590 (IntlDateFormatter::parse result is limited to the integer range)
--SKIPIF--
<?php if( !extension_loaded( 'intl' ) ) print 'skip'; ?>
--FILE--
<?php

$fmt = new IntlDateFormatter("en_US", IntlDateFormatter::FULL, IntlDateFormatter::FULL);
var_dump($fmt->parse("Wednesday, January 20, 2038 3:14:07 AM GMT"));

?>
--EXPECTF--
%s(2147570047)
