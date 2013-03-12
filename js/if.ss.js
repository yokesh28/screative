jQuery(function($){
        $.supersized({
    
          slideshow       : 1,   
          autoplay        : 1,  
          start_slide     : 1,  
          random          : 0,    
          slide_interval  : 5000, 
          transition      : 7,
          transition_speed: 700, 
          new_window      : 0,
          pause_hover     : 0,
          keyboard_nav    : 1,
          performance     : 2,    
          image_protect   : 1,
          image_path      : 'img/',

          min_width         : 1024,   
          min_height        : 768,    
          vertical_center   : 1,
          horizontal_center : 1,
          fit_portrait      : 1,
          fit_landscape     : 0,
          
          navigation            : 1,  
          thumbnail_navigation  : 1,  
          slide_counter         : 1,   
          slide_captions        : 1,   
          slides          : [   
                              {image : 'img/ss/if1.jpg', title : 'REINVENTANDO LA EXPERIENCIA WEB 3.0'},
                              {image : 'img/ss/if2.jpg', title : 'ARMONIZANDO LA FUERZA DE LA IMAGEN'},
                              {image : 'img/ss/if3.jpg', title : 'EVOLUCIONANDO LA INMERSIÓN DIGITAL 3D'},
                              {image : 'img/ss/if4.jpg', title : 'EXTENDIENDO LA PERCEPCIÓN AUDIOVISUAL'},
                              {image : 'img/ss/if5.jpg', title : 'DISEÑANDO CONCEPTOS A PARTIR DE IDEAS'}
                            ]                
        }); 
      });