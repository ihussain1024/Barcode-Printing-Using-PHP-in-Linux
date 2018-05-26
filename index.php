$str_header="Code 128";
$str_footer="Footer Text";
$barcode_data="1234567890";

$content = "^XA^FO230,20^AD^FD".$str_header."^FS^FO230,135^AD^FD".$str_footer."^FS^FO230,40^BY2^BCN,70,Y,N,N^FD".$barcode_data."^XZ";

$fp = fopen($_SERVER['DOCUMENT_ROOT']."/barcodeprinter" . "/text.zpl","wb");
fwrite($fp,$content);
fclose($fp);
exec('lpr -P ZebraPenguin text.zpl');
