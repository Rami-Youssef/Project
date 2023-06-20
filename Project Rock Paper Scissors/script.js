function getComputerChoice(){
    let choice=Math.floor((Math.random())*10);
    if(choice<=3){
        return computer='rock';
    }else if(choice>3 && choice<=6){
        return computer='paper';
    }else{
        return computer='scissors';
    }
}

function game(){
    let scoreME=0
    let scoreAI=0
    for(let i=0;i<6;i++){
        let input=prompt("give me your choice")
        input= input.toLowerCase()
        let gen=getComputerChoice()
        console.log(input+" "+gen)
        
        if(i==5){
            console.log(scoreAI+" "+scoreME)
            if(scoreME>scoreAI){
                return "YOU WON"
            }else if(scoreME>scoreAI){
                return "YOU LOST"
            }else{
                return "DRAW????"
            }
        }
        else if(input==gen){
            console.log('DRAW')
        }else{
            if(input=="scissors" && gen=="paper"){
                scoreME+=1
            }else if(input=="paper" && gen=="scissors"){
                scoreAI+=1
            }else if(input=="scissors" && gen=="rock"){
                scoreAI+=1
            }else if(input=="rock" && gen=="scissors"){
                scoreME+=1
            }else if(input=="rock" && gen=="paper"){
                scoreAI+=1
            }else if(input=="paper" && gen=="rock"){
                scoreME+=1
            }
        }
    }
}
console.log(game())



