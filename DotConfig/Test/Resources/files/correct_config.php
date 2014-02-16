<?php

return array(
    "client" => array(
        "cache" => array(
            "ttl" => 3600,
            "options" => array(
                "path" => "./src/MizzleGroup/Parser/Tests/Resources/filecache"
                ),
            //https://github.com/tedivm/Stash/tree/master/src/Stash/Driver
            "type" => "FileSystem"
        ),
        "pause" => 2000,
    ),
    "file" => array(
    	"maxsize" => 1048576
    	)
);