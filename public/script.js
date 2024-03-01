document.addEventListener('DOMContentLoaded', () => {
    const flash = document.getElementById('flash')
    if(flash){
        setTimeout(() => {
            flash.style.display = "none"
        }, 3000)
    }
})