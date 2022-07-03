

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




document.addEventListener('DOMContentLoaded', (e) => {
  var params=window.location.href;
  var url = new URL(params);
  // var tabArray=params.split("*");
  var categorie = url.searchParams.get("categorie");
  if (categorie==null) {
      categorie=0;
  }
console.log(categorie);
// console.log(params.search(valueOf("categorie")));
document.getElementById(categorie).classList.add('active');

});