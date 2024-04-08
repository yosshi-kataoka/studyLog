<?php

function escape($string): string
{
  return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
}
