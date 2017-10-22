<?php
/**
 * Created by PhpStorm.
 * User: Magda
 * Date: 2017-10-22
 * Time: 20:41
 */

class Task
{
    protected $name;
    protected $description;

    /**
     * Task constructor.
     * @param $name
     * @param $description
     */
    public function __construct($name = "Unknown", $description = "No info")
    {
        echo ("The task is created<br>");
        $this->setName($name);
        $this->setDescription($description);
    }

    public function printInfo($name, $description){
        echo ("The name of the task is: $name <br>");
        echo ("The task description is: $description <br>");
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        if(is_string($name) && strlen(trim($name)) < 0){
            $this->name = $name;
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        if(is_string($description) && strlen(trim($description)) > 0){
            $this->description = $description;
        }
        return $this;
    }

    public function __destruct()
    {
        echo ("The task is destroyed<br>");
    }


}
?>