<?php
$xml = new SimpleXMLElement(file_get_contents('http://jxapi.openstreetmap.org/xapi/api/0.6/node%5Bamenity=pub%5D%5Bbbox=-77.041579,38.885851,-77.007247,38.900881%5D'));

foreach($xml->node as $currentPub) {
    foreach($currentPub->tag as $currentTag) {
        if($currentTag['k'] == 'name') {
            echo $currentTag['v'] . '<br />';
        }
    }
}
?>

<hr /><?php echo htmlentities($xml->saveXML()); ?>