$(document).ready(function(){
    $("#searchBox").keyup(function(){
        var query = $("#searchBox").val();
        console.log(query);

        if(query.length > 1){
            console.log(query);
            $.ajax(
                {
                    url:'index.php',
                    method:'POST',
                    data: {
                        search: 1,
                        q: query
                    },
                    succes: function(data){
                        console.log(data);
                    },
                    datatype:'text'
                }
            )
        }
    });
    $(document).on('click', 'li', function () {
        var countries = $(this).text(); 
        $("#Searchbox").val(countries);
        $("#response").html("");
    })
}); 




// Script hors sujet sans Ajax

// const search = document.getElementById("search");
// const matchList = document.getElementById("match-list");

// //recherche dans le json et filtre
// const searchData = async (searchText) => {
//   const res = await fetch("data/recherche.json");
//   const data = await res.json();

//   console.log(data);
//   //obtien les match sur la recherche
//   let matches = data.filter((data) => {
//     const regex = new RegExp(`^${searchText}`, "gi");
//     return data.name.french.match(regex);
//   });

//   if (searchText.length === 0) {
//     matches = [];
//     matchList.innerHTML = '';
//   }

//   outputHtml(matches);
//   console.log(matches);
// };
// //Afficher les resultats 
// const outputHtml = (matches) => {
//   if (matches.length > 0) {
//     const html = matches.map(
//       (match) => `
//       <div class="card-body">
//       <h4>${match.name} <span class="text-primary">${match.type}</span> </h4>
//       </div>
//       `
//     ).join('');

//     console.log(html);

//     matchList.innerHTML = html;
//   }
// };

// search.addEventListener("input", () => searchData(search.value));


