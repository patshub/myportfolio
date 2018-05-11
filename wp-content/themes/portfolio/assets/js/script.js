$( document ).ready(function() {

  $('.case-study-btn').click(function(){
    // Case Study Popup
    $('#case-study .container').css('max-height',$(window).height());
    $('html, body').css({
        overflow: 'hidden',
        height: '100%'
    });
    $('#case-study').fadeIn();
  });

  $('#case-study .close').click(function(){
    $('#case-study').fadeOut();
    $('html, body').css({
        overflow: 'auto',
        height: 'auto'
    });
  });

  // Add download attribute to resume link
  $("#menu-item-71 a").attr('download', 'resume');

  // Display First Tab
  $('.tab-1').addClass('active');
  $('.tabs li[data-id="tab-1"]').addClass('active');

  // When Tab item is clicked
  $('.tabs li').click(function(){
    // Activate Tab Menu Item
    $('.tabs li').removeClass('active');
    $(this).addClass('active');

    // Activate Tab Content
    $('.tab-item').removeClass('active');
    $('.'+$(this).attr('data-id')).addClass('active');
  });

});

$( window ).resize(function() {
  $('#case-study .container').css('max-height',$(window).height());
});

$(window).on('load', function() {
  $('.view-website-btn').css('display','table');
});
