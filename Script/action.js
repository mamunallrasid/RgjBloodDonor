    function popup(type,title,msg)
    {
        Swal.fire({
           title: title,
           text: msg,
           icon: type,
           confirmButtonClass: "btn btn-primary",
           buttonsStyling: !1
        });
    }
    function popup_reload(type,title,msg)
    {
        Swal.fire({
           title: title,
           text: msg,
           icon: type,
           confirmButtonClass: "btn btn-primary",
           buttonsStyling: !1
        }).then((result) => {
          location.reload();
        });
    }
    function popup_redirect(type,title,msg,url)
    {
        Swal.fire({
           title: title,
           text: msg,
           icon: type,
           confirmButtonClass: "btn btn-primary",
           buttonsStyling: !1
        }).then((result) => {
          location.href=url;
        });
    }

    function Toast_Slide() {
      toastr.success("I do not think that word means what you think it means.", "Bottom Full Width!", {
        showMethod:"slideDown",
        hideMethod:"slideUp",
        positionClass: "toast-bottom-right",
        timeOut:2e3,
        closeButton:!0
       
      })
    }

    var registrationForm = $('#Value_Store_Form');
    if(registrationForm.length){
       registrationForm.validate({
          
          errorPlacement: function(error, element) 
          {
            if (element.is(":radio")) 
            {
                error.appendTo(element.parents('.gen'));
                error.appendTo(element.parents('.gen'));
            }
            else if(element.is(":checkbox")){
                error.appendTo(element.parents('.checkbox'));
            }
            else 
            { 
                error.insertAfter( element );
            }
            
           },
           submitHandler: function(form,event) {
             event.preventDefault();
            //  
                   $.ajax({
                    url:$('#url').val(),
                    type:'post',
                    data: new FormData(form),
                    processData:false,
                    contentType:false,
                    dataType:"json",
                    beforeSend : function(){
                       $('#submit').attr('disabled',true);
                       $('#submit').html('Please Wait..');
                    },
                    success:function(data){
                        // console.log(data.message);
                         if(data.status==true && data.redirect==true && data.reload==false)
                        {
                          popup_redirect('success','Congratulation',data.message,data.url);
                        }
                        else if(data.status==true && data.redirect==false && data.reload==false)
                        {
                          popup('success','Congratulation',data.message);
                          $('#submit').attr('disabled',false);
                          $('#submit').html('Submit');
                        }
                        else if(data.status==true && data.redirect==false && data.reload==true)
                        {
                          popup_reload('success','Congratulation',data.message);
                        }
                        else if(data.status==false && data.redirect==false && data.reload==true)
                        {
                          popup_reload('warning','Warning',data.message);
                        }
                        else{
                          popup('warning','Warning',data.message);
                          $('#submit').attr('disabled',false);
                          $('#submit').html('Submit');
                        }
                    }
               });

              //  
           }
        });
    }
function userLogout()
{
      Swal.fire({
        title: "Are you sure?",
        text: "Logout Your Account",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok",
        confirmButtonClass: "btn btn-primary m-2",
        cancelButtonClass: "btn btn-danger m-2",
        buttonsStyling: !1
      }).then((function (t) {
         if(t.value)
         {
              $.ajax({
                url : "../Action/User/login.php",
                type : "POST",
                data:{
                  logout:"logout"
                },
                dataType : "json",
                beforeSend : function(){
                    $('#logout').html('Please wait...');
                    $('#logout').attr('disabled',true);
                },
                success : function (data)
                {
                     if(data.status==true && data.redirect==true && data.reload==false)
                        { 
                          popup_redirect('success','Congratulation',data.message,data.url);
                        }
                        else if(data.status==true && data.redirect==false && data.reload==false)
                        {
                          popup('success','Congratulation',data.message);
                          $('#submit').attr('disabled',false);
                          $('#submit').html('Submit');
                        }
                        else if(data.status==true && data.redirect==false && data.reload==true)
                        {
                          popup_reload('success','Congratulation',data.message);
                        }
                        else if(data.status==false && data.redirect==false && data.reload==true)
                        {
                          popup_reload('warning','Warning',data.message);
                        }
                        else{
                          popup('warning','Warning',data.message);
                          $('#submit').attr('disabled',false);
                          $('#submit').html('Submit');
                        }
                }

              });
         }
      }));

}

