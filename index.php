<?php

Kirby::plugin('bvdputte/headershift', [
    'fieldMethods' => [
        'headershift' => function ($field, $shift = 1) {

            $max = 6;
            $originalHeaderTags = [];
            $shiftedHeaderTags = [];

            for($i=$max; $i>=1; $i--)
            {

                $originalHeaderTags[] = '<h' . $i;
                $originalHeaderTags[] = '</h' . $i;

                $shiftedIndex = (($i + $shift) <= $max) ? ($i + $shift) : $max;
                $shiftedHeaderTags[] = '<h' . ($shiftedIndex);
                $shiftedHeaderTags[] = '</h' . ($shiftedIndex);
            }

            return str_ireplace($originalHeaderTags, $shiftedHeaderTags, $field);
        }
    ]
]);
