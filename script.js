var sideBarIsOpen='true';
toggleBtn.addEventListener('click', (event) => {
    event.preventDefault();
    function validateForm() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        document.getElementById('usernameError').innerHTML = '';
        document.getElementById('passwordError').innerHTML = '';

        if (username.trim() === '') {
            document.getElementById('usernameError').innerHTML = 'Username is required';
            return false;
        }

        if (password.trim() === '') {
            document.getElementById('passwordError').innerHTML = 'Password is required';
            return false;
        } else if (!/^.{8,}$/.test(password)) {
            document.getElementById('passwordError').innerHTML = 'Password must be at least 8 characters long';
            return false;
        }

        return true; 
    }

if(sideBarIsOpen){
dashboard_sidebar.style.width='10%';
dashboard_sidebar.style.transition='0.7s all';
dashboardMainContainer.style.width='90%';
dashboard_logo.style.fontSize='60px';
userImage.style.width='60px';
menuIcons=document.getElementsByClassName('menuText');
for(var i =0; i<menuIcons.length;i++)
{
    menuIcons[i].style.display='none';

}
document.getElementsByClassName('document_menu_lists')[0].style.textAlign='center';
}
else{
dashboard_sidebar.style.width='20%';
dashboardMainContainer.style.width='90%';
dashboard_logo.style.fontSize='80px';
userImage.style.width='80px';
        menuIcons=document.getElementsByClassName('menuText');
        for(var i =0; i<menuIcons.length;i++)
        {
            menuIcons[i].style.display='inline-block';

        }
        document.getElementsByClassName('document_menu_lists')[0].style.textAlign='left';
        sideBarIsOpen=false;

    }



    });