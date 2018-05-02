$( document ).ready(function() {

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
