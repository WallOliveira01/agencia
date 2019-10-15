document.querySelector('#desphoto').addEventListener('change', function(){
        
    var file = new FileReader();
  
    file.onload = function() {
      
      document.querySelector('#image-preview').src = file.result;
  
    }
  
    file.readAsDataURL(this.files[0]);
  
});