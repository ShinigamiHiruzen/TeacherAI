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

const forms = document.querySelectorAll('.form');

forms.forEach(form => {
    form.addEventListener('click', () => {
        const formText = form.querySelector('.text h5').innerText;

        document.querySelector('.nome-formulario h2').innerText = formText;
    });
});
