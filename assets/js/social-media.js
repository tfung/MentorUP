// global name space
// Cleaner way to do this?

const shareWinHeight = 520;
const shareWinWidth = 640;

function shareWindow(url) {
  var winTop = (screen.height / 2) - (shareWinHeight / 2);
  var winLeft = (screen.width / 2) - (shareWinWidth / 2);

  window.open(url, 'Share Event', 'height='+shareWinHeight+', width='+shareWinWidth+', top='+winTop+', left='+winLeft+', toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');
}
