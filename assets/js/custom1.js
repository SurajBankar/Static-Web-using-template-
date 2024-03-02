function calculatePayment()
{ 
   
   var salary=document.getElementsByClassName("salary");

   var presentDays=document.getElementsByClassName("presentDays");
   var payment=document.getElementsByClassName("payment");

   for(var i=0;i<(salary.length);i++)
   {
    payment[i].value=((salary[i].value/30)*presentDays[i].value);
    
   }

}