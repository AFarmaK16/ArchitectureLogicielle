

function closeFunction()
{
    document.getElementById('popup').classList.remove('active');
}
  //**********************DELETE COMPTE 
  // function ShowDetails(tab) {
  //   const popup= document.getElementById('popup');
  //   var tabArray=tab.split("*");
  //    $.ajax({
  //               type:'POST',
  //               url:'detailsArticle.php',
  //               data:{
  //                 name:tab,
  //               },
  //               success:function(data){
  //                 // document.getElementById('output').innerHTML(data);
  //                 if (tabArray[1]=="all") {
  //                   popup.classList.add('active');
  //                   $('#g').html("<p onclick='closeFunction();' style='color:red;pointer:cursor;'>X</p>"+data);
  //                 }
  //                 else{
  //                   $('#g').html(data);
  //                 }
  //                 // alert(data);
  //                 // window.location.reload();
  //               }
  //             }); 
  // }

  function ShowDetails(tab) {
    
        var tabArray=tab.split("*");
        // alert(tab);
        // if (tabArray[1]=="all") {
        //   document.getElementById('popup').style.visibility="visible";
        //   }
        // alert(tabArray[0]);
    // window.location.href()
    // document.getElementById(tabArray[0]).classList.add('active');
    // alert(document.getElementById(tabArray[0]).innerHTML);
    window.location.href='detailsArticle.php?tab='+tab;
  }