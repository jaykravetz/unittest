<?php namespace Unit;


class Calculator
{
    /**
     * @var BaseSerializer
     */
    private $serializer;


    public function __construct(BaseSerializer $serializer)
    {
        $this->serializer = $serializer;
    }


    public function add()
    {
        $args = func_get_args();

        return array_sum($args);
    }


    public function addAndSerialize()
    {
        $args =  func_get_args();

        return $this->serializer->serializeData(array_sum($args));
    }
}
