const CCbottom = document.getElementById('CColor');
// const body = document.getElementsByName('body')[0];

CCbottom.onclick = function() {
    //document.body.style.backgroundColor = 'lightgreen';
    // document.body.setAttribute('class', 'biruM');
    document.body.classList.toggle('biruM');
}

const trandom = document.createElement('button');
const teksT = document.createTextNode('Random Color');
trandom.appendChild(teksT);
trandom.setAttribute('type', 'button');
CCbottom.after(trandom);

trandom.addEventListener('click', function() {
    const m = Math.round(Math.random() * 255 + 1);
    const h = Math.round(Math.random() * 255 + 1);
    const b = Math.round(Math.random() * 255 + 1);
    document.body.style.backgroundColor = 'rgb('+m+', '+h+', '+b+')';
})

// SETTING COLORS
// ------------>>>>
// ---------------->>>>>
// ------------>>>>

// RED-->
const sRed = document.querySelector('input[name=redSlide]');
const sGreen = document.querySelector('input[name=greenSlide]');
const sBlue = document.querySelector('input[name=blueSlide]');


sRed.addEventListener('input', function () {
    const h = sGreen.value;
    const m = sRed.value;
    const b = sBlue.value;
    document.body.style.backgroundColor = 'rgb('+m+', '+h+', '+ b +')';

    const kotak = document.getElementById('colorOutput');
    const all = kotak.style.backgroundColor = 'rgb('+m+', '+h+', '+ b +')';
    document.getElementById('colorOutput').innerHTML = ':'+all;
})

// GREEN

sGreen.addEventListener('input', function() {
    const h = sGreen.value;
    const m = sRed.value;
    const b = sBlue.value;
    document.body.style.backgroundColor = 'rgb('+m+', '+h+', 100)';

    const kotak = document.getElementById('colorOutput');
    const all = kotak.style.backgroundColor = 'rgb('+m+', '+h+', '+ b +')';
    document.getElementById('colorOutput').innerHTML = ':'+all;
})


// BLUE 
sBlue.addEventListener('input', function() {
    const h = sGreen.value;
    const m = sRed.value;
    const b = sBlue.value;
    document.body.style.backgroundColor = 'rgb('+m+', '+h+', '+ b +')';

    const kotak = document.getElementById('colorOutput');
    const all = kotak.style.backgroundColor = 'rgb('+m+', '+h+', '+ b +')';
    document.getElementById('colorOutput').innerHTML = ':'+all;
})



const kotak = document.getElementById('colorOutput');
const all = kotak.style.backgroundColor = 'rgb('+  +')'






