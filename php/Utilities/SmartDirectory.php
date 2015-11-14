<?php

namespace Utilities;

class SmartDirectory
{
    public static function directSubDirs($dir, $getHidden = false)
    {
        $list = [];
        if (is_dir($dir)) {
            $subDirs = scandir($dir);
            foreach ($subDirs as $subDir) {
                if (is_file($dir . '/' . $subDir)) {
                    continue;
                }
                if (!$getHidden && $subDir[0] == '.') {
                    continue;
                }

                $list[] = $subDir;
            }
        }
        return $list;
    }

    public static function directFiles($dir, $hidden = false)
    {

    }
}