//User-LogOut
function adminLogout()
{
      Swal.fire({
        title: "Are you sure?",
        text: "Logout Your Account",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok",
        confirmButtonClass: "btn btn-primary m-2",
        cancelButtonClass: "btn btn-danger m-2",
        buttonsStyling: !1
      }).then((function (t) {
         if(t.value)
         {
              $.ajax({
                url : "../../Action/Admin/login.php",
                type : "POST",
                data:{
                  adminLogout:"adminLogout"
                },
                dataType : "json",
                beforeSend : function(){
                    $('#usrLogout').html('Please wait...');
                    $('#usrLogout').attr('disabled',true);
                },
                success : function (data)
                {
                     if(data.status==true && data.redirect==true && data.reload==false)
                        { 
                          popup_redirect('success','Congratulation',data.message,data.url);
                        }
                        else if(data.status==true && data.redirect==false && data.reload==false)
                        {
                          popup('success','Congratulation',data.message);
                          $('#submit').attr('disabled',false);
                          $('#submit').html('Submit');
                        }
                        else if(data.status==true && data.redirect==false && data.reload==true)
                        {
                          popup_reload('success','Congratulation',data.message);
                        }
                        else if(data.status==false && data.redirect==false && data.reload==true)
                        {
                          popup_reload('warning','Warning',data.message);
                        }
                        else{
                          popup('warning','Warning',data.message);
                          $('#submit').attr('disabled',false);
                          $('#submit').html('Submit');
                        }
                }

              });
         }
      }));

}
 

// function status(id,value,action)
// {
//       Swal.fire({
//         title: "Are you sure?",
//         text: "Update Your Blood Status",
//         icon: "warning",
//         showCancelButton: !0,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Ok",
//         confirmButtonClass: "btn btn-primary m-2",
//         cancelButtonClass: "btn btn-danger m-2",
//         buttonsStyling: !1
//       }).then((function (t) {
//          if(t.value)
//          {
//               $.ajax({
//                 url : "",
//                 type : "POST",
//                 data:{
//                   id:id,
//                   value:value,
//                   action:action
//                 },
//                 dataType : "json",
//                 beforeSend : function(){
//                     $('#logout').html('Please wait...');
//                     $('#logout').attr('disabled',true);
//                 },
//                 success : function (data)
//                 {
//                      if(data.status==true && data.redirect==true && data.reload==false)
//                         { 
//                           popup_redirect('success','Congratulation',data.message,data.url);
//                         }
//                         else if(data.status==true && data.redirect==false && data.reload==false)
//                         {
//                           popup('success','Congratulation',data.message);
//                           $('#submit').attr('disabled',false);
//                           $('#submit').html('Submit');
//                         }
//                         else if(data.status==true && data.redirect==false && data.reload==true)
//                         {
//                           popup_reload('success','Congratulation',data.message);
//                         }
//                         else if(data.status==false && data.redirect==false && data.reload==true)
//                         {
//                           popup_reload('warning','Warning',data.message);
//                         }
//                         else{
//                           popup('warning','Warning',data.message);
//                           $('#submit').attr('disabled',false);
//                           $('#submit').html('Submit');
//                         }
//                 }

//               });
//          }
//       }));

