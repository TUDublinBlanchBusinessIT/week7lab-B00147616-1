<?php 
class Team {     
    private $name="";     
    private $totalPoints;     
    private $totalGames;     
    private $totalGoals; 
    
    public function __construct($parm1) {         
        $this->name = $name;         
        $this->totalPoints = 0;         
        $this->totalGoals = 0;         
        $this->totalGames = 0;     
    }    
    
    public function finalScore($parm1, $parm2) {         
        $this->totalGoals += $homeTeamScore;         
        $this->totalGames+=1; 
        
        if ($homeTeamScore > $opposingTeamScore) {             
            $this->totalPoints += 3; // Home team won         
            } elseif ($homeTeamScore === $opposingTeamScore) {             
                $this->totalPoints += 1; // It's a draw         
            }         
        
         }     
    
    
        