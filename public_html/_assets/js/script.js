$(document).ready(function() {
  // Show/hide global form items
  $('.form-nav input').click(function() {
    if($(this).is(':checked')) {
      $('.global').show();
    } else {
      $('.global').hide();
    }
  });
});

var oopm = {};
oopm.checkbox = function(e){
  //console.log('Print: '+e.checked + ' id: '+e.id);  
  if(e.checked){
    $('.'+e.id).show(); $('.'+e.id+'-btn').show();    
    var i = $('.'+e.id + ' :input.is-required');    
    $(i).each(function(){      
      var req = $(this).attr('required', true);
      //console.log("id: " + $(this).attr('id') + ' req: '+ $(this).attr('required'));  
    });
  } else{
    $('.'+e.id).hide(); $('.'+e.id+'-btn').hide();
    var i = $('.'+e.id + ' :input.is-required');   
    $(i).each(function(){      
      var req = $(this).removeAttr('required'); 
      //console.log("id: " + $(this).attr('id') + ' req: '+ $(this).attr('required'));    
    });
  }
}

/**
 * reference from http://charlie.griefer.com/blog/2009/09/17/jquery-dynamically-adding-form-elements/
 */
var ad_limit = 3;
$('.btn-add').on('click', function(){
  var id = $(this).attr('id');
  
  /* split the id token */
  ary = id.split('_'); 
  
  /* get the name */
  e = ary[0];
  
  var n = $('.'+e).length;
  var num = new Number(n + 1);
  //console.log('id: '+id + ' add: '+e+ ' num: ' + n +' newNum: '+num);
  
  //create the new element via clone(), and manipulate it's ID using newNum value
  var elem = $('#'+e+n);
  var newElem = elem.clone().attr('id', e+num);
  var fileName = 'site-file-'+n+'[]';
  var file = newElem.find("input:file").attr({id: fileName, name: fileName}); //update the file IDs
  console.log('file name: '+file.attr('name'));
  
  //insert the new element after the last "duplicate"
  elem.after(newElem);
  
  //enable the "remove" button
  $('#'+e+'_btn-del').removeAttr('disabled');

  //business rule: you can adjust ad limit above
  if (num == ad_limit){
    $(this).attr('disabled','disabled');
  }
});

$('.btn-del').on('click', function(){
  var id = $(this).attr('id');
  ary = id.split('_');
  
  e = ary[0];
  var n = $('.'+e).length;
  
  var elem = $('#'+e+n);
  elem.remove();
  
  //console.log('remove: ' +e+n);
  
  //if only one element remains, disable the "remove" button
  if (n-1 == 1){
    $(this).attr('disabled','disabled');
  }
  
  if(n-1 < ad_limit){
    $('#'+e+'_btn-add').removeAttr('disabled');
  }
});