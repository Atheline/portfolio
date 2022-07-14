var words = ["APPLE", "PIKACHU", "INSTAGRAM", "SPAGHETTI", "KFC"];
var hints = ["Fruit", "Pokemon", "Social Media", "Pasta", "Fast Food"];
var displayedWord = [];
fails = 0;
usedLetters = "";

var randomItem = words[Math.floor(Math.random()*words.length)];


function startBtn(ScorePastGame) {
document.getElementById("startmessage").value = "";
var inputs = document.getElementsByClassName('enableLetters');
for(var i = 0; i < inputs.length; i++) {
inputs[i].disabled = false;
}
    randomItem = words[Math.floor(Math.random()*words.length)];
    var i = 0;
    newWord = "";

    for (var i = 0; i< randomItem.length; i++) {
        newWord += "#";
    }

    fails = 0;
    console.log(randomItem);
    document.getElementById("fail").value = fails;
    document.getElementById("hangman").value = newWord;

    if (ScorePastGame && ScorePastGame !=0)
    {
        score = ScorePastGame;
    }
    else
    {
        score = 0;
    }
    fails = 0;
    usedLetters = "";
    var showClue = document.getElementById("clue");
    showClue.innerHTML = "";
}

function clickButton(letter) {
    var txtRandomword = document.getElementById("hangman").value;
    var WrongLetters = document.getElementById("startmessage").value;
    var liveNum = document.getElementById("fail").value;
    var Fail = true;

    if (randomItem.includes(letter))
    {
        for (var k = 0; k < randomItem.length; k++)
        {
            if(randomItem.charAt(k) == letter)
            {
                newWord = newWord.substr(0,k) + letter + newWord.substr(k + 1);
            }

        }
        document.getElementById("hangman").value = newWord;

        if (!newWord.includes("#"))
        {
          alert("You win!");
          fails = 0;
          score++;
          document.getElementById("score").value = score;
          usedLetters = "";
          startBtn(score);
        }

    }
    else
    {
        usedLetters += letter;
        const wrong = usedLetters.split('');
        let duplicateLetters = [...new Set(wrong)];
        document.getElementById("startmessage").value = duplicateLetters;
        document.getElementById("fail").value = duplicateLetters.length;


        if (duplicateLetters.length > 6) {
          alert("You lose!");
          fails = 0;
          usedLetters = "";
          startBtn();
        }
    }
}
function Hint() {
  var currentWord = randomItem;

  if (randomItem == "APPLE")
  {
    currentWord = "Fruits"
  }
  else if (randomItem == "PIKACHU")
  {
    currentWord = "Pokemon"
  }
  else if (randomItem == "INSTAGRAM")
  {
    currentWord = "Social Media"
  }
  else if (randomItem == "SPAGHETTI")
  {
    currentWord = "Pasta"
  }
  else
  {
    currentWord = "Fast Food"
  }

  var getHint = document.getElementById("hint");
  var showClue = document.getElementById("clue");
  showClue.innerHTML = "Clue: - " +  currentWord;
}
function Reset() {
  location.reload();
}
