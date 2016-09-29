<?php namespace Unit;


class HtmlSerializer extends BaseSerializer
{
    public function serializeData($data)
    {
        return sprintf('<h1>%s</h1>', $data);
    }
}
