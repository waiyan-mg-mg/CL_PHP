<?php
class Gun
{
    public function __construct($bulletCount)
    {
        if ($bulletCount > 6) {
            $bulletCount = 6;
        }
        $this->readyGun($bulletCount);
    }
    public $fakeShootSound;
    public $bullet = 0;
    private function readyGun($bulletCount)
    {
        $this->bullet = $bulletCount;
        echo $bulletCount;
    }
    public function shoot($fakeShootSound = 0)
    {
        for ($i = 0; $i < $fakeShootSound; $i++) {
            echo "Boom!" . '<br>';
        }
    }
};


$fire = new Gun(8);
echo $fire->shoot(4);