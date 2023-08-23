<?php

//class abstrak
interface Fruits {

    //nethod abstrak, yang hanya berupa interface semata, tidak boleh ada property apapun yaa
    public function eat();
    public function setColour($colour);
}

interface Noun {
    public function setSize($size);
}

//class turunannya mewarisi method parent
class Apple implements Fruits, Noun {
    protected $colour;
    protected $size;

    public function eat() {
        //isi cara makannya
    }

    public function setColour($colour) {
        $this->colour = $colour;
    }

    public function setSize($size) {
        $this->size = $size;
    }
}
class Mango implements Fruits {
    protected $colour;

    public function eat() {
        // makanlah makan
    }

    public function setColour($colour) {
        $this->colour = $colour;
    }
}