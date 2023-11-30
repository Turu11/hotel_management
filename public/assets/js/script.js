const from_wrapper = document.querySelector('.from_wrapper');
const login_link = document.querySelector('.login-link');
const register_link = document.querySelector('.register-link');
const btnLogin_none = document.querySelector('.btnLogin-none');
const icon_close =document.querySelector('.icon-close')

register_link.addEventListener('click',()=> {
    from_wrapper.classList.add('active')
});

login_link.addEventListener('click',()=> {
    from_wrapper.classList.remove('active')
});

btnLogin_none.addEventListener('click',()=> {
    from_wrapper.classList.add('active-none')
});

icon_close.addEventListener('click',()=> {
    from_wrapper.classList.remove('active-none');
});