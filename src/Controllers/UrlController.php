<?php
function urlHandler(string $url): string
{
    if ($_ENV['PRODUCTION'] and $_ENV['PRODUCTION'] === 'true') {
        return explode(".", $url)[0];
    }

    return $url;
}