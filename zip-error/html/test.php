<?php
try {
    $zip = new ZipArchive();
    $filename = "./test.zip";

    if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {
        exit("cannot open <$filename>\n");
    }

    $zip->addFromString("testfilephp.txt", "#1 This is a test string added as testfilephp.txt.\n");
    $zip->addFromString("testfile2.txt", "#2 This is a second test string added as testfile2.txt.\n");
    $zip->close();
} catch (\Throwable $th) {
    echo $th;
}
echo "yep2";
