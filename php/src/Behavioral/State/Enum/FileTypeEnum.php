<?php

namespace Imaarov\Patterns\Behavioral\State\Enum;

enum FileTypeEnum : string {
    case IMAGE      = 'image';
    case VIDEO      = 'video';
    case DOCUMENT   = 'document';
}