<?php 

require_once __DIR__ . "/../config/settings.php";

if (!function_exists("baseUrl")) {
    function baseUrl(string $path = null, array $query = null)
    {

        if ($path !== null && $query !== null) {
            $build = http_build_query($query);
            return getConfig('base_url') . "/" . $path . "?" . $build;
        } elseif ($path !== null) {
            return getConfig('base_url') . "/" . $path;
        }

        return getConfig('base_url');
    }
}

if (!function_exists("resourceUrl")) {
    function resourceUrl(string $path = null)
    {
        if ($path !== null) {
            return baseUrl('resources' .  "/" . $path);
        }
        return baseUrl('resources');
    }
}


if (!function_exists("basePath")) {
    function basePath(string $path = null)
    {
        if ($path !== null) {
            return getConfig('base_path') . "/" . $path;
        }
        return getConfig('base_path');
    }
}

if (!function_exists("isDevelopment")) {
    function isDevelopment()
    {
        if (strtolower(getConfig('app_mode')) == "development") {
            return true;
        }
        return false;
    }
}

if (!function_exists("isProduction")) {
    function isProduction()
    {
        if (strtolower(getConfig('app_mode')) == "production") {
            return true;
        }
        return false;
    }
}


if (!function_exists("vite")) {

    function vite(string $path)
    {
        if (file_exists(basePath("resources/dist/.vite/manifest.json"))) {

            $manifestPath = basePath("resources/dist/.vite/manifest.json");

            $manifest = json_decode(file_get_contents($manifestPath), true);
            if (isset($manifest["resources/js/app.js"])) {
                if (strtolower($path) == "js") {
                    return "dist/" . $manifest["resources/js/app.js"]['file'];
                } elseif (strtolower($path) == "css") {
                    return "dist/" . $manifest["resources/js/app.js"]['css'][0];
                }
            }
        } else {
            return null;
        }
    }
}


if (!function_exists("redirect")) {
    function redirect(string $to, array $query = null)
    {
        if ($query !== null) {
            $httpQuery = http_build_query($query);
            return header("Location: $to?$httpQuery");
        }
        return header("Location: $to");
    }
}
