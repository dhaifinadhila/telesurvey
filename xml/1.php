<?

$xml = "<library><book>PHP EveryDay</book></library>";
$sxe = new SimpleXMLElement($xml);

print $sxe->asXML();

?>