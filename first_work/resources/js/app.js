document.addEventListener('DOMContentLoaded',function(){
    const mainContent=document.getElementById('mainContent');
    const menuLinks = document.querySelectorAll('.ajax-menu');

    if (!mainContent) {
        return;
    }

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

// const url = `${pageUrls[page]}?t=${Date.now()}`;
//         fetch(url, {
//             method:"GET",
//             cache: 'no-store',
//             headers:{

//                 "X-Requested-With":"XMLHttpRequest"
//             }


        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Could not load page content.');
                }

                return response.text();
            })
            .then(html => {
                mainContent.innerHTML = html;
                initializeSearchInput();
            })
           .catch(() => {
                mainContent.innerHTML = '<p>Could not load this section.</p>';
            });
    }
    menuLinks.forEach(function(link){
        link.addEventListener('click',function(event){
            event.preventDefault();
            document.querySelectorAll(".menu li")
                    .forEach(function (item) {
                        item.classList.remove("active");
                    });

                this.closest("li").classList.add("active");
                const page = this.dataset.page;
                loadPage(page);

            }
        );

    });


    function initializeSearchInput(){
        const searchInput_inside = document.getElementById('searchInput_inside');
        if(!searchInput_inside){
            return;
        }
        searchInput_inside.addEventListener('input',function(){
            const searchText = this.value.toLowerCase();
            // const rows = document.querySelectorAll('.table-section table tbody tr');
            const rows = document.querySelectorAll('#mainContent tbody tr');
            rows.forEach(function(row){
                const rowText = row.innerText.toLowerCase();
                if(rowText.includes(searchText)){
                    row.style.display = "";
                }
                else{
                    row.style.display = "none";
                }
            });

        });
    }
    loadPage("dashboard");
});
