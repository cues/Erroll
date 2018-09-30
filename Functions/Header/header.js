$(function(){
  $('#but_2').click(function(){
    $('.images_gallery_container').addClass('images_gallery_container_left');
    $('.work_container').addClass('work_container_left');
  })

  $('#but_1').click(function(){
    $('.images_gallery_container').removeClass('images_gallery_container_left');
    $('.work_container').removeClass('work_container_left');
  })
})
