--TEST--
Check for beast presence
--SKIPIF--
<?php if (!extension_loaded("beast")) print "skip"; ?>
--FILE--
<?php 
file_put_contents('/tmp/test.php', '<?php echo "beast extension is available";');
beast_encode_file('/tmp/test.php', '/tmp/test-encode.php');
include '/tmp/test-encode.php';
unlink('/tmp/test-encode.php');
/*
	you can add regression tests for your extension here

  the output of your test code has to be equal to the
  text in the --EXPECT-- section below for the tests
  to pass, differences between the output and the
  expected text are interpreted as failure

	see php5/README.TESTING for further information on
  writing regression tests
*/
?>
--EXPECT--
beast extension is available
