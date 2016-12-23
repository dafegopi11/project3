function validate()  
{

   if( document.myForm.name.value == "" ) 
   {
      alert( "Please provide your name!" );
      document.myForm.name.focus() ;
      return false;
   }

   if( document.myForm.email.value == "" )
   {
      alert( "Please provide your e-mail!" );
      document.myForm.email.focus() ;
      return false;
   }

   if( document.myForm.phone.value == "" ||
   isNaN( document.myForm.phone.value ) ||
   document.myForm.phone.value.length != 10 )
   {
      alert( "Please provide a phone number in the format ##########." );
      document.myForm.phone.focus() ;
      return false;
   }

   if( document.myForm.message.value == "" )
   {
      alert( "Please write something in the message box!" );
      return false;
   }
   return( true );
}