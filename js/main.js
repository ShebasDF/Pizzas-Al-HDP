const countButtons=document.querySelectorAll("button").length;
  let products=[];
    for(i=0;i<countButtons;i++){
    document.querySelectorAll("button")[i].addEventListener("click",showValue);
    }
    function showValue(){
         
        if((this.value==4)||(this.value==5)){
          products.push(this.value +" Promo");
        }
        else
        {products.push(this.value); }
        alert( products.toString());
    
    }
    