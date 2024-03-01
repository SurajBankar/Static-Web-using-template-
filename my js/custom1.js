function calculatePayment()
{
   var salary=document.getElementsByClassName("salary").value;
   var presentDays=document.getElementsByClassName("presentDays").value;
   var payment=document.getElementsByClassName("payment").value;
   for(var i=0;i<(salary.length);i++)
   {
   
    payment[i].value=((salary[i].value/30)*presentDays[i].value);
    
   }

}