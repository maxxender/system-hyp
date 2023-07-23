var selects = document.querySelectorAll('select')
selects.forEach(select =>{
    select.addEventListener('change',function(e){
        console.log(e.target.getAttribute('id'))
        console.log(e.target.parentNode)
        
    })
})

var actionsForms = document.querySelectorAll('.action-form')