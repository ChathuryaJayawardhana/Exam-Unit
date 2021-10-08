var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");
var form3 = document.getElementById("form3");

var next1 = document.getElementById("btnNext1");
var next2 = document.getElementById("btnNext2");
var back = document.getElementById("btnBack1");
var backSignIn = document.getElementById("btnbackSignIn");
var signUpbtn = document.getElementById("btnSignUp");

var headLine = document.querySelector(".logo-and-back");


next1.addEventListener("click",()=>{
    form1.style.right = "110vh";
    form2.style.left = "0vh";
});

next2.addEventListener("click",()=>{
    form2.style.left = "-110vh";
    form3.style.left =  "0vh";
    console.log('clicked');
});
    
back.onclick = function(){
    form1.style.position = "relative";
    form1.style.right = "0vh";
    form2.style.position = "relative";
    form2.style.left = "200vh";
    document.getElementById("image1").style.transition ="2s";
    document.getElementById("image1").style.transform = "scale(1)";
    document.getElementById("formStyle2").style.transition ="2s";
    document.getElementById("formStyle2").style.width = "44.9%";
    document.getElementById("formStyle2").style.left = "81.9vh";
    document.getElementById("FormStyle1").style.transform = "scale(1)";
}

backSignIn.onclick = function(){
    document.getElementById("image1").style.transform = "scale(0)";
    document.getElementById("formStyle2").style.width = "55%";
    document.getElementById("formStyle2").style.left = "-1px";
    document.getElementById("FormStyle1").style.transform = "scale(0)";
    backSignIn.style.transform = "scale(0)";
    document.getElementById("image2").style.transform = "scale(1)";
    document.getElementById("btnbackSignIn").style.transform = "scale(1)";    
}

signUpbtn.addEventListener("click",()=>{
    
    var signUpButtonList = document.querySelector(".btn-list");
    signUpButtonList.classList.toggle("new-multi-register-show");

    var btnList = document.getElementsByClassName("multi-register");
    for(var i=0; i<btnList.length; i++)
    {
        if(i==0)
        {
            btnList[0].addEventListener("click",()=>{      
                signUpButtonList.classList.remove("new-multi-register-show");
                setTimeout(()=>
                {
                    document.getElementById("image1").style.transform = "scale(1)";
                    backSignIn.style.transform = "scaleY(1)";
                    headLine.classList.add("new-logo-and-back");
                },1300);
                btnbackSignInHide();
                document.getElementById("formStyle2").style.width = "44.9%";
                document.getElementById("formStyle2").style.left = "81.9vh";
                setTimeout(()=>{document.getElementById("FormStyle1").style.transform = "scale(1)";},500);
                document.getElementById("image2").style.transform = "scale(0)";
            });
        }
        else if(i==1)
        {
            btnList[1].addEventListener("click",()=>{
                alert("hello");
            });
        }
        else
        {
            btnList[2].addEventListener("click",()=>{
                alert("hey");
            });
        }
    }
    
});

function btnbackSignInHide()
{
    backSignIn.addEventListener("click",()=>{
        backSignIn.style.transform = "scaleY(0)";
        headLine.classList.remove("new-logo-and-back");
    });
}