(function() {
  $('#moveUp').onmouseover(function(ev) {
    return $(this).addClass('active');
  }, function(ev) {
    return $(this).removeClass('active');
  });

}).call(this);
