<?php

function h($str)
{
  htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}