$(document).ready(function(){
    console.log(1);
    $('.first-image').click(function(){
      alert("Clicked");
      var firstImageSrc = $('.first-image').attr('src');
      var secondImageSrc = $('.second-image').attr('src');
      console.log(firstImageSrc);
      console.log(secondImageSrc);
      $('.first-image').attr('src',secondImageSrc);
      $('.second-image').attr('src',firstImageSrc);
    });
    $('.third-image-class').click(function(){
      var thirdImageContent = $('.third-image-class').html();
      var fourthImageContent = $('.fourth-image-class').html();
      console.log(thirdImageContent);
      console.log(fourthImageContent);
      $('.third-image-class').html(fourthImageContent);
      $('.fourth-image-class').html(thirdImageContent);
    });

    //sycronized programming
    // 1
    // 2
    // 3

    //assyncronized programming
    // command 1
    // command 2 $.ajax({});
    // command 3
    //command 4
    //command 5
    //command 6
    //command 7
    //command 8
    //command 9
    //command 10
    
  });