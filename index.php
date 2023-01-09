<?php 
    class Movie {
    public $title;
    public $genre;
    public $director;
    public $year;
    public $language;
    public $plot;
    private $vote;

    public function __construct(string $_title,array $_genre,int $_year,int $_vote)
    {
        $this->title=$_title;
        $this->genre=$_genre;
        $this->year=$_year;
        $this->setVote($_vote);
    }
    public function setVote($_vote){
        $this->vote=$_vote/2;
    }
    public function getVote(){
        return $this->vote;
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>