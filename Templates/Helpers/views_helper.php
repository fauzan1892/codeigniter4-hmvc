<?php
/**
 * Created by Codekop - HMVC v1.0
 * 
 * This is files helper function
 * fpr enabled this helper function to file Templates\Controllers\BaseController
 * 
 */

/** HMVC Default Modules Views Rendering */
if (! function_exists('modulesView')) {
    function modulesView($dir, $vData = array())
    {
        $pattern = '/\//'; // The regular expression pattern to match a backslash
        $replacement = '\\\\'; // The replacement string, which is a backslash
        $outputView  = preg_replace($pattern, $replacement, $dir);
        // return view defaults 
        return view($outputView, $vData);
    }
}