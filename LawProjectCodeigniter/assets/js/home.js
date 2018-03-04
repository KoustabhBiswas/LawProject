function sidenav() {
	// body...\
	if(document.getElementById('side-nav').style.width == '70px'){
		
		document.getElementById('side-nav').style.width = '150px';
		document.getElementById('topnav').style.marginLeft = '135px';
		document.getElementById('main-body').style.marginLeft = '135px';
		//document.getElementById('topnav').style.marginLeft = '55px';
		var sidenav = document.getElementsByClassName('side-nav-name');
		for (var i =  0; i <= sidenav.length; i++) {
			sidenav[i].style.display = 'block';
		}

	}else{
		document.getElementById('side-nav').style.width = '70px';
		document.getElementById('topnav').style.marginLeft = '55px';
		document.getElementById('main-body').style.marginLeft = '55px';
		var sidenav = document.getElementsByClassName('side-nav-name');
		for (var i = 0; i <=sidenav.length ; i++) {
			 sidenav[i].style.display = 'none';
		}
	}
	//document.write(c);
}