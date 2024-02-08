window.addEventListener('DOMContentLoaded', (event) => {
           
            var table = document.querySelector('table');

            
            table.addEventListener('click', function(event) {
                var row = event.target.parentNode;
                var columns = row.getElementsByTagName('td');

               
                var projectID = columns[0].innerHTML;
                var location = columns[1].innerHTML;
                var startDate = columns[2].innerHTML;
                var endDate = columns[3].innerHTML;
                var leaderName = columns[4].innerHTML;

               
                var message = "Project ID: " + projectID +
                              "\nLocation: " + location +
                              "\nStart Date: " + startDate +
                              "\nEnd Date: " + endDate +
                              "\nLeader Name: " + leaderName;

                alert(message);
            });
        });
    