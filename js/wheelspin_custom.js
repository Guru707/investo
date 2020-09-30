var spin_outer =document.getElementById(".spin-wheel");
var canvas =document.getElementById("canvas");
canvas.width = 470;
canvas.height= 470;

let theWheel = new Winwheel({
  'outerRadius': 200, // Set outer radius so wheel fits inside the background.
  'innerRadius': 30, // Make wheel hollow so segments dont go all way to center.
  'textFontSize': 24, // Set default font size for the segments.
  'textFillStyle': '#ffffff',
  'textOrientation': 'curved', // Make text vertial so goes down from the outside of wheel.
  'textAlignment': 'center', // Align text to outside of wheel.
  'numSegments': 6, // Specify number of segments.
  'responsive': true,
  'lineWidth':3,
  'textMargin' : 30,
  'strokeStyle'       : '',
  // 'drawMode'          : 'segmentImage', 
  'segments': // Define segments including colour and text.
  
    [ // font size and text colour overridden on backrupt segments.
      
        // {'image' : 'amazon.png',  'text' : 'Amazon Voucher'},
        // {'image' : 'android.png',   'text' : 'Android  Phone'},
        // {'image' : 'live200.png',  'text' : '$200 Live Account'},
        // {'image' : 'better.png',  'text' : 'Better  Luck Next  Time'},
        // {'image' : 'shirt.png',   'text' : 'Free T-Shirt and Cap'},
        // {'image' : 'live100.png', 'text' : '$100 Live Account'},
        {'fillStyle' : '#bbb522', 'text' : 'Better\nLuck\nNext\nTim e '},
                   {'fillStyle' : '#67bb0a', 'text' : 'Amazone\nVoucher\nworth\nRs 2000'},
                   {'fillStyle' : '#7de6ef', 'text' : 'Android\nPhone'},
                   {'fillStyle' : '#e7706f', 'text' : '$200\nLive\nAccount'},
                   {'fillStyle' : '#c1c0a5', 'text' : 'Free\nT-Shirt\nand\nCap'},
                   {'fillStyle' : '#89f26e', 'text' : '$100\nLive\nAccount'},
// {'image' : 'steve.png', 'text' : 'Steve'}
     
     
     
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
// Create new image object in memory.
let loadedImg = new Image();

// Create callback to execute once the image has finished loading.
loadedImg.onload = function()
{
    theWheel.wheelImage = loadedImg;    // Make wheelImage equal the loaded image object.
    theWheel.draw();                    // Also call draw function to render the wheel.
}

// Set the image source, once complete this will trigger the onLoad callback (above).
loadedImg.src = "./images/wheel_back2.png";
console.log(loadedImg.src);
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
   $('#success_msg').html("You have won " + indicatedSegment.text);
   $('#exampleModalLong').modal('toggle');
    
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
