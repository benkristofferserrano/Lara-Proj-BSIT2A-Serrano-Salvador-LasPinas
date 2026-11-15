const readBtn = document.getElementById('readBtn');
const extraText = document.getElementById('extraText');

readBtn.addEventListener('click', () => {

    if(extraText.style.display === 'none'){

        extraText.style.display = 'block';
        readBtn.textContent = 'Read Less';

    }else{

        extraText.style.display = 'none';
        readBtn.textContent = 'Read More';

    }

});