// $('.edit-btn').click(function(e) {
//     let name = e.target.parentNode.childNodes[1].textContent;
//     let email = e.target.parentNode.childNodes[3].textContent;
//     let task = e.target.parentNode.childNodes[5].textContent;

//     $('.modal-body')[0].childNodes[1].childNodes[3].value=name;  
//     $('.modal-body')[0].childNodes[1].childNodes[7].value=email;    
//     $('.modal-body')[0].childNodes[1].childNodes[11].value=task;    
    
// });
$('.edit-btn').click(function(e) {
    let name = e.target.parentNode.childNodes[3].value;
    let email = e.target.parentNode.childNodes[7].value;
    let task = e.target.parentNode.childNodes[11].value;
    let imagename = e.target.parentNode.childNodes[15].value;
    console.log(e.target.parentNode.childNodes[15].value);

        $('.modal-body')[0].childNodes[1].childNodes[3].value=name;  
        $('.modal-body')[0].childNodes[1].childNodes[7].value=email;    
        $('.modal-body')[0].childNodes[1].childNodes[11].value=task;  
       
});

$('.change-task-btn').click(function(e) {
   let change_name = e.target.parentNode.childNodes[1].textContent;
   let change_email = e.target.parentNode.childNodes[3].textContent;
   let change_task = e.target.parentNode.childNodes[5].textContent;
   let change_id = e.target.parentNode.childNodes[7].textContent;
   
   $('.change-form')[0].childNodes[1].childNodes[3].value=change_name.trim();
   $('.change-form')[0].childNodes[1].childNodes[7].value=change_email.trim();
   $('.change-form')[0].childNodes[1].childNodes[11].value=change_task.trim();
   $('.change-form')[0].childNodes[1].childNodes[15].value=change_id;

   
});

$('.change-image').click(function(e) {
    let change_image = e.target.parentNode.parentNode.childNodes[1].src;
    let change_id = e.target.parentNode.childNodes[7].textContent;
    console.log(change_id);
    console.log($('.change-task-image')[0].childNodes[3].childNodes[5].value=change_id);
    $('.change-task-image')[0].childNodes[1].src = change_image;
    
});

function changestatus(id) {
    console.log('done');
    event.preventDefault();
    $.ajax({
        url:"/changestatus",
        type:"POST",
        data:{id:id},
        success:function(response) {
            console.log('good');
        }
    });
}