// }  
function updateStatus(id,value,actionurl)
{
      Swal.fire({
        title: "Are you sure?",
        text: "Do you Want to Change  Status",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ok",
        confirmButtonClass: "btn btn-primary m-2",
        cancelButtonClass: "btn btn-danger m-2",
        buttonsStyling: !1
      }).then((function (t) {
         if(t.value)
         {
              $.ajax({
                url : actionurl,
                type : "POST",
                data:{
                  id:id,
                  value:value
                },
                dataType : "json",
                beforeSend : function(){
                    $('#logout').html('Please wait...');
                    $('#logout').attr('disabled',true);
                },
                success : function (data)
                {
                     if(data.status==true && data.redirect==true && data.reload==false)
                        { 
                          popup_redirect('success','Congratulation',data.message,data.url);
                        }
                        else if(data.status==true && data.redirect==false && data.reload==false)
                        {
                          popup('success','Congratulation',data.message);
                          $('#submit').attr('disabled',false);
                          $('#submit').html('Submit');
                        }
                        else if(data.status==true && data.redirect==false && data.reload==true)
                        {
                          popup_reload('success','Congratulation',data.message);
                        }
                        else if(data.status==false && data.redirect==false && data.reload==true)
                        {
                          popup_reload('warning','Warning',data.message);
                        }
                        else{
                          popup('warning','Warning',data.message);
                          $('#submit').attr('disabled',false);
                          $('#submit').html('Submit');
                        }
                }

              });
         }
      }));

}  
	$(document).on('click','.delete_btn',function(event){

        var id =$(this).data('id');
        var url =$(this).data('url');
        var name=$(this).data('name');
        
        if(id !='')
        {
            Swal.fire({
                title: "Are you sure?",
                text: "Delete Record",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ok",
                confirmButtonClass: "btn btn-primary m-2",
                cancelButtonClass: "btn btn-danger m-2",
                buttonsStyling: !1
              }).then((function (t) {
                 if(t.value)
                 {
			    $.ajax({
                      url :url,
                      type : "POST",
                      data:{
                        id : id,
                        name:name,
                        delete:"delete"
                      },
                      dataType : "json",
                      beforeSend : function(){
                         $(this).html('Please wait...');
                         $(this).attr('disabled',true);
                      },
                      success : function (data)
                      {
                         if(data.status==true && data.redirect==true && data.reload==false)
                        {
                          popup_redirect('success','Congratulation',data.message,data.url);
                        }
                        else if(data.status==true && data.redirect==false && data.reload==false)
                        {
                          popup('success','Congratulation',data.message);
                          $(this).attr('disabled',false);
                          $(this).html('Delete');
                        }
                        else if(data.status==true && data.redirect==false && data.reload==true)
                        {
                          popup_reload('success','Congratulation',data.message);
                        }
                        else if(data.status==false && data.redirect==false && data.reload==true)
                        {
                          popup_reload('warning','Warning',data.message);
                        }
                        else{
                          popup('warning','Warning',data.message);
                          $(this).attr('disabled',false);
                          $(this).html('Delete');
                        }
                      }

                    });
			  } 
			}));
           
        }
        else
        {
           swal("Warning", "Please Select Minimun One Record", "warning");
          
        }

      event.preventDefault();
        
     });

   function deleteAccount(id)
   {
    Swal.fire({
      title: "Are you sure?",
      text: "Delete Your Account",
      icon: "warning",
      showCancelButton: !0,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ok",
      confirmButtonClass: "btn btn-primary m-2",
      cancelButtonClass: "btn btn-danger m-2",
      buttonsStyling: !1
    }).then((function (t) {
       if(t.value)
       {
            $.ajax({
              url : "../Action/User/user_delete.php",
              type : "POST",
              data:{
                id:id,
              },
              dataType : "json",
              success : function (data)
              {
                   if(data.status==true && data.redirect==true && data.reload==false)
                      { 
                        popup_redirect('success','Congratulation',data.message,data.url);
                      }
                      else if(data.status==true && data.redirect==false && data.reload==false)
                      {
                        popup('success','Congratulation',data.message);
                        $('#submit').attr('disabled',false);
                        $('#submit').html('Submit');
                      }
                      else if(data.status==true && data.redirect==false && data.reload==true)
                      {
                        popup_reload('success','Congratulation',data.message);
                      }
                      else if(data.status==false && data.redirect==false && data.reload==true)
                      {
                        popup_reload('warning','Warning',data.message);
                      }
                      else{
                        popup('warning','Warning',data.message);
                        $('#submit').attr('disabled',false);
                        $('#submit').html('Submit');
                      }
              }

            });
       }
    }));
   }







