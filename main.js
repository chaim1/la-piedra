var width = window.innerWidth;
var height = window.innerHeight;
console.log(width, height);

// (function(){
//             document.getElementById('space').style.top = tempVideo;

// })
// var tempVideo = `<video id="mtn"loop autoplay muted id="myVideo">
// <source src="imags/shul.mp4" type="video/mp4">
// Your browser does not support the video tag.
// </video>`;
// (function(){
//     if(width<500){
//         document.getElementById('change2').innerHTML = tempVideo;
//     }else if(width>500&&width<1000){
//         document.getElementById('change2').innerHTML = tempVideo;
//     }else{
//         document.getElementById("change2").innerHTML = " ";
    
//         document.getElementById("change2").innerHTML += tempVideo;
//     }
    
// })


$("#navA").hide();
window.addEventListener('scroll', function (e) {
    // e.preventDefault();
    const lastPosition = window.scrollY
    console.log(lastPosition);

    if (lastPosition > 10) {

        /*this for mobile*/ 
        if (document.getElementById('mtn2').clientHeight > 1) {
            
            var a = document.getElementById('mtn2').clientHeight;
            if (lastPosition > a) {

                var margin = true;
                document.getElementById('space').style.position = 'fixed';
                document.getElementById('space').style.marginTop = '-15px';

                
            }else{
                if(margin==true){
                    document.getElementById('space').style.position = 'static';
                    document.getElementById('space').style.marginTop = a+'px';
                }else{
                    document.getElementById('space').style.position = 'absolute';
                    document.getElementById('space').style.marginTop = a+'px';

                }

            }
        /*this for computer*/
        } else if (document.getElementById('mtn1').clientHeight>1) {

            var a = document.getElementById('mtn1').clientHeight;
            
            if (lastPosition > a) {
                var margin = true;
                document.getElementById('space').style.position = 'fixed';
                document.getElementById('space').style.marginTop = '-15px';

                
            }else{
                if(margin==true){
                    document.getElementById('space').style.position = 'static';
                    document.getElementById('space').style.marginTop = a+'px';
                }else{
                    document.getElementById('space').style.position = 'absolute';
                    document.getElementById('space').style.marginTop = a+'px';

                }
                

            }
            
        /*this for iped*/ 
        } else if (document.getElementById('mtn').clientHeight>1) {

            var a = document.getElementById('mtn').clientHeight;
            if (lastPosition > a) {

                var margin = true;
                document.getElementById('space').style.position = 'fixed';
                document.getElementById('space').style.marginTop = '-15px';

                
            }else{
                if(margin==true){
                    document.getElementById('space').style.position = 'static';
                    document.getElementById('space').style.marginTop = a+'px';
                }else{
                    document.getElementById('space').style.position = 'absolute';
                    document.getElementById('space').style.marginTop = a+'px';

                }

            }

        }

        $("#navA").show(200);
        $("#changeNavD").hide(300);

    } else if (lastPosition < 40) {

        $("#navA").hide(300);
        $("#changeNavD").show(200);

    }
    

})