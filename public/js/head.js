document.addEventListener("DOMContentLoaded", function(){
    var animation = bodymovin.loadAnimation({
      container: document.getElementById('head'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      
      path: 'js/head.json'
    })
   
  })