<?php

namespace DesignPattern\Behavioral\State\Php\Enum;

enum FileTypeEnum : string {
    case IMAGE      = 'image';
    case VIDEO      = 'video';
    case DOCUMENT   = 'document';
}