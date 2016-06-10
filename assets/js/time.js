function getTime() {

  getAccurateTime();

  return {
    'total': window.syncedDate,
    'years':window.syncedDate.getFullYear(),
    'months':window.syncedDate.getMonth(),
    'days': window.syncedDate.getDate() + "<sup>" + nth(window.syncedDate.getDate()) + "</sup>",
    'hours': window.syncedDate.getHours(),
    'minutes': window.syncedDate.getMinutes(),
    'seconds': window.syncedDate.getSeconds(),
    'milliseconds': window.syncedDate.getMilliseconds(),
    'offset':window.offset
  };
}

/**
 * The following code is adapted and improved upon http://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/
 */

function nth(d) {
  if(d>3 && d<21) return 'th';
  switch (d % 10) {
        case 1:  return "st";
        case 2:  return "nd";
        case 3:  return "rd";
        default: return "th";
    }
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');
  var monthsSpan = clock.querySelector('.months');
  var yearsSpan = clock.querySelector('.years');

  var monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];

  function updateClock() {
    var t = getTime();

    daysSpan.innerHTML = t.days;
    monthsSpan.innerHTML = monthNames[t.months];
    yearsSpan.innerHTML = t.years;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

/**
 * The following code is
 * Adapted from http://xjubier.free.fr/en/site_pages/LunarEclipseCalculator.html
 * Copyright Xavier Jubier
 */

var myPhaseName = "";
var forecastImage = new Array();

function moonPhasePercent(theDate)
{
  var synodic = 29.53058867;
  var msPerDay = 86400000;
  var baseDate = new Date();
  baseDate.setUTCFullYear(2005);
  baseDate.setUTCMonth(4);
  baseDate.setUTCDate(8);
  baseDate.setUTCHours(8);
  baseDate.setUTCMinutes(48);

  var diff = theDate - baseDate;
  var phase = diff / (synodic * msPerDay);
  phase *= 100;
  phase %= 100;
  if ( phase < 0 )
    phase += 100;

  return(phase);
}

function getMoonPhase()
{

  var theDate = new Date();

  var phasePercent = moonPhasePercent(theDate);

  var phaseNames = [
    "New Moon", "New Moon",
    "Waxing Crescent", "Waxing Crescent", "Waxing Crescent", "Waxing Crescent",
    "First Quarter", "First Quarter", "First Quarter",
    "Waxing Gibbous", "Waxing Gibbous", "Waxing Gibbous", "Waxing Gibbous", "Waxing Gibbous",
    "Full Moon", "Full Moon",
    "Waning Gibbous", "Waning Gibbous", "Waning Gibbous", "Waning Gibbous",
    "Last Quarter", "Last Quarter", "Last Quarter",
    "Waning Crescent", "Waning Crescent", "Waning Crescent", "Waning Crescent",
    "New Moon"
  ];

  thePhase = Math.round(phasePercent * 0.279);
  myPhaseName = phaseNames[thePhase];

  return thePhase;
}

function calcMoonPhase()
{
  $("#moonPhaseImage").attr("src", $("#moonPhaseImage").attr("src") + getMoonPhase() + ".png");
  $("#moonPhaseImage").attr("title", myPhaseName);
  $("#moonPhaseTitle").html(myPhaseName);
}

$( document ).ready(function() {
  
  maxTimes = 1;
  window.callback = function(count, max){
    initializeClock('clockdiv', new Date(Date.parse(new Date())));
    calcMoonPhase();
  }
  window.getTimeDiff();

});
