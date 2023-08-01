var selects = document.querySelectorAll('select')
/*selects.forEach(select =>{
    select.addEventListener('change',function(e){
        console.log(e.target.options[e.target.selectedIndex].value)
        var valSelected = e.target.options[e.target.selectedIndex].value
        console.log(this.getElementsById(valSelected))
    })
})*/

var actionsForms = document.querySelectorAll('.action-form')

var options = document.querySelectorAll('option');
options.forEach(option=>{
    option.addEventListener('mousedown',function(e){
        e.target.style.color = 'red'
    })
})
