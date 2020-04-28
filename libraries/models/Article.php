<?php
/**
 * Hérite de getPdo vias $this de Model
 * & des Function  dans class Model
 */
namespace Models;

class Article extends Model 
{
    protected $table = "articles";   
}