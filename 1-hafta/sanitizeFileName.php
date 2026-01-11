<?php
function sanitizeFileName(string $filename): string
{
    $filename = strtolower($filename);              
    $filename = str_replace(' ', '_', $filename);   
    $filename = preg_replace('/[^a-z0-9_.]/', '', $filename); 

    return $filename;
}

echo sanitizeFileName("My CV 2026!!.PDF");

