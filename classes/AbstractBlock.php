<?php namespace ReaZzon\Editor\Classes;

use October\Rain\Extension\ExtendableTrait;
use ReaZzon\Editor\Classes\Contracts\EditorJsBlock;

abstract class AbstractBlock implements EditorJsBlock
{
    use ExtendableTrait;
}