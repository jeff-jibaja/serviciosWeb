const menu = document.getElementById('navegacion');
const boton_menu = document.getElementById('btn_menu');
const item_1= document.getElementById('li__item-1');
const item_2= document.getElementById('li__item-2');
const item_3= document.getElementById('li__item-3');



     boton_menu.addEventListener('click',()=>{
         console.log('click');
            
        if(document.getElementById('nav-movil').style.left === '0%' && screen.width < 576){
          
            document.getElementById('nav-movil').style.left = '-100%';
         
        }else{
            document.getElementById('nav-movil').style.left = '0%';
        }

     });

     item_1.addEventListener('click',(e)=>{
      if(screen.width < 576){
         document.getElementById('nav-movil').style.left = '-100%';
        }
        
     });

     item_2.addEventListener('click',(e)=>{
      if(screen.width < 576){
         document.getElementById('nav-movil').style.left = '-100%';
        }
     });

     item_3.addEventListener('click',(e)=>{
      if(screen.width < 576){
         document.getElementById('nav-movil').style.left = '-100%';
        }
     });


 
function scrol() {
    
      if (document.body.scrollTop > 42 || document.documentElement.scrollTop > 42) {
         menu.style.position ='fixed';
         menu.style.transition = 'all 0.9s linear';
         menu.style.background ='black';
         document.getElementById('banner').style.height='86%';
         document.getElementById('wave').style.height = '15%';
         menu.style.width = '100%'
       } else {
         menu.style.position ='relative';
         menu.style.transition = 'all 0.9s linear';
         menu.style.background ='none';
         document.getElementById('banner').style.height='81%';
         document.getElementById('wave').style.height = '20%';
         menu.style.width = '100%'
       }
    
  }

window.onscroll = function() {scrol()};

