
const set_cookie = function(name, value, sameSite, duration) {
    let cookie = `${encodeURIComponent(name)}=`; 
        // Der Wert ist optonal
            if (value) {                                  
                cookie += `${encodeURIComponent(value)}`;
            }
            // Die Haltbarbarkeit ist auch optional
            if (sameSite) {
                cookie += `; SameSite=${sameSite}` ;
            }
            if (duration) {
                cookie += `; max-age=${duration}` ;
            }
            document.cookie = cookie;
        };
    
    /* === Check for COOKIES ===  */
    const has_cookie = function(name){
        let cookie_array = document.cookie.split(";"); 
        let regex = new RegExp(`^\\s?${encodeURIComponent(name)}=`); 
        for (let cookie of cookie_array) {
            if (cookie.match(regex)) {
            document.getElementById('cookieBanner').style.display = "none";
                return true;
            }
        }
        return false;
    }
    has_cookie("heatherCookie");
    
    
    
      const btnYes = document.getElementById('cookie-yes-btn');
        btnYes.addEventListener('click', function (e) {
            const cookieDiv = document.getElementById('cookieBanner');
            set_cookie("heatherCookie", "crumbleBumble", "Strict", 60*60*2);
            cookieDiv.style.display = "none";
                //alert("test")
            });
      const btnNo = document.getElementById('cookie-no-btn');
        btnNo.addEventListener('click', function (e) {
            const cookieDiv = document.getElementById('cookieBanner');
            cookieDiv.style.display = "none";
                //alert("test")
            });