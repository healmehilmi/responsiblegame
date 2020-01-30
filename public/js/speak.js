var sidebar = $("#css");
var speechBubble = $("#SpeechBubble");


sidebar.hover(
  function() {
    speechBubble.css({
      "animation-name": "expand-bounce",
      "animation-duration": "0.25s"
    });
  },
  function() {
    speechBubble.css({
      "animation-name": "shrink",
      "animation-duration": "0.1s"
    });
  }
);

var sidebar = $("#quiz");
var speechBubble2 = $("#SpeechBubble2");


sidebar.hover(
  function() {
    speechBubble2.css({
      "animation-name": "expand-bounce",
      "animation-duration": "0.25s"
    });
  },
  function() {
    speechBubble2.css({
      "animation-name": "shrink",
      "animation-duration": "0.1s"
    });
  }
);

