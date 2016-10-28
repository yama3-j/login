<?php

function connectDatabase()
{
  try
  {
    return new PDO(DNS,USER,PASSWORD);
  }
  catch(PDOException $e)
  {
    echo $e-> getMessage();
    exit;
  }
}

function h($s)
{
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

