setInterval(showTime, 1000);
        function showTime() {
            
            let time = new Date();
            let day = time.getDate();
            let month = time.getMonth();
            let year = time.getFullYear();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();

            month = month + 1;

            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
  
            let currentTime = hour + ":" 
                + min + ":" + sec;

            let currentDate = day + "/"
                + month + "/" + year;
  
            document.getElementById("date")
                .innerHTML = currentDate;

            document.getElementById("clock")
                .innerHTML = currentTime;
        }
  
        showTime();