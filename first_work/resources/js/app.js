document.addEventListener('DOMContentLoaded',function(){
    const mainContent=document.getElementById('mainContent');
    const menuLinks = document.querySelectorAll('.ajax-menu');

    const pageUrls={
        dashboard: '/hr/dashboard',
        employees: '/hr/employees',
        attendance: '/hr/attendance',
        leave: '/hr/leave',
        recruitment: '/hr/recruitment',
        engagement: '/hr/engagement'
    };
    function loadPage(page){
        mainContent.innerHTML ='<div class="loading">Loading...</div>';
        fetch(pageUrls[page], {
            method:"GET",
            headers:{
                "X-Requested-With":"XMLHttpRequest"
            }
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Could not load page content.');
                }

                return response.text();
            })
            .then(html => {
                mainContent.innerHTML = html;
            })
           .catch(() => {
                mainContent.innerHTML = '<p>Could not load this section.</p>';
            });

    }

    menuLinks.forEach(function(link){
        link.addEventListener('click',function(event){
            event.preventDefault();
            document
                    .querySelectorAll(".menu li")
                    .forEach(function (item) {

                        item.classList
                            .remove("active");

                    });


                // Add active class

                this
                    .closest("li")
                    .classList
                    .add("active");


                // Get page name

                const page =
                    this.dataset.page;


                // Load page

                loadPage(page);

            }
        );

    });
    loadPage("dashboard");
});
