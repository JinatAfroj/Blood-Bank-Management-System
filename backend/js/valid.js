function validate()
      {
          
        var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?1234567890";
    
         if( document.myForm.fullname.value == "")
         {
            alert( "Please Enter your Fullname" );
            document.myForm.fullname.focus() ;
            return false;
         }
        
           if( !isNaN( document.myForm.fullname.value ) )
         {
            alert( "Full Name must be character" );
            document.myForm.fullname.focus() ;
            return false;
         }
          
      for (var i = 0; i < document.myForm.fullname.value.length; i++) 
        {
            if (iChars.indexOf(document.myForm.fullname.value.charAt(i)) != -1)     
            {
                alert ("Name cannot be Special characters or numbers");
                document.myForm.fullname.focus() ;
                return false;
            }
        }


          
        
          
        if( document.myForm.fullname.value.length < 4)
         {
            alert( "Fullname Cannot be less than 4 characters" );
            document.myForm.fullname.focus() ;
            return false;
         }
          
          
        if( document.myForm.username.value == "")
         {
            alert( "Please Enter your username" );
            document.myForm.username.focus() ;
            return false;
         }
        
          
        if( !isNaN( document.myForm.username.value ) )
         {
            alert( "Username must be character" );
            document.myForm.username.focus() ;
            return false;
         }
          
          
        for (var i = 0; i < document.myForm.username.value.length; i++) 
        {
            if (iChars.indexOf(document.myForm.username.value.charAt(i)) != -1)     
            {
                alert ("Name cannot be Special characters or numbers");
                document.myForm.username.focus() ;
                return false;
            }
        }
          
          
         if( document.myForm.username.value.length <3)
         {
            alert( "username Cannot be less than 3 characters" );
            document.myForm.username.focus() ;
            return false;
         }
          

        
        if (document.myForm.email.value == "") //string.indexOf(searchvalue, start)
        {
            window.alert("Please enter your Email");
            document.myForm.email.focus();
            return false;
        }
        if (document.myForm.email.value.indexOf("@", 0) < 0) //string.indexOf(searchvalue, start)
        {
            window.alert("Please enter a valid e-mail address.");
            document.myForm.email.focus();
            return false;
        }
        if (document.myForm.email.value.lastIndexOf(".") < document.myForm.email.value.indexOf("@", 0))
        {
            window.alert("Please enter a valid e-mail address.");
            document.myForm.email.focus();
            return false;
        }
          


          
          
          
         if( document.myForm.address.value == "")
         {
            alert( "Please give your address" );
            document.myForm.address.focus() ;
            return false;
         }
          
         
        if( document.myForm.phone.value == "")
         {
            alert( "Pleas enter your phone number" );
            document.myForm.address.focus() ;
            return false;
         }  
                
         if( isNaN( document.myForm.phone.value ) || document.myForm.phone.value.length != 11 )
         {
            alert( "Phone Number must be 11 digits and Numeric number" );
            document.myForm.phone.focus() ;
            return false;
         }
         
         if( document.myForm.bloodgrp.value == "" )
         {
            alert( "Please enter your Blood Group" );
             document.myForm.bloodgrp.focus() ;
            return false;
         }
          
        if( document.myForm.gender.value == "" )
         {
            alert( "Please enter your Gender" );
        
            return false;
         }
          
          if( document.myForm.dob.value == "" )
         {
            alert( "Please enter your Date Of Birth" );
            document.myForm.dob.focus() ;
            return false;
         } 
          
        if( document.myForm.password.value == "")
         {
            alert( "Please enter your Password" );
            document.myForm.password.focus() ;
            return false;
         }
          
         if( document.myForm.cpassword.value == "")
         {
            alert( "Please confirm your Password" );
            document.myForm.cpassword.focus() ;
            return false;
         }  
        
        if( document.myForm.password.value.length < 6 )
         {
            alert( "Password must be at least 6 character" );
             document.myForm.password.focus() ;
            return false;
         }
          
        if( document.myForm.password.value != document.myForm.cpassword.value )
         {
            alert( "Password Doesn't Match" );
             document.myForm.password.focus() ;
            return false;
         }
          
          
          
          
         
      }