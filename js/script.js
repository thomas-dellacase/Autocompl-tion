const search = document.getElementById("search");
const matchList = document.getElementById("match-list");

//recherche dans le json et filtre
const searchData = async (searchText) => {
  const res = await fetch("data/recherche.json");
  const data = await res.json();

  console.log(data);
  //obtien les match sur la recherche
  let matches = data.filter((data) => {
    const regex = new RegExp(`^${searchText}`, "gi");
    return data.name.french.match(regex);
  });

  if (searchText.length === 0) {
    matches = [];
  }
  console.log(matches);
};

search.addEventListener("input", () => searchData(search.value));
