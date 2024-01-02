var menuItem = document.querySelectorAll('.item')

function selectLink(){
  menuIteim.forEach((item)=>
    item.classList.remove('ativo')
  )
  this.classList.add('ativo')
}

menuItem.forEach((item)=>
  item.addEventListener('click', selectLink)
)

var btnExpd = document.querySelector('#btn-expd')
var menuSid = document.querySelector('.config')

btnExpd.addEventListener('click', function(){
  menuSid.classList.toggle('expandir')
})

