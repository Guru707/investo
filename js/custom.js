var canvas =document.getElementById("canvas");
canvas.width = 385;
canvas.height= 385;

let theWheel = new Winwheel({
  'outerRadius': 170, // Set outer radius so wheel fits inside the background.
  'innerRadius': 20, // Make wheel hollow so segments dont go all way to center.
  'textFontSize': 24, // Set default font size for the segments.
  'textFillStyle': '#ffffff',
  'textOrientation': 'vertical', // Make text vertial so goes down from the outside of wheel.
  'textAlignment': 'center', // Align text to outside of wheel.
  'numSegments': 8, // Specify number of segments.
  'responsive': true,
  'strokeStyle'       : '',
  'segments': // Define segments including colour and text.
  
    [ // font size and text colour overridden on backrupt segments.
      {
        'fillStyle': '#2eae74',
        'text': '300'
      },
      {
        'fillStyle': '#39a0e8',
        'text': '450'
      },
      {
        'fillStyle': '#c93c77',
        'text': '600'
      },
      {
        'fillStyle': '#faa629',
        'text': '750'
      },
      {
        'fillStyle': '#f3f3e9',
        'text': '500',
        'textFillStyle': '#f7a429' 
      },
      {
        'fillStyle': '#2eae74',
        'text': '300',
        'textFontSize': 24,
        'textFillStyle': '#ffffff'
      },
      {
        'fillStyle': '#e65051',
        'text': '3000',
        
      },
      {
        'fillStyle': '#faa629',
        'text': '600'
      },
    ],
  'animation': // Specify the animation to use.
  {
    'type': 'spinToStop',
    'duration': 20,
    'spins': 5,
    'callbackFinished': alertPrize, // Function to call whent the spinning has stopped.
    'callbackSound': playSound, // Called when the tick sound is to be played.
    'soundTrigger': 'segment' // Specify pins are to trigger the sound.
  },
  'pins': // Turn pins on.
  {
    'number': 0,
    'fillStyle': 'silver',
    'outerRadius': 0,
  }
});
var wonMoney;
// Loads the tick audio sound in to an audio object.
let audio = new Audio('tick.mp3');

// This function is called when the sound is to be played.
function playSound() {
  // Stop and rewind the sound if it already happens to be playing.
  audio.pause();
  audio.currentTime = 0;

  // Play the sound.
  audio.play();
}

$(window).resize(function(){
    $(".spin-wheel img").width($("canvas").width())
});

// Called when the animation has finished.
function alertPrize(indicatedSegment) {
   
  // Display different message if win/lose/backrupt.
  if (indicatedSegment.text == 'LOOSE TURN') {
    alert('Sorry but you loose a turn.');
  } else if (indicatedSegment.text == 'BANKRUPT') {
    alert('Oh no, you have gone BANKRUPT!');
  } else {       
   alert("You have won " + indicatedSegment.text);
    
    
  }
}

let wheelPower    = 0;
let wheelSpinning = false;

// -------------------------------------------------------
// Function to handle the onClick on the power buttons.
// -------------------------------------------------------
function powerSelected(powerLevel)
{
    // Ensure that power can't be changed while wheel is spinning.
    if (wheelSpinning == false) {
        // Reset all to grey incase this is not the first time the user has selected the power.
        document.getElementById('pw1').className = "";
        document.getElementById('pw2').className = "";
        document.getElementById('pw3').className = "";

        // Now light up all cells below-and-including the one selected by changing the class.
        if (powerLevel >= 1) {
            document.getElementById('pw1').className = "pw1";
        }

        if (powerLevel >= 2) {
            document.getElementById('pw2').className = "pw2";
        }

        if (powerLevel >= 3) {
            document.getElementById('pw3').className = "pw3";
        }

        // Set wheelPower var used when spin button is clicked.
        wheelPower = powerLevel;

        // Light up the spin button by changing it's source image and adding a clickable class to it.
        //document.getElementById('spin_button').src = "spin_on.png";
       // document.getElementById('spin_button').className = "clickable";
    }
}

// -------------------------------------------------------
// Click handler for spin button.
// -------------------------------------------------------
function startSpin()
{
    // Ensure that spinning can't be clicked again while already running.
    if (wheelSpinning == false) {
        // Based on the power level selected adjust the number of spins for the wheel, the more times is has
        // to rotate with the duration of the animation the quicker the wheel spins.
        if (wheelPower == 1) {
            theWheel.animation.spins = 3;
        } else if (wheelPower == 2) {
            theWheel.animation.spins = 8;
        } else if (wheelPower == 3) {
            theWheel.animation.spins = 15;
        }

        // Disable the spin button so can't click again while wheel is spinning.
        // document.getElementById('spin_button').src       = "../images/spin_off.png";
        // document.getElementById('spin_button').className = "";

        // Begin the spin animation by calling startAnimation on the wheel object.
        theWheel.startAnimation();

        // Set to true so that power can't be changed and spin button re-enabled during
        // the current animation. The user will have to reset before spinning again.
        wheelSpinning = true;
    }
}

// -------------------------------------------------------
// Function for reset button.
// -------------------------------------------------------
function resetWheel()
{
    theWheel.stopAnimation(false);  // Stop the animation, false as param so does not call callback function.
    theWheel.rotationAngle = 0;     // Re-set the wheel angle to 0 degrees.
    theWheel.draw();                // Call draw to render changes to the wheel.

    document.getElementById('pw1').className = "";  // Remove all colours from the power level indicators.
    document.getElementById('pw2').className = "";
    document.getElementById('pw3').className = "";

    wheelSpinning = false;          // Reset to false to power buttons and spin can be clicked again.
}

// $(document).ready(function(){
//   //var element = document.querySelector(".box-one");
//   if(wonMoney == String){
//     $(".box-one").addClass(active);
//     console.log
//   }
// });